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
                    Listado del pedidos
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th width="10px">N°Pedido</th>
                            <th width="10px">Imagen</th>
                            <th width="50px">Producto </th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($orders as  $order)
                            <tr>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$order->id}}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">
                                    <img src="{{asset(\App\Http\Controllers\viewsCategoryController::productImg($order->product->id)->url)}}" alt="" style="width: 100px; height: 100px;">
                                </td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$order->product->name}}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$order->product->precio}}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$order->cantidad}}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$order->total}}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$order->operation->status}}</td>
                                <td class="td-actions text-center "  width="100px">
                                    <div class="box-tools  text-center" >
                                        <a href="" class="btn btn-block btn-warning btn-sm add-new btn-icon" type="button"  data-toggle="modal" data-target="#modal" >
                                            <i class="fa fa-pencil">Estado</i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal">Cambio Estado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <spam aria-hidden="true">&times;</spam>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('orders.update',$id)}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="recipient-" class="col-form-label"></label>
                            <select name="status" id="recipient-category" class="form-control" required>
                                <option value="pedido">Pedido</option>
                                <option value="En proceso">Proceso</option>
                                <option value="enviado" >Enviado</option>
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

@endsection

