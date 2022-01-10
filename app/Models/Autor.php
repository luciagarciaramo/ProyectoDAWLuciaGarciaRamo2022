<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autor
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Libroautor[] $libroautors
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autor extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libroautors()
    {
        return $this->hasMany('App\Models\Libroautor', 'autor_id', 'id');
    }
    

}
