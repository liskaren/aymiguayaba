<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IngredientsCalory
 *
 * @property $id
 * @property $worth
 * @property $ingredients_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Ingredient $ingredient
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class IngredientsCalory extends Model
{
    
    static $rules = [
		'worth' => 'required',
		'ingredients_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['worth','ingredients_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ingredient()
    {
        return $this->hasOne('App\Models\Ingredient', 'id', 'ingredients_id');
    }
    

}
