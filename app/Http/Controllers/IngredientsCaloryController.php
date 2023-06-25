<?php

namespace App\Http\Controllers;

use App\Models\IngredientsCalory;
use Illuminate\Http\Request;

/**
 * Class IngredientsCaloryController
 * @package App\Http\Controllers
 */
class IngredientsCaloryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredientsCalories = IngredientsCalory::paginate();

        return view('ingredients-calory.index', compact('ingredientsCalories'))
            ->with('i', (request()->input('page', 1) - 1) * $ingredientsCalories->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredientsCalory = new IngredientsCalory();
        return view('ingredients-calory.create', compact('ingredientsCalory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(IngredientsCalory::$rules);

        $ingredientsCalory = IngredientsCalory::create($request->all());

        return redirect()->route('ingredients-calories.index')
            ->with('success', 'IngredientsCalory created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingredientsCalory = IngredientsCalory::find($id);

        return view('ingredients-calory.show', compact('ingredientsCalory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingredientsCalory = IngredientsCalory::find($id);

        return view('ingredients-calory.edit', compact('ingredientsCalory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  IngredientsCalory $ingredientsCalory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IngredientsCalory $ingredientsCalory)
    {
        request()->validate(IngredientsCalory::$rules);

        $ingredientsCalory->update($request->all());

        return redirect()->route('ingredients-calories.index')
            ->with('success', 'IngredientsCalory updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ingredientsCalory = IngredientsCalory::find($id)->delete();

        return redirect()->route('ingredients-calories.index')
            ->with('success', 'IngredientsCalory deleted successfully');
    }
}
