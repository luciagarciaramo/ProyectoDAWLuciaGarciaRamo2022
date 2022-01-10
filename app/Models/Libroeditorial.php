<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libroeditorial
 *
 * @property $id
 * @property $libro
 * @property $editorial
 * @property $created_at
 * @property $updated_at
 *
 * @property Editorial $editorial
 * @property Libro $libro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libroeditorial extends Model
{
    
    static $rules = [
		'libro' => 'required',
		'editorial' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['libro','editorial'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function editorial()
    {
        return $this->hasOne('App\Models\Editorial', 'id', 'editorial');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function libro()
    {
        return $this->hasOne('App\Models\Libro', 'isbn', 'libro');
    }
    

}
