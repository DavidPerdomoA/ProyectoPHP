@extends('layouts.app')
@section('titulo','Municipio')
@section('Inicio','/Inicio')
@section('text1','Departamento')@section('text2','Municipio')
@section('link1','Departamento')@section('link2','Municipio')@section('link3','Tiquete')
@section('contenido')
<br><br>

<a href="Municipio/create">Crear Municipio</a>
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Municipio</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
@foreach ($municipios as $municipio)
      <tr>
        <th scope="row">{{$municipio->id}}</th>
        <td>{{$municipio->nom_municipio}}</td>
        <td><a href="Municipio/{{$municipio->id}}/edit" class="btn btn-secondary">Modificar</a></td>
      <td>
        <form action="{{route('Municipio.destroy', $municipio->id)}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Eliminar</button></td>
        </form>  
        
      </tr>
@endforeach
</tbody>
</table>  


@endsection