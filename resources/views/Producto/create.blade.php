
<link rel="stylesheet" href="{{ asset('css/formProducto.css') }}" />
<link rel="stylesheet" href="{{ asset('css/createProducto.css') }}" />

@include('components.navbar') 

 <div class="row fila">
    <h1>ingresar producto<h1>
</div>

<form class="form" method="post" action="{{url('/productos')}}" id="form">

@csrf
<div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
                <div id="marca">
                    <input type="text" id="txtMarca" name="marca" value=""pattern="[a-zA-Z ]{2,254}" placeholder=" ingrese marca">
                </div>
                <div id="modelo">
                    <input type="text" id="txtModelo"name="modelo"  value="" placeholder="ingrese modelo">
                </div>
                <div id="precio">
                    <input type="number" id="txtPrecio" name="precio" value=""  pattern="\d{5}" placeholder="ingrese precio">
                </div>
                <div id="stock">
                    <input type="number" id="txtStock" name="stock" value=""  pattern="\d{5}" placeholder="ingrese stock">
                </div>
                <div id="select">
                <select id="tipoProducto" name="tipodeproducto"  placeholder="selecciona tipo de producto" >
                @foreach($tipoProducto as $tipoProducto)
                <option name="" value="{{$tipoProducto->id}}">{{$tipoProducto->nombre}}</option>
                @endforeach
                </select>
                </div>
                <div id="enviar" >
                    <button type="submit" id="btnEnviar"> Ingresar </button>
                </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>

</form>

