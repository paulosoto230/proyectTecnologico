<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Tipoproducto
 *
 * @property $id
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class tipo_producto extends Model
{
    use HasFactory;

    protected $table = 'tipo_producto';


    public function productos()
    {
        return $this->hasMany('App\Models\Productos', 'tipoproducto_id', 'id');
    }
}
