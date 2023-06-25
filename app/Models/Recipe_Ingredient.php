<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe_Ingredient extends Model
{
    protected $table= 'recipe_ingredients';
    protected $fillable=[
        'id', 'name','recipes_id', 'ingredients_id'

    ];
    public function Ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }
    public function Recipes()
    {
        return $this->hasOne(Recipe::class);
    }

}



