<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    public function index()
    {
        $Igredients = Recipe::latest()->paginate(5);
        return view('ingredients.index',compact('Ingredients'))
        ->with('i',(request()->input('page',1) -1)*5);
    }

    public function create()
    { return view('ingredients.create');
    }


    public function store (Request $request)
    {
    request()->validate([
        'name'=>'description'
        ,
    ]);

    crop::create($request->all());
    return redirect()->route('recipe.index')
    ->with('success','ingredientes','agregado');
    }

    public function show($id)
    {
        $crop = crop::find($id);
        return view('ingredients.show', compact('crop'));
    }

    public function edit($id)
{
    $crops = crop::find($id);
    return view('ingredients.edit', compact('crops'));
}


public function update (Request $request,$id)
{
    request()->validate([
        'name'=>'description'

    ]);
    crop::find($id)->update($request->all());
    return redirect()->route('ingredients.index')
    ->with('warning','ingredientes','actualizada');
}

public function destroy($id)
{
    crop::find($id)->route('ingredients.index')
    ->with('error','ingredientes','eliminado');
}
}
