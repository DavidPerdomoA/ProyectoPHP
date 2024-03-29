@extends('layouts.app')
@section('titulo','Iniciar Sesion')
@section('Inicio','Inicio')
@section('text1','Formulario')@section('text2','Iniciar Sesion')
@section('link1','Formulario')@section('link2','Sesion')
@section('contenido')
<div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Iniciar Sesion</h5>
                <form class="form-signin">
                  <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Correo" required autofocus>
                    <label for="inputEmail">Correo Electronico</label>
                  </div>
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                    <label for="inputPassword">Contraseña</label>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Ingresar</button>
                  <hr class="my-4">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection