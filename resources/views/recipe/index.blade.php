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
                        <a href="{{ url('/check/recipe-list/create') }}" class="btn btn-success btn-sm" title="Add New Recipe">Add New</a>
                        <br/>
                        <br/>
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
                                        <td>{{$item->Recipe_details}}</td>
                                    

                                        <td>
                                            <a href="{{ url('/check/recipe-list/' . $item->id) }}" title="View Recipe"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                            <a href="{{ url('/check/recipe-list/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            
                                            <form method="POST" action="{{ url('/check/recipe-list' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Recipe" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection