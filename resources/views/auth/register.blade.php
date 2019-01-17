@extends('templates.main')

@section('titulo_pagina', 'Registro')

@section('estilos')

@endsection
@section('contenido')

    <div class="container mt-5 pt-5">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <section class="pr-1">

                    <!-- Material form register -->
                    <div class="card">

                        <h5 class="card-header text-center py-4 negro_principal">
                            <strong>Registro</strong>
                        </h5>

                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">

                            <!-- Form -->
                            <form class="text-center" style="color: #757575;" method="POST"
                                  action="{{ route('register') }}">
                                @csrf

                                <div class="form-row">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="md-form">
                                            <input id="nombre" type="text"
                                                   class="form-control{{ $errors->has('nombre') ? ' invalid' : '' }}"
                                                   name="nombre" value="{{ old('nombre') }}" required autofocus>
                                            <label for="nombre" class="">Nombre*</label>
                                            @if ($errors->has('nombre'))
                                                <span class="invalid-feedback  d-block text-left" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Last name -->
                                        <div class="md-form">
                                            <input id="apellidos" type="text"
                                                   class="form-control{{ $errors->has('apellidos') ? ' invalid' : '' }}"
                                                   name="apellidos" value="{{ old('apellidos') }}" required>
                                            <label for="apellidos" class="">Apellidos*</label>
                                            @if ($errors->has('apellidos'))
                                                <span class="invalid-feedback  d-block text-left" role="alert">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="md-form row">
                                    <div class="col-sm-12">
                                        <textarea id="descripcion" rows="5" cols="20"
                                                  class="form-control{{ $errors->has('descripcion') ? ' invalid' : '' }}"
                                                  name="descripcion"
                                                  placeholder="Añade una descripcion sobre ti...(Opcional)">{{ old('descripcion') }}</textarea>

                                        @if ($errors->has('descripcion'))
                                            <span class="invalid-feedback  d-block text-left" role="alert">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- E-mail -->
                                <div class="md-form mt-0">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback d-block text-left" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                     </span>
                                    @endif
                                    <label for="email">E-mail*</label>
                                </div>

                                <!-- Password -->
                                <div class="form-row">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="md-form">
                                            <label for="password" class="">Contraseña*</label>
                                            <input id="password" type="password"
                                                   class="form-control{{ $errors->has('password') ? ' invalid' : '' }}"
                                                   name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback  d-block text-left" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Last name -->
                                        <div class="md-form">
                                            <label for="password-confirm" class="">Confirmar Contraseña*</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                   name="password_confirmation" required>


                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 col-sm-4  "
                                            type="submit">Registro
                                    </button>
                                </div>


                            </form>
                            <!-- Form -->

                        </div>

                    </div>
                    <!-- Material form register -->

                </section>
            </div>
        </div>
    </div>
@endsection
