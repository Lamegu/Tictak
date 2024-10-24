@include('head')
<a href="{{route('listaProductos')}}" class="btn btn-custom m-3" style="color: #f4fcc6; background:#a79e68">Volver</a>
<h1>Eliminar producto</h1>
<div class="container p-5">
    <section class="confirmacion">
        <p style="display: flex; justify-content: center;">¿Estás seguro de que deseas eliminar el producto "{{ $producto->nombre }}"?</p>
        <div class="my-5" style="display: flex; justify-content: center;">
            <form action="{{ route('eliminarProducto', ['id' => $producto->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Sí, eliminar</button>
                <a href="{{ route('listaProductos') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </section>
</div>
@include('footer')
