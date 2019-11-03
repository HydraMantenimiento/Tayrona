@extends('theme.lte.master')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    Registrar
                    <a href="{{route('product.index')}}" class="btn btn-default pull-right">Regresar</a>
                </div>
                <div class="box-body">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="name">Nombres</label>
                                <input type="text"  class="form-control" value="{{$product->name}}" readonly>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="address">Subcategoria</label>
                                <input type="text" class="form-control" value="{{$product->subcategory_id}}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="email">Precio</label>
                                <input type="email" class="form-control" value="{{$product->precio}}" readonly>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="telephone">Estado</label>
                                <input type="number" class="form-control" value="{{$product->product_status_id}}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="lastname">Descripcion</label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control" readonly>{{$product->descripcion}}</textarea>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



