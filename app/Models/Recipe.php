<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recipe
 *
 * @property $id
 * @property $name
 * @property $calories
 * @property $amount
 * @property $units
 * @property $created_at
 * @property $updated_at
 *
 * @property Favorite[] $favorites
 * @property RecipeIngredient[] $recipeIngredients
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recipe extends Model
{
    
    static $rules = [
		'name' => 'required',
		'calories' => 'required',
		'amount' => 'required',
		'units' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','calories','amount','units'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function favorites()
    {
        return $this->hasMany('App\Models\Favorite', 'recipe_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipeIngredients()
    {
        return $this->hasMany('App\Models\RecipeIngredient', 'recipes_id', 'id');
    }
    

}
