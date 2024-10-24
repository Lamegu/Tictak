@include('head')
<a href="{{route('listaProductos')}}" class="btn btn-custom m-3" style="color: #f4fcc6; background:#a79e68">Volver</a>
<h1>Actualizar producto</h1>
<div class="container p-5">
<form action="{{ route('actualizarProducto', ['id' => $producto->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row g-2">
        <div class="col-md">
            <label class="form-label" for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{ $producto->nombre }}" required>
        </div>
        
        <div class="col-md">
            <label class="form-label" for="imagen">Imagen:</label>
            <input type="file" class="form-control" name="imagen" value="{{ $producto->imagen }}">
        </div>
    </div>
    <div class="row g-2">
        <div class="col-md">
            <label class="form-label" for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" id="descripcion" rows="2" required>{{ $producto->descripcion }}</textarea>
        </div>


        <div class="col-md">
            <label class="form-label" for="precio">ingredientes:</label>
            <textarea name="ingredientes" class="form-control" id="ingredientes" rows="2" required>{{ $producto->ingredientes}}</textarea>
        </div>
    </div> 
    <div class="col-md">
            <label class="form-label" for="precio">Precio:</label>
            <input type="number" class="form-control" name="precio" value="{{ $producto->precio }}" required>
        </div>
    <div class="row g-2">
        <div class="col-md">
            <label class="form-label" for="tipo_producto_id">Tipo de Producto:</label>
            <select name="tipo_producto_id" class="form-control">
                @foreach ($tiposProductos as $tipoProducto)
                    <option value="{{ $tipoProducto->id }}" {{ $producto->tipo_producto_id == $tipoProducto->id ? 'selected' : '' }}>
                        {{ $tipoProducto->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md">
            <label class="form-label" for="estado">Estado:</label>
            <select name="estado" class="form-control">
                <option value="1" {{ $producto->estado == '1' ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ $producto->estado == '0' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>
    </div>
    <div class="row g-2 my-3">   
        <div class="col-md">
            <button type="submit" class="btn btn-outline-primary btn-sm">Actualizar Producto</button>
        </div>
    </div>
</form>
</div>
@include('footer')