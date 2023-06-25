<?php

namespace App\Http\Controllers;

use App\Models\RecipeIngredient;
use Illuminate\Http\Request;

/**
 * Class RecipeIngredientController
 * @package App\Http\Controllers
 */
class RecipeIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipeIngredients = RecipeIngredient::paginate();

        return view('recipe-ingredient.index', compact('recipeIngredients'))
            ->with('i', (request()->input('page', 1) - 1) * $recipeIngredients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recipeIngredient = new RecipeIngredient();
        return view('recipe-ingredient.create', compact('recipeIngredient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RecipeIngredient::$rules);

        $recipeIngredient = RecipeIngredient::create($request->all());

        return redirect()->route('recipe-ingredients.index')
            ->with('success', 'RecipeIngredient created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipeIngredient = RecipeIngredient::find($id);

        return view('recipe-ingredient.show', compact('recipeIngredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipeIngredient = RecipeIngredient::find($id);

        return view('recipe-ingredient.edit', compact('recipeIngredient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RecipeIngredient $recipeIngredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecipeIngredient $recipeIngredient)
    {
        request()->validate(RecipeIngredient::$rules);

        $recipeIngredient->update($request->all());

        return redirect()->route('recipe-ingredients.index')
            ->with('success', 'RecipeIngredient updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recipeIngredient = RecipeIngredient::find($id)->delete();

        return redirect()->route('recipe-ingredients.index')
            ->with('success', 'RecipeIngredient deleted successfully');
    }
}
