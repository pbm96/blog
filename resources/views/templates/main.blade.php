<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('titulo_pagina') -foro</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.13/css/mdb.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">


        @yield('estilos')


</head>

<body>
<!-- header-->

@include('templates.header')
@if(session()->has('mensaje'))
    <div class="alert  {{ Session::get('alert-class') }} mensaje_alerta text-center">
        {{ session()->get('mensaje') }}
        <button type="button" class="close ml-3" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@yield('cabezera')

<!-- contenido-->
<main class="main principal  grey lighten-4">

    @yield('contenido')

</main>

    @extends('templates.footer')

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.13/js/mdb.min.js"></script>


<script>
    $(document).ready(function() {

        var docHeight = $(window).height();
        var footerHeight = $('#footer').height();
        var footerTop = $('#footer').position().top + footerHeight;

        if (footerTop < docHeight) {
            $('#footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
        }
        var route = "{{route('pintar_categorias')}}";
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "GET",
            dataType: "json",
            url: route,
            success: function (data) {
                url = '{{route('categoria',":nombre_categoria")}}'
                for(i=0; i<data.length;i++) {
                    url = url.replace(':nombre_categoria', data[i]['nombre_categoria']);

                    $('#categorias_nav').append('<a class="dropdown-item" href="'+url+'">'+data[i]['nombre_categoria']+'</a>')

                    url = '{{route('categoria',":nombre_categoria")}}'

                }
            }
        })
    });




    //buscador
    $( "#icono_buscador" ).click(function() {
        var buscador = $('#buscador');

        if (buscador.css("display") === 'none'){
            buscador.show()
        } else{
            buscador.hide();
        }
    });



//llamar a categorias





</script>
@yield('scripts')
</body>

</html>
