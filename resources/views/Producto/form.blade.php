
<link rel="stylesheet" href="{{ asset('css/formProducto.css') }}" />

<div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
                <div id="marca">
                    <input type="text" id="txtMarca" name="marca" value="{{$productoBuscado->marca}}"pattern="[a-zA-Z ]{2,254}" placeholder=" ingrese marca">
                </div>
                <div id="modelo">
                    <input type="text" id="txtModelo"name="modelo"  value="{{$productoBuscado->modelo}}" placeholder="ingrese modelo">
                </div>
                <div id="precio">
                    <input type="number" id="txtPrecio" name="precio" value="{{$productoBuscado->precio}}"  pattern="\d{5}" placeholder="ingrese precio">
                </div>
                <div id="stock">
                    <input type="number" id="txtStock" name="stock" value="{{$productoBuscado->stock}}"  pattern="\d{5}" placeholder="ingrese stock">
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
