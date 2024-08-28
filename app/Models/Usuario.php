<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * Class Usuario
 * 
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
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
class Usuario extends Authenticatable implements JWTSubject
{
	use HasFactory, Notifiable;

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
		'apellidos',
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
			'apellidos',
			'edad',
			'dni',
			'email',
			'rol',
		];
	}

	//Metodos implementados
	use Notifiable;

	// Rest omitted for brevity

	/**
	 * Get the identifier that will be stored in the subject claim of the JWT.
	 *
	 * @return mixed
	 */
	public function getJWTIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Return a key value array, containing any custom claims to be added to the JWT.
	 *
	 * @return array
	 */
	public function getJWTCustomClaims()
	{
		return [];
	}
}
