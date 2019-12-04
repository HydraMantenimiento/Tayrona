@extends('theme.lte.master')

@section('title')
    Tayrona Pet Shop
@endsection

@section('content')
    @include('partials.alert')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-warning">
                <div class="box-header">
                    Modificar Blog
                    <a href="{{ route('carrousel.index') }}" class="btn btn-default pull-right">Regresar</a>
                </div>
                <form action="{{ route('carrousel.update', $carrousels->id) }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title' ,$carrousels->title)  }}">
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="title">Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion' ,$carrousels->description)  }}">
                            <small class="text-danger">{{ $errors->first('descripcion') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="title">Imagen</label><br>
                            <label><img src="{{ asset($carrousels->img) }}" alt="" style="width:60px; height:60px; "></label>
                            <br><br>
                            <input type="file" class="form-control" id="imagen" name="imagen" value="{{ old('Imagen' ,$carrousels->img)  }}">
                            <small class="text-danger">{{ $errors->first('title') }}</small>
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
