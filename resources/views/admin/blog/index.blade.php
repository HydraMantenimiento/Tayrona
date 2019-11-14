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
                    <a href="{{ route('blog.create') }}" class="btn btn-success pull-right">Añadir Blog</a>
                </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="10px">Id</th>
                            <th>Title</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->title }}</td>
                            <td width="70px">
                                <a class="btn btn-warning btn-sm" href="{{ route('blog.edit', $blog->id) }}">
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <div class="pull-right">
                                    <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
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
