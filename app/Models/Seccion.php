<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seccion
 *
 * @property $id
 * @property $color
 * @property $created_at
 * @property $updated_at
 *
 * @property Genero[] $generos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Seccion extends Model
{
    
    static $rules = [
		'color' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['color'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function generos()
    {
        return $this->hasMany('App\Models\Genero', 'seccion', 'id');
    }
    

}
