
@extends('theme.lteuser.masteruser')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{ $user->avatar }}" alt="Foto de perfil de usuario " style=" height: 100px; width: 100px;">
                        <h3 class="profile-username text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $user->name }}</font></font></h3>
                        <p class="text-muted text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$user->lastname}}</font></font></p>
                    </div>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mascotas</font></font></h3>
                    </div>
                    <!-- /.box-header -->
                        <ul class="list-group list-group-unbordered ">
                            @foreach($mascotas as $mascota)
                            <li class="list-group-item">
                                <img src="{{ $mascota->avatar }}" class="img-circle img-bordered-sm" alt="User Image" style="width: 50px; height: 50px; border-radius: 50px;">
                                <b>{{ $mascota->name }}</b>
                            </li>
                            @endforeach
                        </ul>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actualizar <Datos></Datos></font></font></a></li>
                        <!--<li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cronograma</font></font></a></li>-->
                        <li class=""><a href="#settings" data-toggle="tab" aria-expanded="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Agregar Mascotas</font></font></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="activity">
                            <form action="{{ route('updateuser', $id = $user->id) }}" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Nombres</label>
                                                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="lastname">Apellidos</label>
                                                <input type="text" name="lastname" class="form-control" value="{{$user->lastname}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="type_document">Tipo de Documento</label>
                                                <input type="text" name="type_document" class="form-control" value="{{$user->type_document}}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="number_document">Numero de Documento</label>
                                                <input type="number" name="number_document" class="form-control" value="{{$user->number_document}}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="email">Correo Electronico</label>
                                                <input type="email" name="email" class="form-control" value="{{ $user->email }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="telephone">Telefono</label>
                                                <input type="number" name="telephone" class="form-control" value="{{ $user->telephone }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="address">Dirección</label>
                                                <input type="text" name="address" class="form-control" value="{{ $user->address }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="gender">Genero</label>
                                                <input type="text" name="address" class="form-control" value="{{ $user->sex }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="gender">Imagen</label>
                                                <input type="file" name="avatar" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button class="btn btn-warning pull-right">Actualizar</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane " id="settings">
                            <form class="form-horizontal" action="{{ route('mascota',$id = $user->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</font></font></label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="name" class="form-control" id="inputName" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Edad Mascota</font></font></label>

                                    <div class="col-sm-10">
                                        <input type="text" name="edad" class="form-control" id="inputEmail" placeholder="Edad Mascota">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Imagen</font></font></label>

                                    <div class="col-sm-10">
                                        <input type="file" name="avatar" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acepto los </font></font><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">terminos y condiciones</font></font></a>
                                            </label>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-warning pull-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enviar</font></font></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
