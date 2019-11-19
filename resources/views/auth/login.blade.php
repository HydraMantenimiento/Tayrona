@extends('visitante.layouts.app')

@section('content')
    <div class="container-fluid bg-login py-5 h-100 ">
        <div class="row justify-content-center align-content-center d-flex h-100">
            <div class="col-md-7 shadow p-0">

                <div class="p-0 img-logo">
                </div>
                <div class="form py-5 px-3 d-flex align-items-center" style="height: 100%;">
                    <div style="width: 100%">
                        <h3 class="mb-3">Login</h3>
                        <a href="" class="btn-return">< Regresar</a>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" placeholder="Correo Electronico" class="form-control text-center @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" placeholder="Contraseña" class="form-control text-center @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-center"><button type="submit" class="btn btn-jaiber text-white">
                                        {{ __('Iniciar Sesion') }}
                                    </button>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link text-jaiber pt-0 d-block text-center" href="{{ route('password.request') }}">
                                    {{ __('¿Olvide contraseña?') }}
                                </a>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
