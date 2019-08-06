@extends('layouts.app')
@section('titulo','Departamento')
@section('Inicio','/Inicio')
@section('text1','Departamento')@section('text2','Municipio')
@section('link1','/Departamento')@section('link2','/Municipio')@section('link3','/Tiquete')
@section('contenido')
<br><br>
@if(isset($edit))
  <form style="width: 30rem;" class="container" action="/Departamento/{{$departamentos->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="formGroupExampleInput2">Id</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" name="txtId" value="{{$departamentos->id}}">
      <label for="formGroupExampleInput2">Departamento</label>
      <input type="text" class="form-control" id="formGroupExampleInput2"  name="txtNombre" value="{{$departamentos->num_departamento}}">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@else
<form style="width: 30rem;" class="container" action="/Departamento" method="POST">
  @csrf
      <h5 class="card-title text-center">Crear Departamento</h5>
      <div class="form-group">
        <label for="formGroupExampleInput2">Departamento</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Cundinamarca" name="txtNombre">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@endif
@endsection