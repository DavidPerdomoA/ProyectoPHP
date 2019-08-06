@extends('layouts.app')
@section('titulo','Departamento')
@section('Inicio','/Inicio')
@section('text1','Departamento')@section('text2','Municipio')
@section('link1','Departamento')@section('link2','Municipio')@section('link3','Tiquete')
@section('contenido')
<br><br>

<a href="Departamento/create">Crear Departamento</a>
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Departamento</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
@foreach ($departamentos as $departamento)
      <tr>
        <th scope="row">{{$departamento->id}}</th>
        <td>{{$departamento->num_departamento}}</td>
        <td><a href="Departamento/{{$departamento->id}}/edit" class="btn btn-secondary">Modificar</a></td>
      <td>
        <form action="{{route('Departamento.destroy', $departamento->id)}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Eliminar</button></td>
        </form>  
        
      </tr>
@endforeach
</tbody>
</table>  


@endsection