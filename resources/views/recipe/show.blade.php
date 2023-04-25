@extends('layout')
@section('content')

    <div class="card" style="margin:20px">
        <div class="card-header"><h5>Recipe Info</h5></div>
        <div class="card-body">
        
            <div class="card-body">
                <div class="row">

                    <div class="col-sm md-3" style="text-align:center">
                        <div class="card">
                        <img src="{{ asset('uploads/recipe/'. $recipe -> Recipe_image)}}" width="100%" height="300px" alt="Image" >
                    <h5 class=card-title>Name  : {{ $recipe -> Recipe_name    }}</h5>
                    <p class="card-text">Maker : {{ $recipe -> Recipe_maker   }}</p>
                        </div>
                    
                    </div>
                    
                    <div class="col-sm">
                        <div class="card" style="text-align:center">
                        Steps :
                        <pre class="card-text"> {{ $recipe -> Recipe_steps   }}</pre>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="card" style="text-align:center">
                        Ingredients :
                        <pre class="card-text" > {{ $recipe -> Recipe_ingredients   }}</pre>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="row" style="text-align:center"> 
  
         <div class="col-4"><br></div>
            Details: 
            <div class="col-6">{{ $recipe -> Recipe_details  }}</div>
        </div>
        </div>
    </div>
    
@endsection