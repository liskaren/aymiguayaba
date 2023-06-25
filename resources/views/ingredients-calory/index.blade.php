@extends('layouts.app')

@section('template_title')
    Ingredients Calory
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ingredients Calory') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ingredients-calories.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Worth</th>
										<th>Ingredients Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ingredientsCalories as $ingredientsCalory)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ingredientsCalory->worth }}</td>
											<td>{{ $ingredientsCalory->ingredients_id }}</td>

                                            <td>
                                                <form action="{{ route('ingredients-calories.destroy',$ingredientsCalory->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ingredients-calories.show',$ingredientsCalory->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ingredients-calories.edit',$ingredientsCalory->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $ingredientsCalories->links() !!}
            </div>
        </div>
    </div>
@endsection
