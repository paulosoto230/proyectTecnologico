<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid">
   <div class="row">
   <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" id="iconoDesplegable">
            <i class="fa-solid fa-bars"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
         <form method="" action="">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="" id="inicio">INICIO</a>
            </li>
         </form> 
         <form method="get" action="">
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="producto"href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PRODUCTO
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('productos.create') }}">crear producto</a></li>
            <li><a class="dropdown-item" href="{{ route('productos.index') }}">Ver productos</a></li>
          </ul>
        </li>  
         </form>
         <form method="" action="">
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="tipo"href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            TIPO PRODUCTO
          </a>
          <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">crear tipo producto</a></li>
            <li><a class="dropdown-item" href="#">Ver tipos de producto</a></li>
          </ul>
        </li>  
         </form>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="usuario"href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            USUARIOS
          </a>
          <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">crear usuario</a></li>
            <li><a class="dropdown-item" href="#">Ver usuarios</a></li>
          </ul>
        </li> 
        
      </ul>
    </div>
</nav>
   </div>
</div>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 

</body>
</html>