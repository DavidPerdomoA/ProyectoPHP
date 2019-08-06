@extends('layouts.app')
@section('titulo','Departamento')
@section('Inicio','/Inicio')
@section('text1','Departamento')@section('text2','Municipio')
@section('link1','Departamento')@section('link2','Municipio')@section('link3','Tiquete')
@section('contenido')
<br><br>

<table class="table">
    <thead>
        <tr>
        <th scope="col">Tiquete</th>
        <th scope="col">Municipio</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
        <th></th>
        <th></th>
        </tr>
    </thead>
    <tbody>
@foreach ($tiquetes as $tiquetes)
      <tr>
        <th scope="row">{{$tiquetes->id}}</th>
        <td>{{$tiquetes->Municipio->nom_municipio}}</td>
        <th>{{$tiquetes->cantidad}}</th>
        <th>{{$tiquetes->precio}}</th>
        <td><a href="Tiquete/{{$tiquetes->id}}/edit" class="btn btn-secondary">Modificar</a></td>
      <td>
        <form action="{{route('Tiquete.destroy', $tiquetes->id)}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Eliminar</button></td>
        </form>  
        
      </tr>
@endforeach
</tbody>
</table>  


@endsection