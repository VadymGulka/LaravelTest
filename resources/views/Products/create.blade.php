@extends('productos.app')

@section('cuerpo')

@if ($errors->any())
<div class="alert alert-danger"
<h1>Error</h1>
<ul>
@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif




<form method="POST" action="{{ route('productos.store') }}">
    @csrf
<input name="nombre"    type="text"  placeholder="Nombre">
<input name="desc"      type="text"  placeholder="Descripcion">
<input name="precio"    type="number" step="any" placeholder="Precio">
<button type="submit">Enviar</button>
</form>












@endsection