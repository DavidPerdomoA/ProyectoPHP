@extends('layouts.app')
@section('titulo','Departamento')
@section('Inicio','/Inicio')
@section('text1','Departamento')@section('text2','Municipio')
@section('link1','/Departamento')@section('link2','/Municipio')@section('link3','/Tiquetes')
@section('contenido')
<br><br>
@if(isset($edit))
  <form style="width: 30rem;" class="container" action="/Tiquete/{{$tiquetes->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="formGroupExampleInput2">Id</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" name="txtId" value="{{$tiquetes->id}}">
      <label for="formGroupExampleInput2">Municipio</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Neiva" name="" value="{{$tiquetes->Municipio->nom_municipio}}" disabled>
      <div class="form-group">
        <label for="formGroupExampleInput2">Municipio a cambiar</label>
        <select class="form-control form-control-lg" name="vid">
        
        @foreach ($municipios as $municipio)
        <option value="{{$municipio->id}}" name="txt_depart">{{$municipio->nom_municipio}}</option>
        @endforeach
       </select>
    </div>
      <label for="formGroupExampleInput2">Cantidad</label>
      <input type="text" class="form-control" id="formGroupExampleInput2"  name="txtcantidad" value="{{$tiquetes->cantidad}}">
      <label for="formGroupExampleInput2">Precio</label>
      <input type="text" class="form-control" id="formGroupExampleInput2"  name="txtprecio" value="{{$tiquetes->precio}}">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endif
@endsection