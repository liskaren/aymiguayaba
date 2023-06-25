<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RecipeIngredient
 *
 * @property $id
 * @property $name
 * @property $recipes_id
 * @property $ingredient_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Ingredient $ingredient
 * @property Recipe $recipe
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RecipeIngredient extends Model
{
    
    static $rules = [
		'name' => 'required',
		'recipes_id' => 'required',
		'ingredient_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','recipes_id','ingredient_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ingredient()
    {
        return $this->hasOne('App\Models\Ingredient', 'id', 'ingredient_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recipe()
    {
        return $this->hasOne('App\Models\Recipe', 'id', 'recipes_id');
    }
    

}
