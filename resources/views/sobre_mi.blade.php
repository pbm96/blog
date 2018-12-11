@extends('templates.main')
@section('titulo_pagina', 'Panel-admin')

@section('estilos')
    <style>
        @media (min-width: 768px) {
            .imagen_sobre_mi {
                margin-top: -10em;
            }
            .imagen_sobre_mi_caja {
                text-align: right;
            }
        }

        @media (max-width: 767px) {
            .imagen_sobre_mi_caja {
                text-align: center;
                margin-bottom: 1em;

            }
        }

        .imagen_sobre_mi {
            height: 130px;
            width: 100px;
        }
    </style>
@endsection


@section('contenido')

    <section>
        <div class="container-fluid ">
            <hr class="mb-5 mt-0">
            <div class="container">
                <section class="section extra-margins mt-5 py-5 text-center text-lg-left">
                    <div class="row my-xl-5 py-xl-4">
                        <div class="col-sm-12 col-md-7 offset-md-2">
                            <div class="mt-4">
                                <h3 class="dark-grey-text pb-2 font-weight-bold ">
                                    <strong>Sobre mí</strong>
                                </h3>

                                <p class="gold-text text-uppercase font-weight-bold">{{$user->nombre}} {{$user->apellidos}}</p>
                            </div>
                            <div class=" imagen_sobre_mi_caja">
                                <img src="{{$user->imagen}}"
                                     class="img-fluid imagen_sobre_mi" alt="">
                            </div>
                            <hr class="mt-0">
                            {!! $user->descripcion_user !!}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
