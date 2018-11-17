@extends('templates.main')
@section('titulo_pagina', 'Panel-admin')

@section('estilos')

@endsection


@section('contenido')
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
        <textarea rows="20" cols="20" name="descripcion_post" id="descripcion_post"
                  class="form-control {{ $errors->has('descripcion_post') ? ' invalid' : '' }}"
                  required>{{old('subtitulo_post')}}</textarea>
        @if ($errors->has('descripcion_post'))
            <span class="invalid-feedback mr-5">
             <strong>{{ $errors->first('descripcion_post') }}</strong>
            </span>
        @endif

        <input type="submit" value="Crear Entrada">
        {!! Form::Close() !!}
    </div>

@endsection
