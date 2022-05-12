
<link rel="stylesheet" href="{{ asset('css/edit.css') }}" />

@include('components.navbar') 

<div class="row filaTitulo">
<h1> Editar el producto<h1>
</div>


<form class="form" method="post" action="{{url('/productos/'.$productoBuscado->id)}}" id="form">

@csrf
{{method_field('PATCH')}}
@include('Producto.form') 

</form>
