@extends('templates.main')
@section('titulo_pagina', 'Panel-admin')

@section('estilos')
<style>
    .md-tabs {
        -webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
        box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
        border: 0;
        padding: .7rem;
        margin-left: 1rem;
        margin-right: 1rem;
        margin-bottom: -20px;
        background-color: #2bbbad;
        z-index: 1;
        position: relative;
        -webkit-border-radius: .25rem;
        border-radius: .25rem;

    }
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        background-color: rgba(0, 0, 0, .2);
        border-color: #2bbbad;
        border-radius: .25em;
    }
    .nav-link:hover {
        border:none;
    }
    .nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
        border:none;
    }
    .nav-tabs .nav-link{
        border: none;
        color: #FFFFFF;
        padding: .5rem 1.3rem;
    }
</style>

@endsection


@section('contenido')
    <div class="container">

        <ul class="nav nav-tabs md-tabs" id="myTabEx" role="tablist">
            <li class="nav-item">
                <a class="nav-link active show" id="home-tab-ex" data-toggle="tab" href="#home-ex" role="tab" aria-controls="home-ex" aria-selected="true">Mis Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab-ex" data-toggle="tab" href="#profile-ex" role="tab" aria-controls="profile-ex" aria-selected="false">Crear Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab-ex" data-toggle="tab" href="#profile-ex" role="tab" aria-controls="profile-ex" aria-selected="false">Mi perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab-ex" data-toggle="tab" href="#contact-ex" role="tab" aria-controls="contact-ex" aria-selected="false">Usuarios</a>
            </li>
        </ul>
        <div class="tab-content pt-5" id="myTabContentEx">
            <div class="tab-pane fade active show" id="home-ex" role="tabpanel" aria-labelledby="home-tab-ex">
                <p>mis posts    </p>
            </div>
            <div class="tab-pane fade" id="profile-ex" role="tabpanel" aria-labelledby="profile-tab-ex">
                {!! Form::Open(['route' => 'guardar_post','method'=>'POST', 'enctype'=> 'multipart/data', 'files' => true ,'class'=>'row
  justify-content-center']) !!}
                <div class="container">
                    <label for="titulo_post">Titulo Entrada</label>
                    <input type="text" name="titulo_post" id="titulo_post"
                           class="form-control {{ $errors->has('titulo_post') ? ' invalid' : '' }}"
                           value="{{old('titulo_post')}}"
                           required>
                    @if ($errors->has('titulo_post'))
                        <span class="invalid-feedback mr-5">
            <strong>{{ $errors->first('titulo_post') }}</strong>
        </span>
                    @endif

                    <label for="subtitulo_post">Subtitulo Entrada</label>
                    <input type="text" name="subtitulo_post" id="subtitulo_post"
                           class="form-control {{ $errors->has('subtitulo_post') ? ' invalid' : '' }}"
                           value="{{old('subtitulo_post')}}"
                           required>
                    @if ($errors->has('subtitulo_post'))
                        <span class="invalid-feedback mr-5">
            <strong>{{ $errors->first('subtitulo_post') }}</strong>
        </span>
                    @endif

                    <label for="categoria">Categoria Entrada</label>
                    {!! Form::select('categoria_id',$categorias,null,['class'=>'form-control mt-2','required','id'=>'categoria']) !!}

                    @if ($errors->has('categoria'))
                        <span class="invalid-feedback mr-5">
            <strong>{{ $errors->first('categoria') }}</strong>
        </span>
                    @endif


                    <label for="descripcion_post">Texto Entrada</label>

                    <textarea name="descripcion_post"  id="descripcion_post" >{{old('subtitulo_post')}}</textarea>
                    @if ($errors->has('descripcion_post'))
                        <span class="invalid-feedback mr-5">
             <strong>{{ $errors->first('descripcion_post') }}</strong>
            </span>
                    @endif

                    <input type="submit" value="Crear Entrada">
                    {!! Form::Close() !!}
                </div>
            </div>
            <div class="tab-pane fade" id="profile-ex" role="tabpanel" aria-labelledby="profile-tab-ex">
                <p>Mi perfil</p>
            </div>
            <div class="tab-pane fade" id="contact-ex" role="tabpanel" aria-labelledby="contact-tab-ex">
                usuarios
            </div>
        </div>



    </div>


@endsection
@section('scripts')
<script>
    function quitar_advertencia() {
        $('#mceu_47').remove();
    }
    window.onload = setTimeout(quitar_advertencia, 500);
</script>
    @endsection
