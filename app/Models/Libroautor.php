<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libroautor
 *
 * @property $id
 * @property $isbn
 * @property $autor_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Autor $autor
 * @property Libro $libro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libroautor extends Model
{
    
    static $rules = [
		'isbn' => 'required',
		'autor_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['isbn','autor_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function autor()
    {
        return $this->hasOne('App\Models\Autor', 'id', 'autor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function libro()
    {
        return $this->hasOne('App\Models\Libro', 'isbn', 'isbn');
    }
    

}
