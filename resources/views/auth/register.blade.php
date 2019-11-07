@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombres</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Last Name-->
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">Apellidos</label>
                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus>
                            </div>
                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!-- end lastName -->

                        <!-- Type Document  -->
                        <div class="form-group row">
                            <label for="type_document" class="col-md-4 col-form-label text-md-right">Tipo de documento</label>
                            <div class="col-md-6">
                                <select id="type_document" type="text" class="form-control @error('type_document') is-invalid @enderror" name="type_document" value="{{ old('type_document') }}" required autocomplete="name" autofocus>
                                    <option value="">Seleccione ...</option>
                                    <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
                                    <option value="Cedula de Extrangeria">Cedula de Extrangeria</option>
                                    <option value="Nit">Nit</option>
                                </select>
                            </div>
                            @error('type_document')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!--end Type document -->

                        <!-- number_doument -->
                        <div class="form-group row">
                            <label for="number_document" class="col-md-4 col-form-label text-md-right">Numero de documento</label>
                            <div class="col-md-6">
                                <input id="number_document" type="text" class="form-control @error('number_document') is-invalid @enderror" name="number_document" value="{{ old('number_document') }}" required autocomplete="name" autofocus>
                            </div>
                            @error('number_document')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!-- end number document-->

                        <!-- gender -->
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Genero</label>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="masculino" value="option1" checked>
                                    <label class="form-check-label" for="masculino">
                                        Masculino
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input class="form-check-input" type="radio" name="sex" id="femenino" value="option1" checked>
                                <label class="form-check-label" for="femenino">
                                    Femenino
                                </label>
                            </div>
                            @error('number_document')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!--end gender -->
                        <!-- telephone -->
                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">Telefono</label>
                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="name" autofocus>
                            </div>
                            @error('telephone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!--end telephone -->
                        <!--address -->
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Direccion</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="name" autofocus>
                            </div>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!-- end address -->


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn  btn-orange btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
