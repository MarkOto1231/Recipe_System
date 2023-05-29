@extends('layout')
@section('content')


<div class="container-fluid">
    <div class="card" style="margin:10px">
        <div class="card-header"><h5>Recipe Info</h5></div>
        <div class="card-body">
            <div class="row">
                <div class="col-4 md-3" style="text-align:center">
                    <div class="card" >
                        <img src="{{ asset('uploads/recipe/'. $recipe -> Recipe_image)}}" width="100%" height="300px" alt="Image" >
                        <h5 class=card-title>Name  :</h5>
                        <h5 class=card-title>{{ $recipe -> Recipe_name    }}</h5>
                        <p class="text-sm-start">Maker :</p>
                        <p class="text-sm-start">{{ $recipe -> Recipe_maker   }}</p>
                        <p class="text-sm-start">Date Created:</p>
                        <p class="text-sm-start">{{ $recipe ->created_at}}</p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="height:100%">
                        <p style="margin:20px"> Details:</p> 
                        <div class="col-sm">{{ $recipe -> Recipe_details  }}</div>
                    </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm" style="text-align:center">
                    <div class="card" style="height:100%">
                    <div class="card" style="text-align:center">
                        Steps :
                        <pre class="card-text"> {{ $recipe -> Recipe_steps   }}</pre>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="height:100%">
                        <div class="card" style="text-align:center" >
                        Ingredients :
                        <pre class="card-text" > {{ $recipe -> Recipe_ingredients   }}</pre>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
        
    </div>
</div>

@endsection