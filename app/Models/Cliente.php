<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string $nombre_fiscal
 * @property string $email
 * @property string $password
 * @property string $nif
 * @property string $pais
 * @property string $provincia
 * @property bool|null $activo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Cliente extends Model
{

	use HasFactory;
	
	protected $table = 'clientes';

	protected $casts = [
		'activo' => 'bool'
	];


	//Se crearan para crear las tablas
	protected $attributes = [
		'id',
		'nombre_fiscal',
		'email',
		'nif',
		'pais',
		'provincia',
		'activo'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nombre_fiscal',
		'email',
		'password',
		'nif',
		'pais',
		'provincia',
		'activo'
	];
}
