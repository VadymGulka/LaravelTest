@extends('productos.app')
@section('nombre','Informacion sobre producto')
@section('titulo', 'Informacin sobre producto')
@section('cuerpo')



    <div class="row">
            <p><h2>Id:</h2>{{ $producto->id }}</p>

    </div>

    <div class="row">

            <h2>Nombre:</h2>
            {{ $producto->nombre }}
    </div>

    <div class="col">Nombre: {{ $producto->nombre }}</h2></div>
    <div class="col">Precio: {{ $producto->precio }}</h2></div>
    <div class="col">Descripcion: {{ $producto->desc }}</h2></div>
    <div class="col">Creado: {{ $producto->created_at }}</h2></div>
    <div class="col">Modificado: {{ $producto->updated_at }}</h2></div>



@endsection