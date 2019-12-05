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
                    Nueva Imagen
                    <a href="{{ route('product.edit',$product->id) }}" class="btn btn-default pull-right">Regresar</a>
                </div>
                <form action="{{Route('product_img.store')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="productid" value="{{ $product->id }}">
                            <input type="file" name="avatar"  value="{{ old('avatar') }}" required>
                            <small class="text-danger">{{ $errors->first('avatar') }}</small>
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
