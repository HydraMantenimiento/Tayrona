@extends('theme.lte.master')

@section('title')
    Tayrona Pet Shop
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header">
                    Crear Categoria del Blog
                    <a href="{{ route('blogCategory.index') }}" class="btn btn-default pull-right">Regresar</a>
                </div>
                <form action="{{ route('blogCategory.store') }}" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            @csrf
                            <label for="category">Categoria</label>
                            <input type="text" id="category" name="name" class="form-control" placeholder="Nombre de la Cateogia" value="{{ old('name') }}">
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="form-group">
                            <button class="btn btn-success pull-right">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
