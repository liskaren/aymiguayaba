@extends('layouts.app')

@section('template_title')
    Recipe Ingredient
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Recipe Ingredient') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('recipe-ingredients.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Recipes Id</th>
										<th>Ingredient Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recipeIngredients as $recipeIngredient)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $recipeIngredient->name }}</td>
											<td>{{ $recipeIngredient->recipes_id }}</td>
											<td>{{ $recipeIngredient->ingredient_id }}</td>

                                            <td>
                                                <form action="{{ route('recipe-ingredients.destroy',$recipeIngredient->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('recipe-ingredients.show',$recipeIngredient->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('recipe-ingredients.edit',$recipeIngredient->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $recipeIngredients->links() !!}
            </div>
        </div>
    </div>
@endsection
