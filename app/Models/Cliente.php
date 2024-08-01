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
 * @property string $nif
 * @property string|null $direccion
 * @property int|null $codigo_postal
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
		'codigo_postal' => 'int',
		'activo' => 'bool'
	];

	protected $fillable = [
		'nombre_fiscal',
		'email',
		'nif',
		'direccion',
		'codigo_postal',
		'pais',
		'provincia',
		'activo'
	];

	public static function getAtributos()
	{
		return [
			'id',
			'nombre_fiscal',
			'email',
			'nif',
			'direccion',
			'codigo_postal',
			'pais',
			'provincia',
			'activo'
		];
	}
}
