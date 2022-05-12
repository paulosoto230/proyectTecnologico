<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property $id
 * @property $marca
 * @property $modelo
 * @property $precio
 * @property $stock
 * @property $tipoproducto_id
* @property Tipoproducto $tipo_producto;
* @package App
*@mixin \Illuminate\Database\Eloquent\Builder
 */
class productos extends Model
{
    use HasFactory;

     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoproducto()
    {
        return $this->hasOne('App\Models\Tipoproducto', 'id', 'tipoproducto_id');
    }
}
