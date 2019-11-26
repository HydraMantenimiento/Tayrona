@extends('visitante.layouts.app')

@section('content')
<div class="container shadow py-3 px-3">
    <h1>Registro</h1>
    <hr class="bg-jaiber">
    <form method="POST" action="{{ route('register') }}">
        <div class="row">
            <div class=" d-none d-md-block col-md-4 d-flex align-items-center justify-content-center">
                <img src="{{ asset('iconos/logo-tayrona.png') }}" alt="" width="200px" height="100px">
            </div>
            <div class="col-md-4 col-12">
                @csrf
                <div class="form-group ">
                    <label for="name" >Nombres</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            <!-- Last Name-->
            <div class="form-group">
                <label for="lastname">Apellidos</label>
                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus>
                @error('lastname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <!-- end lastName -->
            <!-- Type Document  -->
            <div class="form-group">
                <label for="type_document">Tipo de documento</label>
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

            <!--end Type document -->
            <!-- number_doument -->
        <div class="form-group">
            <label for="number_document" >Numero de documento</label>
            <input id="number_document" type="text" class="form-control @error('number_document') is-invalid @enderror" name="number_document" value="{{ old('number_document') }}" required autocomplete="name" autofocus>
            @error('number_document')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!-- end number document-->
        <!-- gender -->
        <div class="form-group">
            <label for="gender" >Genero</label>
            <select name="sex" id="gender" class="form-control">
                <option value="">Seleccione ...</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
        </div>
        @error('number_document')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            </div>
        <!--end gender -->
        <div class="col-md-4 col-12">
            <!-- telephone -->
            <div class="form-group">
                <label for="telephone">Telefono</label>
                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="name" autofocus>
                @error('telephone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <!--end telephone -->
            <!--address -->
            <div class="form-group">
                <label for="address">Direccion</label>
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="name" autofocus>
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!-- end address -->
            <div class="form-group">
                <label for="email">Correo Electronico</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password-confirm">Confirmacioin de contraseña</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

        </div>
        <div class="col-md-12">
            <div class="form-group ">
                <button type="submit" class="btn  btn-jaiber float-right">
                    {{ __('Registrar') }}
                </button>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
