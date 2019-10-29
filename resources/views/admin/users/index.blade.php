@extends('theme.lte.master')

@section('title')
    Tayrona Pet Shop
@endsection

@section('content')
    @include('partials.alert')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Usuarios</h3>
                    <div class="box-tools pull-right">
                        <a href="{{ route('users.create') }}" class="btn btn-block btn-success"  >
                            <i class="fa fa-plus"></i> Registrar
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-response-md">
                        <table class="table text-center">
                            <thead>
                            <tr>
                                <td>Id</td>
                                <td>Rol</td>
                                <td>Nombre Completo</td>
                                <td>T de Documento</td>
                                <td>N de Documento</td>
                                <td>Telefono</td>
                                <td colspan="3">Acciones</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->role->name }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->type_document }}</td>
                                <td>{{ $user->number_document }}</td>
                                <td>{{ $user->telephone }}</td>
                                <td width="10px">
                                    <a href="{{ route('users.show', $user->id ) }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf()
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
