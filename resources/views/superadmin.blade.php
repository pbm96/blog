@extends('templates.main')
@section('titulo_pagina', 'Panel-admin')

@section('estilos')

@endsection


@section('contenido')

<a href="{{route('crear_post')}}">Crear Post</a>
@endsection
