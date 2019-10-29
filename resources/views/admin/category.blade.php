@extends('theme.lte.master')


@section('content')
        <!-- categorias-->
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">categorias</h3>
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
                                <th class="text-center"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $item)
                                <tr>
                                    <td class="text-center">{{$item->name}}</td>
                                    <td class="td-actions text-center ">

                                        <form action="{{Route('product-category.destroy',$item->id)}}" method="post"  class="d-inline btn-group">
                                            @method('delete')
                                            @csrf
                                            <button  type="submit" class="btn btn-round btn-danger btn-icon" data-toggle="tooltip" title="Eliminar categoria">
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
    <!--fin categorias-->


    <!--modal para agregar categoria-->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal">Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <spam aria-hidden="true">&times;</spam>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{Route('product-category.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-" class="col-form-label">categorias</label>
                            <input type="text" name="categorias" class="form-control" id="recipient-name">
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



