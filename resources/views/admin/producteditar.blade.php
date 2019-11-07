@extends('theme.lte.master')

@section('content')
    <!-- actualizar producto-->
    <div class="row">
        <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Producto: {{$productactualizar->name}}</h3>
                <!--<div class="box-tools pull-right">
                    <a href="" class="btn btn-box btn-success btn-sm add-new" type="button"   data-target="#modal" data-toggle="modal"  data-toggle="tooltip"  title="Agregar imagenes">
                        <i class="fa fa-plus " ></i>
                    </a>
                </div>-->
             </div>
            <form class="form-horizontal" action="{{Route('product.update',$productactualizar->id)}}" method="post">
                @method('put')
                @csrf
                <div class="box-body">
                    <div class="row">
                         <div class="col-md-6">
                            <label for="inputEmail3" >Nombre Producto</label>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" id="recipient-name" value="{{$productactualizar->name}}">
                                </div>
                            </div>
                         </div>


                        <div class="col-md-6">
                            <label for="">estado</label>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <select name="product_status_id" id="recipient-status" class="form-control" >
                                        <option value="1" >{{$productactualizar->product_status->name}}</option>
                                        @foreach($status as $status)
                                            <option value="{{$status->id}}" >{{$status->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                             <label for="">Precio</label>
                             <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="precio" class="form-control" id="recipient-precio" value="{{$productactualizar->precio}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Descripcion</label>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <textarea name="descripcion" id="" cols="30" rows="10" class="form-control" >{{$productactualizar->descripcion}}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Sign in</button>
                </div>
                <!-- /.box-footer -->
            </form>

        </div>
    </div>
    </div>
    <!-- tabla imagenes-->
    <div class="row">
        <div class="col-lg-12">
        <div class="box ">
            <div class="box-header with-border">
                <h3 class="box-title">IMAGENES DEL PRODUCTO :  {{$productactualizar->name}}</h3>
                <div class="box-tools pull-right">
                    <a href="" class="btn btn-block btn-success btn-sm add-new" type="button"  data-toggle="modal" data-target="#modal" >
                        <i class="fa fa-plus">    New Image</i>
                    </a>
                </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead >
                            <tr >
                                <th class="text-center">IMAGEN</th>
                                <th class="text-center" >ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>

                                @foreach($img as $im)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{asset($im->url)}}" alt="" style="width:100px ">
                                        </td>
                                        <td class="td-actions text-center ">
                                            <a  type="button"  data-toggle="modal" data-target="#modal4"><button   class="btn btn-round btn-group btn-success btn-icon" data-toggle="tooltip" title="Modificar Imagen">
                                                    <i class="fa fa-fw fa-edit "></i>
                                                </button></a>
                                            <form action="{{Route('product-img.destroy',$im->id)}}" method="post"  class="d-inline btn-group">
                                                @method('delete')
                                                @csrf
                                                <button  type="submit" class="btn btn-round btn-danger btn-icon" data-toggle="tooltip" title="Eliminar Imagen">
                                                    <i class="fa fa-fw fa-trash "></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        <div class="col-lg-3"></div>
                        <div class="col lg 6">
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tabla categorias-->
    <div class="row">
        <div class="col-lg-6">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Categoria del producto:   {{$productactualizar->name}}</h3>
                <div class="box-tools pull-right">
                    <a href="" class="btn btn-block btn-success btn-sm add-new" type="button"  data-toggle="modal" data-target="#modal2" >
                        <i class="fa fa-plus">    New Category</i>
                    </a>
                </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead >
                            <tr >
                                <th class="text-center">NOMBRE</th>
                                <th class="text-center" >ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                @foreach($category_product as $catego)
                                   <tr>
                                       <td class="text-center">{{$catego->category_id}}</td>
                                       <td class="td-actions text-center ">

                                           <form action="{{ route('category_product.destroy', $catego->id ) }}" method="post"  class="d-inline btn-group">
                                               @method('DELETE')
                                               @csrf
                                               <button  type="submit" class="btn btn-round btn-danger btn-icon" data-toggle="tooltip" title="Eliminar categoria">
                                                   <i class="fa fa-fw fa-trash "></i>
                                               </button>
                                           </form>
                                       </td>
                                   </tr>
                                @endforeach
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        <div class="col-lg-3"></div>
                        <div class="col lg 6">
                        </div>
                    </div>
                 </div>
             </div>
        </div>
        <!-- ingresar descripcion-->

        <div class="col-lg-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">DESCRIPCIONES </h3>
                    <div class="box-tools pull-right">
                        <a href="" class="btn btn-block btn-success btn-sm add-new" type="button"  data-toggle="modal" data-target="#modal2" >
                            <i class="fa fa-plus">    New Category</i>
                        </a>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead >
                            <tr >
                                <th class="text-center">DESCRIPCION</th>
                                <th class="text-center" >ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                            @foreach($category_product as $catego)
                                <tr>
                                    <td class="text-center">{{$catego->category_id}}</td>
                                    <td class="td-actions text-center ">

                                        <form action="{{ route('category_product.destroy', $catego->id ) }}" method="post"  class="d-inline btn-group">
                                            @method('DELETE')
                                            @csrf
                                            <button  type="submit" class="btn btn-round btn-danger btn-icon" data-toggle="tooltip" title="Eliminar categoria">
                                                <i class="fa fa-fw fa-trash "></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        <div class="col-lg-3"></div>
                        <div class="col lg 6">
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>



<!-- Modal imagenes-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal">Agregar Imagenes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <spam aria-hidden="true">&times;</spam>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{Route('product-img.store')}}" method="post"  enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" name="productid" value="{{$productactualizar->id}}">
                            <input type="file" name="avatar">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                                <button type="submit" class="btn btn-primary" >Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal category_product-->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal2">categories</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <spam aria-hidden="true">&times;</spam>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('category_product.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-" class="col-form-label">Categoria</label>
                        <input type="hidden" name="productid" value="{{$productactualizar->id}}">
                        <select name="categoria" id="recipient-category" class="form-control" >
                            <option value="" ></option>
                            @foreach($category as $categorys)
                                <option value="{{$categorys->id}}" >{{$categorys->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                        <button type="submit" class="btn btn-primary" >Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal imagenes update-->
<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal">Modificar Imagen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <spam aria-hidden="true">&times;</spam>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('product-img.update',$productactualizar->id)}}}" method="post"  enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" name="productid" value="{{$productactualizar->id}}">
                            <input type="file" name="avatar">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                                <button type="submit" class="btn btn-primary" >Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--modal de agregar descripcion-->

@endsection




