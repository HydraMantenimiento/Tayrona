@extends('theme.lte.master')


@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Productos</h3>
                    <div class="box-tools pull-right">
                        <a href="" class="btn btn-block btn-success btn-sm add-new" type="button"  data-toggle="modal" data-target="#modal" >
                            <i class="fa fa-plus">Add New</i>
                        </a>
                    </div>
                </div>
                <form action="" class="form-horizontal" method="post" autocomplete="off" id="form-general">
                    @csrf
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead >
                            <tr >
                                <th class="text-center">NOMBRE</th>
                                <th class="text-center">DESCRIPCION</th>
                                <th class="text-center">PRECIO</th>
                                <th class="text-center">ESTADO</th>
                                <th class="text-center" >CATEGORIAS</th>
                                <th class="text-center" >ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($product as $item)
                                <tr>
                                    <td class="text-center">{{$item->name}}</td>
                                    <td class="text-center">{{$item->descripcion}}</td>
                                    <td class="text-center">{{$item->precio}}</td>
                                    <td class="text-center">{{$item->product_status->name}}</td>
                                    <td class="text-center">{{$item->product_categorys->name}}</td>
                                    <td class="td-actions text-center ">
                                        <a href="{{Route('product.edit',$item->id)}}"><button  type="button" data-toggle="tooltip" class="btn btn-round btn-group btn-success btn-icon" title="Modificar producto">
                                                <i class="fa fa-fw fa-edit "></i>
                                            </button></a>
                                        <form action="{{Route('product.destroy',$item->id)}}" method="POST"  class="d-inline btn-group">
                                            @csrf
                                            @method('DELETE')
                                            <button  type="submit" class="btn btn-round btn-danger btn-icon" data-toggle="tooltip" title="Eliminar producto">
                                                <i class="fa fa-fw fa-trash "></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        <div class="col-lg-3"></div>
                        <div class="col lg 6">
                        </div>
                    </div>
                </form>
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
                                <input type="text" name="precio" class="form-control" id="recipient-precio">
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
                                    <label for="recipient-" class="col-form-label">categorias</label>
                                    <select name="categorias" id="recipient-status" class="form-control" >
                                        <option></option>
                                        @foreach($categoria as $cat)
                                            <option value="{{$cat->id}}" >{{$cat->name}}</option>
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



