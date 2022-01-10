<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Editorial
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Libroeditorial[] $libroeditorials
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Editorial extends Model
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
    public function libroeditorials()
    {
        return $this->hasMany('App\Models\Libroeditorial', 'editorial', 'id');
    }
    

}
