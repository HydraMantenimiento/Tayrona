@extends('theme.lte.master')

@section('title')
    Tayrona Pet Shop
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    Registrar 
                    <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Regresar</a>
                </div>
                <form action="{{ route('users.store') }}" method="post">
                <div class="box-body">

                    @csrf
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="name">Nombres</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="lastname">Apellidos</label>
                                <input type="text" name="lastname" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="type_document">Tipo de Documento</label>
                                <select type="text" name="type_document" class="form-control">
                                    <option value=""></option>
                                    <option>Cedula de Ciudadania</option>
                                    <option>Cedula de extranjeria</option>
                                    <option>NIT</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="number_document">Numero de Documento</label>
                                <input type="number" name="number_document" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="email">Correo Electronico</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="telephone">Telefono</label>
                                <input type="number" name="telephone" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="address">Dirección</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="">Rol</label>
                            <select type="text" class="form-control" name="role_id">
                                <option value="">Seleccione ...</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="password_confirmed">Confirmacion de Contraseña</label>
                            <input type="password" name="password_confirmed" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="gender">Genero</label>
                                <select name="gender" id="" class="form-control">
                                    <option value="">Seleccine ...</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="box-footer">
                    <button class="btn btn-success pull-right">Registrar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
