<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient_Calorie extends Model
{
    protected $table= 'ingredients_calories';
    protected $fillable=[
        'id', 'worth','ingredients_id'

    ];
    public function Ingredient()
    {
        return $this->belonsToMany(Ingredient::class);

    }

}
