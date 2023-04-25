@extends('layout')
@section('nav')
  
<div class="row">
        <div class="col-sm">

          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="{{url('check/recipe-list')}}">
          <img src="uploads/img/5403020.png" width="30" height="30" class="d-inline-block align-top" alt="">
          Private Recipe System
          </a>
          </button>
  
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="{{url('check/recipe-list')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            </ul>
            </div>
            </nav>
          </div>
</div>


@stop



