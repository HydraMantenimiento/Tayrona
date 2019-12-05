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
                    <a href="{{ route('product.index') }}" class="btn btn-default pull-right">Regresar</a>
                </div>
                <form action="{{Route('product.store')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="recipient-name"  class="col-form-label">Nombre</label>
                            <input type="text" name="name" class="form-control" id="recipient-name" value="{{ old('name') }}">
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="recipient-description" class="col-form-label">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control" id="recipient-description"  value="{{ old('descripcion') }}">
                            <small class="text-danger">{{ $errors->first('descripcion') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="recipient-precio" class="col-form-label">Valor</label>
                            <input type="decimal" name="precio" class="form-control" id="recipient-precio"  value="{{ old('precio')}}">
                            <small class="text-danger">{{ $errors->first('precio') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="recipient-" class="col-form-label">Estado</label>
                            <select name="estado" id="recipient-status" class="form-control" value="{{ old('estado')}}">
                                <option value="" ></option>
                                @foreach($status as $status)
                                    <option value="{{$status->id}}" >{{$status->name}}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">{{ $errors->first('estado') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="recipient-" class="col-form-label">Subcategorias</label>
                            <select name="subcategorias" id="recipient" class="form-control"  value="{{ old('subcategorias')}}">
                                <option></option>
                                @foreach($subcategory as $sub)
                                    <option value="{{$sub->id}}" >{{$sub->name}}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">{{ $errors->first('subcategorias') }}</small>
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
