@extends('layouts.app')
@section('titulo','Formulario')
@section('Inicio','Inicio')
@section('text1','Formulario')@section('text2','Iniciar Sesion')
@section('link1','Formulario')@section('link2','Sesion')
@section('contenido')
<br><br>
<form style="width: 30rem;" class="container" method="POST" action="/Formulario">
  @csrf
        <h5 class="card-title text-center">Comprar Tiquete</h5>
        <div class="form-group">
            <select class="form-control form-control-lg" name="municipioid">
                <option>Destino</option>
            @foreach ($municipios as $municipio)
                <option value="{{$municipio->id}}">{{$municipio->nom_municipio}}</option>
            @endforeach
           </select>
        </div>
        <div class="form-group">
                <label for="exampleFormControlSelect1">Cantidad de Tiquetes</label>
                <select class="form-control" id="exampleFormControlSelect1" name="txtcantidad">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Precio</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="$5000" name="txtprecio">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
@endsection