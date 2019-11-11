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
                    Categorias del blog
                    <a href="{{ route('blogCategory.create') }}" class="btn btn-success pull-right">Añadir Categoria</a>
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10px">Id</th>
                                <th>Categoria</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categorys  as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td width="70px">
                                    <a href="{{ route('blogCategory.edit', $category->id) }}" class="btn btn-warning btn-sm ">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <div class="pull-right">
                                        <form action="{{ route('blogCategory.destroy', $category->id) }}" method="POST">
                                            @csrf()
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
