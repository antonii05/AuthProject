<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id
 * @property string $nombre
 * @property int|null $edad
 * @property string|null $dni
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property int|null $rol
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Usuario extends Model
{
	use HasFactory;
	protected $table = 'usuarios';

	protected $casts = [
		'edad' => 'int',
		'email_verified_at' => 'datetime',
		'rol' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'nombre',
		'edad',
		'dni',
		'email',
		'email_verified_at',
		'password',
		'rol',
		'remember_token'
	];
	public static function getAtributos(): array
	{
		return [
			'id',
			'nombre',
			'edad',
			'dni',
			'email',
			'rol',
		];
	}
}
