<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Recipe System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>

<body>

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

</body>
</html>