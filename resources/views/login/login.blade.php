@extends('login')
@section('content')
  
    <div class="card" style="margin:30px">
        <div class="card-header">Login Form</div>
        <div class="card-body"> 
        
            <form action= "{{ route('check') }}" method="post">
             {!! csrf_field() !!}   

            <label>Email</label>
            <input type="email" name="email" id="email" class ="form-control"> </br>


            <label>Password</label>
            <input type="password" name="password" id="password" class ="form-control"> </br>
            <button class="btn btn-success" ><a href="{{url ('create')}}" style="color:white">Register</a></button>
            <input type="submit" value="Login" class="btn btn-success"> 


            </form>
        </div>
    </div>

@stop