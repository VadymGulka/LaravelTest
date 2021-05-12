@extends('products.app')

@section('nombre','Listado de products')
@section('titulo', 'Listado de products')
@section('boton')
<a class="btn btn-success" href="{{ route('products.create') }}">Crear un product</a>
@endsection

@section('cuerpo')

<div class="row">
@if ($mensaje = Session::get('suceso'))
    <div class="alert alert-success">
        <h1>{{ $mensaje }}</h1>
    </div>

@endif
</div>


<div class="row">
<table class="table table-success table-bordered table-fit">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Creado</th>
        <th>Modificado</th>
        <th>Accion</th>
    </tr>
    @foreach ($products as $product)

    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->nombre }}</td>
        <td>{{ $product->desc }}</td>
        <td>{{ $product->precio }}</td>
        <td>{{ $product->created_at}}</td>
        <td>{{ $product->updated_at}}</td>
        <td>
            <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                <a href="{{ route('products.show',$product->id) }}"><i class="bi-sunglasses" style="font-size: 2rem;"></i></a>
                <a href="{{ route('products.edit', $product->id) }}"><i class="bi-pencil" style="font-size: 2rem;"></i></a>
                @csrf
                @method('DELETE')
                <button class="button>"> <i class="bi-wind" style="font-size: 2rem;"></i></button>
            </form>

        </td>
    </tr>

    @endforeach
</table>
</div>



@endsection
