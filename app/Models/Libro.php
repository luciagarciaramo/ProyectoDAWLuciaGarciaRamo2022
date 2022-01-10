<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $isbn
 * @property $nombre
 * @property $paginas
 * @property $genero_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Genero $genero
 * @property Libroautor[] $libroautors
 * @property Libroeditorial[] $libroeditorials
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'isbn' => 'required',
		'nombre' => 'required',
		'paginas' => 'required',
		'genero_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['isbn','nombre','paginas','genero_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genero()
    {
        return $this->hasOne('App\Models\Genero', 'id', 'genero_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libroautors()
    {
        return $this->hasMany('App\Models\Libroautor', 'isbn', 'isbn');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libroeditorials()
    {
        return $this->hasMany('App\Models\Libroeditorial', 'libro', 'isbn');
    }
    

}
