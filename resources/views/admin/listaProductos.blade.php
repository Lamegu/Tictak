@include('head')
<a href="{{route('inicio')}}" class="btn btn-custom m-3" style="color: #f4fcc6; background:#a79e68">Volver</a>
<section>
<div class="row p-5">
    <h1>Lista de productos</h1>
    <div class="col-12">
        <div class="table-responsive">
            <table id="miTabla" class="table table-responsive" style="margin: 0 auto;" width="100%">                
                <div class="my-5" style="display: flex; justify-content: center;">
                    <a href="{{ route('crearProducto') }}" class="btn btn-custom" style="color: #f4fcc6; background:#a79e68">Crear</a>
                </div>
                
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Ingredientes</th>
                        <th scope="col">Tipo de producto</th>
                        <th scope="col">Actualizar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($productos as $k => $producto)
                        <tr>
                            <td>{{ $producto->nombre}}</td>
                            <td>{{ $producto->descripcion}}</td>                                   
                            <td>$ {{ $producto->precio}}</td>  
                            <td>{{ $producto->ingredientes}}</td>                            
                            <td>
                                @php
                                    $tipoProducto = $tiposProductos->find($producto->tipo_producto_id);
                                @endphp
                                @if($tipoProducto)
                                    {{ $tipoProducto->nombre }}
                                @endif
                            </td>
                            <td>               
                            <a href="{{ route('actualizarProducto', ['id' => $producto->id]) }}" class="btn btn-outline-primary btn-sm">Actualizar</a>
                            </td>
                            <td>
                            <a href="{{ route('confirmarEliminarProducto', ['id' => $producto->id]) }}" class="btn btn-outline-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
@section('js')
    <script>        
        $(document).ready(function () {
            $('#miTabla').DataTable();
        });
    </script>
@endsection
@include('footer')