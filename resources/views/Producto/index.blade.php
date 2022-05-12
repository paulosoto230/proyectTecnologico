<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
 @include('components.navbar') 

 <div class="container">

<div class="row filaTitulo">
  <h1>PRODUCTOS</h1>
</div>

<div class="row" id="fila">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">MARCA</th>
      <th scope="col">MODELO</th>
      <th scope="col">PRECIO</th>
      <th scope="col">STOCK</th>
      <th scope="col">TIPO DE PRODUCTO</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>
  @foreach($productos as $productos)
      <tr>
      <th scope="row">{{$productos->id}}</th>
      <td>{{$productos->marca}}</td>
      <td>{{$productos->modelo}}</td>
      <td>${{$productos->precio}}</td>
      <td>{{$productos->stock}}</td>
      <td>{{$productos->nombre}}</td>
      <td>
          <form method="get" action="{{url('/productos/'.$productos->id.'/edit')}}">
          <button type="submit" class="btn btn-primary" id="editar">Editar</button>
          </form>

          <form action="{{url('/productos/'.$productos->id)}}" method="post">
          @csrf
          {{method_field('DELETE')}}
          <button type="submit" class="btn btn-danger" onclick="return confirm('¿quieres borrar el producto?')">Eliminar</button>
          </form>
      </td>
    </tr>
   
    @endforeach 
  </tbody>
</table>

</div>
 

 </div>