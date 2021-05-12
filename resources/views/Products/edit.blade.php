@extends('productos.app')

@section('cuerpo')

@if ($errors->any())

@foreach ($errors->all() as $error)

<ul>
    <li>{{ $error }}</li>
</ul>
@endforeach
@endif

<form method="POST" action="{{ route('productos.update', $producto->id) }}">
@csrf
@method('PUT') 
<h2>Id</h2><input name="id" type="text" value="{{ $producto->id }}">
<h2>Nombre</h2><input name="nombre" type="text" value="{{ $producto->nombre }}">
<h2>Descipcion</h2><input name="desc" type="text" value="{{ $producto->desc }}">
<h2>Precio</h2><input name="precio" type="text" value="{{ $producto->precio }}">
<h2>Creado</h2><input name="created_at" type="text" value="{{ $producto->created_at }}">
<h2>Modificado</h2><input name="updated_at" type="text" value="{{ $producto->updated_at }}">

<button type="submit">Editar</button>

</form>











@endsection