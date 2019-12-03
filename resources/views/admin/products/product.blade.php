@extends('theme.lte.master')


@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Productos</h3>
                    <div class="box-tools  ">
                        <div class="pull-right btn-block">
                            <a href="{{route('reports.excel')}}" class="btn btn-warning btn-sm add-new " type="button" >
                                <i class="fa fa-book"> Reportes</i>
                            </a>
                            <a href="{{ route('product.create') }}" class="btn btn-success btn-sm add-new " type="button">
                                <i class="fa fa-plus"> Nuevo Producto</i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead >
                        <tr >
                            <th class="text-center">NOMBRE</th>
                            <th class="text-center">DESCRIPCION</th>
                            <th class="text-center">PRECIO</th>
                            <th class="text-center">ESTADO</th>
                            <th class="text-center" >SUBCATEGORIAS</th>
                            <th class="text-center" >ACCIONES</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $pro)
                            <tr>
                                <td class="text-center" style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$pro->name}}</td>
                                <td class="text-center" style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$pro->descripcion}}</td>
                                <td class="text-center" >{{$pro->precio}}</td>
                                <td class="text-center" >{{$pro->product_status->name}}</td>
                                <td class="text-center" >{{$pro->subcategory->name}}</td>
                                <td class="td-actions text-center ">
                                    <a>
                                        <a href="{{ route('product.show', $pro->id ) }}" class="btn btn-info" data-toggle="tooltip" title="Vista del producto"><i class="fa fa-eye"></i></a>
                                    </a>
                                    <a href="{{Route('product.edit',$pro->id)}}"><button  type="button" data-toggle="tooltip" class="btn btn-round btn-group btn-warning btn-icon" title="Modificar producto" >
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                    </a>
                                    <form action="{{ Route('product.destroy', $pro->id) }}" method="POST"  class="d-inline btn-group">
                                        @method('DELETE')
                                        @csrf()
                                        <button   class="btn btn-round btn-danger btn-icon" data-toggle="tooltip" title="Eliminar producto">
                                            <i class="fa fa-fw fa-trash "></i>
                                        </button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$product -> links()}}
                </div>
                <div class="box-footer">
                    <div class="col-lg-3"></div>
                    <div class="col lg 6"></div>
                </div>
            </div>
        </div>
    </div>



@endsection



