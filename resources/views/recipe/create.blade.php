@extends('layout')
@section('content')

<div class="card" style="margin:20px">
    <div class="card-header">Create New Recipe</div>
    <div class="card-body">
    
    <form action="{{ url('/check/recipe-list/') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class = "form-group mb-3">
        <label>Recipe Image</label>
        <img src="" alt="">
        <input type="file" name="Recipe_image" id="Recipe-image" class="form-group md-3">
        </div>

        <div class = "form-group mb-3">
        <label>Recipe Name</label>
        <input type="text" name="Recipe_name" id="Recipe-image" class="form-control">
        </div>

        <div class = "form-group mb-3">
        <label>Maker</label>
        <input type="text" name="Recipe_maker" id="Recipe_maker" class="form-control">
        </div>

        <div class = "form-group mb-3">
        <label>Recipe Steps</label>
        <textarea type="text" name="Recipe_steps" id="Recipe steps" class="form-control" style="overflow:auto;resize:none" rows="13" cols="50"> </textarea></br>
        </div>

        <div class = "form-group mb-3">
        <label>Recipe details</label>
        <textarea type="text" name="Recipe_details" id="Recipe details" class="form-control" style="overflow:auto;resize:none" rows="10" cols="50"> </textarea></br>
        </div>

        <div class = "form-group mb-3">
        <label>Recipe ingredients</label>
        <textarea type="text" name="Recipe_ingredients" id="Recipe ingredients" class="form-control" style="overflow:auto;resize:none" rows="13" cols="50"> </textarea></br>
       
        </div>
        <div class = "form-group mb-3">
        <input type="submit" value="Save" class="btn btn-primary"></br>
        </div>
        
    </form>
    
  </div>
</div>

@endsection