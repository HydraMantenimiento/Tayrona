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
                    Nueva descripcion
                    <a href="{{ route('product.edit',$product->id) }}" class="btn btn-default pull-right">Regresar</a>
                </div>
                <form action="{{Route('descriptions.store')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <input type="hidden" name="productid" value="{{$product->id}}">
                        <div class="col-md-pull-12">
                            <label for="inputEmail3" >Nombre Descripcion</label>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" id="recipient-name" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-pull-12">
                            <label for="">Descripcion</label>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <textarea name="descripcion" id="" cols="30" rows="10" class="form-control" required ></textarea>
                                </div>
                            </div>
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
