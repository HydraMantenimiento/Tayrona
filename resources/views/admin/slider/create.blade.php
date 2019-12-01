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
                    Añadir Blog
                    <a href="{{ route('carrousel.index') }}" class="btn btn-default pull-right">Regresar</a>
                </div>
                <form action="{{ route('carrousel.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="title">Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('Descripcion') }}">
                            <small class="text-danger">{{ $errors->first('descripcion') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen </label>
                            <input type="file" class="form-control" id="imagen" name="imagen" value="{{ old('Imagen') }}">
                            <small class="text-danger">{{ $errors->first('imagen') }}</small>
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
