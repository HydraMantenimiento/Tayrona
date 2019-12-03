@extends('theme.lte.master')

@section('content')

    <!-- actualizar producto-->
    <div class="row">
        <div class="col-md-6">
             <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Producto</h3>
            </div>
            <form class="form-horizontal" action="{{Route('product.update',$productactualizar->id)}}" method="post">
                @method('put')
                @csrf
                <div class="box-body">
                    <div class="row">
                         <div class="col-md-12">
                            <label for="inputEmail3" >Nombre Producto</label>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" id="recipient-name" value="{{$productactualizar->name}}">
                                </div>
                            </div>
                         </div>
                        <div class="col-md-12">
                            <label for="">Estado</label>
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
                        <div class="col-md-12">
                             <label for="">Precio</label>
                             <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="precio" class="form-control" id="recipient-precio" value="{{$productactualizar->precio}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="">Descripcion</label>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <textarea name="descripcion" id="" cols="30" rows="10" class="form-control" >{{$productactualizar->descripcion}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Sign in</button>
                </div>
            </form>
        </div>
        </div>
        <div class="col-lg-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Imagenes</h3>
                    <div class="box-tools pull-right">
                        <a href="{{ route('create.product_img', $productactualizar->id) }}" class="btn btn-block btn-success btn-sm add-new" type="button">
                            <i class="fa fa-plus">    Agregar Imagen</i>
                        </a>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" >IMAGEN</th>
                                    <th class="text-center" >ACCIONES</th>
                                </tr>
                            </thead>
                            <tr>
                            @foreach($img as $im)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{asset($im->url)}}" alt="" style="width:80px; height: 80px; ">
                                    </td>
                                    <td class="td-actions text-center" width="50px" >

                                        <form action="{{Route('product_img.destroy',$im->id)}}" method="post"  class="d-inline btn-group">
                                            @method('delete')
                                            @csrf
                                            <button  type="submit" class="btn btn-round btn-danger btn-icon" >
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
    <div class="row">
        <div class="col-lg-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Categorias del Producto</h3>
                    <div class="box-tools pull-right">
                        <a href="{{ route('create.category_product', $productactualizar->id) }}" class="btn btn-block btn-success btn-sm add-new" type="button" >
                            <i class="fa fa-plus">    Agregar Categoria</i>
                        </a>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">NOMBRE</th>
                                    <th class="text-center" >ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($category_product as $catego)
                                       <tr>
                                           <td class="text-center" style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$catego->category->name}}</td>
                                           <td class="td-actions text-center " >
                                               <form action="{{ route('category_product.destroy', $catego->id ) }}" method="post"  class="d-inline btn-group">
                                                   @method('DELETE')
                                                   @csrf
                                                   <button  type="submit" class="btn btn-round btn-danger btn-icon" >
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
        <div class="col-lg-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">DESCRIPCIONES </h3>
                    <div class="box-tools pull-right">
                        <a href="{{ route('create.descriptions', $productactualizar->id) }}" class="btn btn-block btn-success btn-sm add-new" type="button">
                            <i class="fa fa-plus">    New Category</i>
                        </a>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead >
                            <tr >
                                <th class="text-center">NOMBRE</th>
                                <th class="text-center">DESCRIPCION</th>
                                <th class="text-center" >ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($descripcion as $des)
                                    <tr>
                                        <td class="text-center">{{$des->name}}</td>
                                        <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 200px;" width="100px">
                                            {{  $des->description }}
                                        </td>
                                        <td class="td-actions text-center ">
                                            <a class="btn btn-warning btn-sm" href="{{ route('edit.descriptions', ['id' => $des->id, 'product'=>$productactualizar->id ]) }}">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="{{ route('descriptions.destroy', $des->id ) }}" method="post"  class="d-inline btn-group">
                                                @method('DELETE')
                                                @csrf
                                                <button  type="submit" class="btn btn-danger btn-sm" >
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

@endsection
