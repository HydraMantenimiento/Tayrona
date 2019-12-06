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
                            <a href="" class="btn btn-success btn-sm add-new " type="button"  data-toggle="modal" data-target="#modal" >
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
                                    <td class="text-center">{{$pro->name}}</td>
                                    <td class="text-center">{{$pro->descripcion}}</td>
                                    <td class="text-center">{{$pro->precio}}</td>
                                    <td class="text-center">{{$pro->product_status->name}}</td>
                                    <td class="text-center">{{$pro->subcategory->name}}</td>
                                    <td class="td-actions text-center ">
                                        <a>
                                            <a href="{{ route('product.show', $pro->id ) }}" class="btn btn-info" data-toggle="tooltip" title="Vista del producto"><i class="fa fa-eye"></i></a>
                                        </a>
                                        <a href="{{Route('product.edit',$pro->id)}}"><button  type="button" data-toggle="tooltip" class="btn btn-round btn-group btn-success btn-icon" title="Modificar producto" >
                                                <i class="fa fa-fw fa-edit "></i>
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
                        <div class="col lg 6">
                        </div>
                    </div>
            </div>
        </div>
    </div>
        <!--modal para agregar productos-->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal">Nuevo producto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <spam aria-hidden="true">&times;</spam>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{Route('product.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="recipient-name"  class="col-form-label">Nombre</label>
                                <input type="text" name="name" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-description" class="col-form-label">Descripcion</label>
                                <input type="text" name="descripcion" class="form-control" id="recipient-description">
                            </div>
                            <div class="form-group">
                                <label for="recipient-precio" class="col-form-label">Valor</label>
                                <input type="decimal" name="precio" class="form-control" id="recipient-precio">
                            </div>
                            <div class="form-group">
                                <label for="recipient-" class="col-form-label">Estado</label>
                                <select name="estado" id="recipient-status" class="form-control" >
                                    <option value="" ></option>
                                    @foreach($status as $status)
                                    <option value="{{$status->id}}" >{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                                <div class="form-group">
                                    <label for="recipient-" class="col-form-label">Subcategorias</label>
                                    <select name="subcategorias" id="recipient" class="form-control" >
                                        <option></option>
                                        @foreach($subcategory as $sub)
                                            <option value="{{$sub->id}}" >{{$sub->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                                <button type="submit" class="btn btn-success" >Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--fin modal-->

    </div>



@endsection



