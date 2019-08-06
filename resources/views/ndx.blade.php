@extends('layouts.app')
@section('titulo','Inicio')
@section('Inicio','Inicio')
@section('text1','Formulario')@section('text2','Iniciar Sesion')
@section('link1','Formulario')@section('link2','Sesion')
@section('contenido')
    <br><br>
    <div class="row" style="text-align:center;">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body" >
                    <h5 class="card-title" >Eficiencia</h5>
                    <img src="{{ asset('images/biuses.jpg') }}" >                    
                    <p class="card-text">Rapidez a la hora de viajar, y de una manera segura</p>
                    <p class="card-text">Rapidez a la hora de viajar, y de una manera segura</p>             
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Seguridad</h5>
                    <img src="{{ asset('images/biuses.jpg') }}" > 
                    <p class="card-text">Puedes comprar tiquetes de manera segura, rapida y efectiva.</p>
                    <a href="Formulario" class="btn btn-primary">Comprar Ahora</a>
                </div>
            </div>
        </div>
    </div>
@endsection