@extends('templates.main')

@section('contenido')

    <!-- Material form login -->
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card">

                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Sign in</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0 ">

                        <!-- Form -->
                        <form class="text-center" method="POST" style="color: #757575;" action="{{ route('login') }}">
                        @csrf
                        <!-- Email -->
                            <div class="md-form">
                                <input id="email" type="email"
                                       class="form-control{{ $errors->has('email') ? ' invalid' : '' }}" name="email"
                                       value="{{ old('email') }}" required autofocus>
                                <label for="email">E-mail</label>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif


                            <!-- Password -->
                                <div class="md-form">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' invalid' : '' }}"
                                           name="password" required>
                                    <label for="password">Password</label>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="d-flex justify-content-around">
                                <div>
                                    <!-- Remember me -->
                                    <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">Recordarme</label>
                                    </div>
                                </div>
                                <div>

                                    <a class=" " href="{{ route('password.request') }}">Olvidaste tu
                                        contraseña?</a>
                                </div>
                            </div>

                            <!-- Sign in button -->
                            <div class="row justify-content-center">
                            <button class="btn btn-outline-info btn-rounded btn-block my-4 col-sm-4 waves-effect z-depth-0"
                                    type="submit">Acceder
                            </button>
                            </div>


                        </form>
                        <!-- Form -->

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Material form login -->
@endsection
