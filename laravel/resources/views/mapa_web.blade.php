@extends('templates.main')
@section('titulo_pagina', 'Mapa web')

@section('estilos')

@endsection
@section('contenido')

    <section class="mt-5">
        <div class="container-fluid grey lighten-4">
            <div class="container">
                <div class="titulo_categoria  col-sm-12  grey lighten-2 ">
                    <h3 class="p-3 text-uppercase text-center font-weight-bold">Mapa web</h3>
                </div>
                <div class="row mt-4 text-center">
                <div class="col-sm-4 ">
                    <ul class="list-unstyled ">
                        <h5 class="h5">Enlaces comunes</h5>
                        <li class="p-1">
                            <a href="{{route('home')}}">home</a>
                        </li>
                        <li class="p-1">
                            <a href="{{route('login')}}">Login</a>
                        </li>
                        <li class="p-1">
                            <a href="{{route('register')}}">Registro</a>
                        </li>
                        <li class="p-1">
                            <a href="{{route('about')}}">about</a>
                        </li>
                        <li class="p-1">
                            <a href="{{route('cookies')}}">Política de cookies</a>
                        </li>
                        <li class="p-1">
                            <a href="{{route('sobre_mi')}}">Autor</a>
                        </li>

                    </ul>
                </div>
                <div class="col-sm-4 text-center">
                    <ul class="list-unstyled">
                        <h5 class="h5">Categorias</h5>
                            @foreach($categorias as $categoria)
                            <li class="p-1">
                                    <a href="{{route('categoria',$categoria->nombre_categoria)}}">{{$categoria->nombre_categoria}}</a>
                                </li>
                                @endforeach

                    </ul>
                </div>
                </div>

            </div>
        </div>
    </section>
@endsection