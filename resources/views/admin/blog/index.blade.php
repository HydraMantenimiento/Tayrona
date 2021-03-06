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
                            <th width="10px" height="10px">imagen</th>
                            <th>Title</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td><img src="{{ asset($blog->imagen) }}" alt="" style="width:50px; height:50px; "></td>
                                <td>{{ $blog->title }}</td>
                                <td width="102px">
                                    <a class="btn btn-warning btn-sm" href="{{ route('blog.edit', $blog->id) }}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ route('vistaComment', $blog->id) }}">
                                        <i class="fa fa-commenting-o"></i>
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
