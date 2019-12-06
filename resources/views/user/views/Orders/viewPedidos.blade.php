@extends('theme.lteuser.masteruser')


@section('content')

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

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection

