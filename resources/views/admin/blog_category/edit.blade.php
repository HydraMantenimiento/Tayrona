@extends('theme.lte.master')

@section('title')
    Tayrona Pet Shop
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header">
                    Editar Categoria del Blog
                    <a href="{{ route('blogCategory.index') }}" class="btn btn-default pull-right">Regresar</a>
                </div>
                <form action="{{ route('blogCategory.update',$category->id) }}" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            @csrf
                             @method('PUT')
                            <label for="category">Categoria</label>
                            <input type="text" id="category" name="name" value="{{ old('name',$category->name) }}" class="form-control" placeholder="Nombre de la Cateogia">
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="form-group">
                            <button class="btn btn-warning pull-right">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
