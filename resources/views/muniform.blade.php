@extends('layouts.app')
@section('titulo','Municipio')
@section('Inicio','/Inicio')
@section('text1','Departamento')@section('text2','Municipio')
@section('link1','/Departamento')@section('link2','/Municipio')@section('link3','/Tiquete')
@section('contenido')
<br><br>
@if(isset($edit))
<form style="width: 30rem;" class="container" action="/Municipio/{{$municipios->id}}" method="POST">
    @csrf
    @method('PUT')
        <h5 class="card-title text-center">Modificar Municipio</h5>
        <div class="form-group">
            <label for="formGroupExampleInput2">Municipio</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Neiva" name="txtNombre" value="{{$municipios->nom_municipio}}">
            <label for="formGroupExampleInput2">Departamento al que pertenece</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Neiva" name="" value="{{$municipios->Departamento->num_departamento}}" disabled>
    </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Departamento a cambiar</label>
            <select class="form-control form-control-lg" name="vid">
            
            @foreach ($departamentos as $departamento)
            <option value="{{$departamento->id}}" name="txt_depart">{{$departamento->num_departamento}}</option>
            @endforeach
           </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@else
<form style="width: 30rem;" class="container" action="/Municipio" method="POST">
    @csrf
        <h5 class="card-title text-center">Crear Municipio</h5>
        <div class="form-group">
          <label for="formGroupExampleInput2">Municipio</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Neiva" name="txtNombre">
        </div>
        <div class="form-group">
            <select class="form-control form-control-lg" name="vid">
                <option>Destino</option>
            @foreach ($departamentos as $departamento)
            <option value="{{$departamento->id}}">{{$departamento->num_departamento}}</option>
            @endforeach
           </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endif
@endsection
