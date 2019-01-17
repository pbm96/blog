@extends('templates.main')
@section('titulo_pagina', 'About')

@section('estilos')

@endsection


@section('contenido')
    <section>
        <div class="container-fluid ">
            <hr class="mb-5 mt-0">
            <div class="container">
                <section class="section extra-margins mt-5 py-5 text-center text-lg-left">
                    <div class="row my-xl-5 py-xl-4">
                        <div class="col-sm-12 col-md-8 offset-2">
                          <!--  <h3 class="dark-grey-text pb-2 font-weight-bold">
                                <strong>Sobre mí</strong>
                            </h3>
                            <p class="gold-text mb-4 text-uppercase font-weight-bold">{{$user->nombre}} {{$user->apellidos}}</p>
                            <div class="text-right" style="margin-top: -7em">
                            <img src="{{$user->imagen}}"  class="" height="100" width="100">
                            </div>
                            <hr>
                            {!! $user->descripcion_user !!}-->
                              <h3 class="dark-grey-text pb-2 font-weight-bold">
                                  <strong>Qué es Tecnoforyou</strong>
                              </h3>
                            <hr>
                            <p>Tecnoforyou es un proyecto personal enfocado a ser un blog de tecnología, en el que se podrán encontar
                                análisis de  los últimos productos del mercado, en concreto el mercado de los smartphones y de la informática en general
                                (portátiles, componentes, periféricos...), Así como opiniones personales y comparaciones sobre dichos productos.

                            </p>
                            <p>
                                En este blog espero compartir todo mi conocimiento, experiencia e ilusión por la tecnología y a la vez aprender más tanto de las  investigaciones propias,
                                como de las opiniones de los propios usuarios.
                            </p>

                            <div class="card p-1 mt-5">
                                <div class="row">
                                <div class="col-sm-3">
                                    <img src="{{$user->imagen}}"   class="w-100" height="100" >
                                </div>
                                <div class="col-sm-5">
                                    <p class="text-uppercase pt-2">{{$user->nombre}} {{$user->apellidos}}</p>
                                    <p class="pt-3">Creador y editor de Tecnoforyou</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
