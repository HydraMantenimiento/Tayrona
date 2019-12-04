@extends('theme.lte.master')

@section('title')
    Tayrona Pet Shop
@endsection

@section('content')
    @include('partials.alert')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header">
                    Listado del Blog
                    <a href="{{ route('carrousel.create') }}" class="btn btn-success pull-right">Añadir Carrousel</a>
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th width="10px">Id</th>
                            <th width="10px" height="10px">imagen</th>
                            <th>Title</th>
                            <th>Descripcion</th>
                            <th><Estado></Estado></th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($carrousels as $carrousel)
                            <tr>
                                <td>{{ $carrousel->id }}</td>
                                <td><img src="{{ asset($carrousel->img) }}" alt="" style="width:50px; height:50px; "></td>
                                <td>{{ $carrousel->title }}</td>
                                <td>{{ $carrousel->description }}</td>
                                <td>{{ $carrousel->status }}</td>
                                <td width="70px">
                                    <a class="btn btn-warning btn-sm" href="{{ route('carrousel.edit', $carrousel->id) }}">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    <div class="pull-right">
                                        <form action="{{ route('carrousel.destroy', $carrousel->id) }}" method="POST">
                                            @csrf()
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection
