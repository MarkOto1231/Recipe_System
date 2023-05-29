@extends('layout')
@section('content')

<div class="container" style="margin:20px">
    <div class="card">
        <div class="card-header">Dashboard
            
        </div>
        
            @foreach ($recipe as $item)
                <div class="card" style="margin:5px">
                    <div class="row">
                        <div class="col-2">
                            <div class="card">
                                <a href="{{ url('/check/recipe-list/' . $item->id) }}"><img src="{{ asset('uploads/recipe/'. $item->Recipe_image)}}" width="150px" height="150px" alt="Image"></a>
                               <p style="text-align:center">{{$item->Recipe_name}}</p>
                            </div>
                        </div>
                        <div class="col-sm">
                            {{$item->Recipe_details}}
                        </div>
                    </div>

                </div>
            @endforeach
            <div class="d-flex justify-content-center">
                <ul class="pagination">
                    {!! $recipe->links() !!}
                </ul>
        </div>
    </div>
</div>

@endsection