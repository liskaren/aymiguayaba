<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Favorite
 *
 * @property $id
 * @property $recipe_id
 * @property $usuarios_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Recipe $recipe
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Favorite extends Model
{
    
    static $rules = [
		'recipe_id' => 'required',
		'usuarios_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['recipe_id','usuarios_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recipe()
    {
        return $this->hasOne('App\Models\Recipe', 'id', 'recipe_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'usuarios_id');
    }
    

}
