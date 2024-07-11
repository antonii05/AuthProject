<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $id
 * @property string $nombre_pedido
 * @property string $descripcion
 * @property float $precio
 * @property int|null $id_usaurio
 * @property int|null $id_cliente
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';

	protected $casts = [
		'precio' => 'float',
		'id_usaurio' => 'int',
		'id_cliente' => 'int'
	];

	protected $fillable = [
		'nombre_pedido',
		'descripcion',
		'precio',
		'id_usaurio',
		'id_cliente'
	];
}
