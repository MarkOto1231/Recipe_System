@extends('layout')
@section('content')

    <div class="container-fluid">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    
                    <div class="card-header">
                        <h2>Recipe List</h2>
                    </div> 

                    <div class="card-body">
                        <a href="{{ url('/check/recipe-list/create') }}" class="btn btn-success btn-sm" title="Add New Recipe"><i class="bi bi-file-plus"></i> Add New</a>
                        <br/>
                        <br/>

                 
                        <form class="firn-inline my-2 my-lg0o" type="get" action="{{ url ('/check/search') }}">
                            <input class="form-control mr-sm-2" value="{{ request()->input('search') }}"name=search type="search" placeholder="Search for recipe name">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">{{ __('Search') }}</button> 
                        </form>
                        <div class = "table-reponsive">
                            <table class="table" style="text-align:center; ">
                                <tr>
                                    <th>Recipe Image</th>
                                    <th>Recipe Name</th>
                                    <th class="w-50">Recipe Details</th>
                                   
                                    <th>Action</th> 
                                </tr>
                                <tbody>
                                    
                                @foreach ($recipe as $item)
                                    <tr>
                                        
                                        <td><img src="{{ asset('uploads/recipe/'. $item->Recipe_image)}}" width="100px" height="100px" alt="Image"></td>
                                        <td>{{$item->Recipe_name}}</td>
                                        <td>{{ Illuminate\Support\Str::limit($item->Recipe_details, 200) }}</td>
                                    

                                        <td>
                                            <a href="{{ url('/check/recipe-list/' . $item->id) }}" title="View Recipe"><button class="btn btn-info btn-sm"><i class="bi bi-eye"></i>View</button></a>
                                            <a href="{{ url('/check/recipe-list/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</button></a>
                                            
                                            <form method="POST" action="{{ url('/check/recipe-list' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Recipe" onclick="return confirm("Confirm delete?")"><i class="bi bi-trash"></i> Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        
                            <div class="d-flex justify-content-center">
                            <ul class="pagination">
                                {!! $recipe->links() !!}
                            </ul>
                            </div>

                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection