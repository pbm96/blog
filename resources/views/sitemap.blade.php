@extends('templates.main')
@section('titulo_pagina', 'Mapa Web')

@section('estilos')
@endsection


@section('contenido')
    <section class="mt-5">
        <div class="container-fluid grey lighten-4">
            <div class="container">
                <div class="titulo_categoria  col-sm-12  grey lighten-2 ">
                    <h3 class="p-3 text-uppercase font-weight-bold">Mapa web</h3>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-sm-4">
                        <h5 class="h5">Enlaces Principales</h5>
                        <ul class="list-unstyled">
                            <li class="p-1"><a href="{{route('home')}}">Home</a></li>
                            <li class="p-1"><a href="{{route('login')}}">Login</a></li>
                            <li class="p-1"><a href="{{route('register')}}">Registro</a></li>
                            <li class="p-1"><a href="{{route('sobre_mi')}}">Sobre mí</a></li>
                            <li class="p-1"><a href="{{route('about')}}">About</a></li>
                            <li class="p-1"><a href="{{route('cookies')}}">Cookies</a></li>
                            <li class="p-1"><a href="{{route('licencia')}}">Licencia</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h5 class="h5">Categorias</h5>
                        <ul class="list-unstyled">
                            @foreach($categorias as $categoria)
                                <li class="p-1"><a href="{{route('categoria',$categoria->nombre_categoria)}}">{{$categoria->nombre_categoria}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection