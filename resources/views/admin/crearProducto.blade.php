@include('head')

<a href="{{route('listaProductos')}}" class="btn btn-custom m-3" style="color: #f4fcc6; background:#a79e68">Volver</a>
    <h1>Crear producto</h1>

<div class="container p-5">
 
<form action="{{ route('saveProducto') }}" method="POST">
    @csrf
    <div class="row g-2">
        <div class="col-md">
            <label class="form-label" for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="" required>
        </div>
        
        <div class="col-md">
            <label class="form-label" for="imagen">Imagen:</label>
            <input type="file" class="form-control" name="imagen" value="">
        </div>
    </div>
    <div class="row g-2">
        <div class="col-md">
            <label class="form-label" for="tipo_producto_id">Tipo de Producto:</label>
            <select name="tipo_producto_id" class="form-control">
                @foreach ($tiposProductos as $id_tipoProducto)
                    <option value="{{ $id_tipoProducto->id }}" > 
                        {{ $id_tipoProducto->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md">
            <label class="form-label" for="precio">Precio:</label>
            <input type="number" class="form-control" name="precio" value="" required>
        </div>

       
    </div>
    <div class="row g-2">
        
        <div class="col-md">
            <label class="form-label" for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" id="descripcion" rows="2" required></textarea>
        </div>

         <div class="col-md">
            <label class="form-label" for="precio">Ingredientes:</label>
            <textarea name="ingredientes" class="form-control" id="ingredientes" rows="2" required></textarea>
        </div>

    </div>
    <div class="row g-2 my-3">   
        <div class="col-md">
            <button type="submit" class="btn btn-outline-primary btn-sm">Agregar</button>
        </div>
    </div>
</form>
</div>


@include('footer')