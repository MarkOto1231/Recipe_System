@extends('layout')
@section('content')
    <div class="card" style="margin:20px">
        <div class="card-header">Edit Info</div>
        <div class="card-body">
           
            <form action="{{ url('/check/recipe-list/').'/'.$recipe->id}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            @method("PUT")
            <div class = "form-group mb-3">
            <label>Recipe Image</label><br>
            <img src="{{ asset('uploads/recipe/'. $recipe->Recipe_image)}}" width="100px" height="100px" alt="Image"><br>
            <input type="file" name="Recipe_image" value =" {{ $recipe -> Recipe_image }}" id="Recipe-image" class="form-group md-3" style="margin-top:10px">
            </div>

            <div class = "form-group mb-3">
            <label>Recipe Name</label>
            <input type="text" name="Recipe_name" value =" {{ $recipe -> Recipe_name }} " id="Recipe-name" class="form-control">
            </div>

            <div class = "form-group mb-3">
            <label>Maker</label>
            <input type="text" name="Recipe_maker" value =" {{ $recipe -> Recipe_maker }} " id="Recipe_maker" class="form-control">
            </div>

            <div class = "form-group mb-3">
            <label>Recipe Steps</label>
            <textarea type="text" name="Recipe_steps" value =" {{ $recipe -> Recipe_steps }} " id="Recipe Steps" class="form-control" style="overflow:auto;resize:none" rows="13" cols="50">{{ $recipe -> Recipe_steps }} </textarea></br>
            </div>

            <div class = "form-group mb-3">
            <label>Recipe Details</label>
            <textarea type="text" name="Recipe_details" value =" {{ $recipe -> Recipe_details }} " id="Recipe details" class="form-control" style="overflow:auto;resize:none" rows="13" cols="50">{{ $recipe -> Recipe_details }}</textarea></br>
            </div>

            <div class = "form-group mb-3">
            <label>Recipe Ingredients</label>
            <textarea type="text" name="Recipe_ingredients" value =" {{ $recipe -> Recipe_ingredients }} " id="Recipe ingredients" class="form-control" style="overflow:auto;resize:none" rows="13" cols="50">{{ $recipe -> Recipe_ingredients }} </textarea></br>
            </div>

            <div class = "form-group mb-3">
            <input type="submit" value="Update" class="btn btn-primary"></br>
        </div>
    </form>

        </div>
    </div>
@endsection