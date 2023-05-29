<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Recipe System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

<div class="row">
        <div class="col-sm" style="text-align:right"> 

          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="{{url('check/recipe-list')}}">
          <i class="bi bi-book"></i>Private Recipe System<i class="bi bi-book"></i>
          </a>
          

        <div class="col-sm" style="text-align:right">
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav nav ">
            <li class="nav-item active">
            <a class="nav-link" href="{{url('check/dashboard')}}"><i class="bi bi-house"></i>Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active" >
            <a class="nav-link" href="{{url('check/recipe-list')}}"><i class="bi bi-card-list"></i> Recipe List <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active" >
            <a class="nav-link" href="{{url('logout')}}"><i class="bi bi-box-arrow-right"></i>Logout <span class="sr-only">(current)</span></a>
            </li>
            
            </ul>
            </div>
        </div>
            
            </nav>
          </div>
</div>



<!-- Page content -->
<div class="content">
  
</div>
    <div class="container">
        
    <div class="row">
    
    <div class="col-sm">
    @yield('content')
    </div>
        
    </div>


    
  </div>
  
</html>