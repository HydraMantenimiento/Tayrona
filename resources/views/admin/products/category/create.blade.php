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
                    Nuevo producto
                    <a href="{{ route('product.edit',$product->id) }}" class="btn btn-default pull-right">Regresar</a>
                </div>
                <form action="{{Route('category_product.store')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="recipient-" class="col-form-label">Categoria</label>
                            <input type="hidden" name="productid" value="{{$product->id}}" >
                            <select name="categoria" id="recipient-category" class="form-control" required>
                                <option value="" ></option>
                                @foreach($category as $categorys)
                                    <option value="{{$categorys->id}}" >{{$categorys->name}}</option>
                                @endforeach
                            </select>
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
