@extends('templates.main')
@section('titulo_pagina', 'Mi-perfil')

@section('estilos')
    <style>
        .foto_user_perfil {
            height: 130px;
            width: 130px;
        }

        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

        .card.card-cascade.narrower .view.view-cascade {
            margin-left: 4%;
            margin-right: 4%;
            margin-top: -1.25rem;
        }

        .card.card-cascade .view.view-cascade.gradient-card-header {
            padding: 1.6rem 1rem;
            text-align: center;
        }
    </style>
@endsection


@section('contenido')
    <div class="container " style="margin-top: 8em">
        <section class="section mt-3">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card card-cascade narrower">
                        <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                            <h5 class="mb-0 font-weight-bold">Editar Foto</h5>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <div class="row">
                                <img src="{{auth()->user()->imagen==null?'https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg':auth()->user()->imagen}}"
                                     alt="User Photo" class="z-depth-1 mb-3 mx-auto foto_user_perfil">
                            </div>
                            {!! Form::Open(['route' => ['editar_foto_perfil',auth()->user()->id],'method'=>'PUT', 'enctype'=> 'multipart/data', 'files' => true ]) !!}
                            <div class="upload-btn-wrapper ">
                                <button class="btn btn-info">Cargar Imagen</button>
                                <input type="file" name="imagen"/>
                            </div>
                            <div class="row flex-center">
                                <button class="btn btn-success btn-rounded btn-sm waves-effect waves-light">
                                    Guardar Imagen
                                </button>
                                {!! Form::Close() !!}

                                <br>
                                {!! Form::Open(['route'=>['eliminar_foto_perfil',auth()->user()->id],'method'=>'DELETE',]) !!}

                                <button class="btn btn-danger btn-rounded btn-sm waves-effect waves-light">
                                    Borrar
                                </button>
                                {!! Form::Close() !!}

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mb-4 mt-md-2">
                    <div class="card card-cascade narrower">
                        <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                            <h5 class="mb-0 font-weight-bold">Editar Perfil</h5>
                        </div>
                        {!! Form::Open(['route'=>['editar_perfil',auth()->user()->id],'method'=>'PUT',]) !!}

                        <div class="card-body card-body-cascade text-center">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="nombre" name="nombre" class="form-control "
                                                   value="{{auth()->user()->nombre}}">
                                            <label for="nombre" data-error="wrong" data-success="right"
                                                   class="active">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="apellidos" name="apellidos"
                                                   class="form-control " value="{{auth()->user()->apellidos}}">
                                            <label for="apellidos">Apellidos</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="email" id="email" value="{{auth()->user()->email}}"
                                                   class="form-control ">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="email" id="form76" class="form-control validate">
                                            <label for="form76">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="form77" class="form-control validate">
                                            <label for="form77" data-error="wrong" data-success="right">Confirmar
                                                Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <label for="descripcion_user">Descripcion</label>
                                            <textarea type="text" id="descripcion_user" name="descripcion_user"
                                                      onfocus="aumentar_descripcion()"
                                                      onfocusout="disminuir_descripcion()"
                                                      class="my-editor form-control">{{auth()->user()->descripcion_user}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center my-4">
                                        <i class="btn btn-info btn-rounded waves-input-wrapper waves-effect waves-light"
                                           style="color:rgb(255, 255, 255);background:rgba(0, 0, 0, 0)"><input
                                                    type="submit" value="Modificar Perfil"
                                                    class="waves-button-input"
                                                    style="background-color:rgba(0,0,0,0);"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>/
@endsection
@section('scripts')
    <script>
        function aumentar_descripcion() {
            $('#descripcion_user').prop('rows', '7');
        }

        function disminuir_descripcion() {
            $('#descripcion_user').prop('rows', '3');
        }
    </script>
@endsection