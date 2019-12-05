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
                    Modificar descripcion
                    <a href="{{ route('product.edit',$product->id) }}" class="btn btn-default pull-right">Regresar</a>
                </div>
                <form action="{{ route('descriptions.update', $description->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="col-md-pull-12">
                            <label for="inputEmail3" >Nombre Descripcion</label>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" id="recipient-name" value="{{ old('name' ,$description->name)  }}">
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-pull-12">
                            <label for="">Descripcion</label>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <textarea name="descripcion" id="" cols="30" rows="10" class="form-control">{{ old('descripcion' ,$description->description )  }}</textarea>
                                    <small class="text-danger">{{ $errors->first('descripcion') }}</small>
                                </div>
                            </div>
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
