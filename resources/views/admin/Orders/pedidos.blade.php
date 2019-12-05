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
                            <th width="50px">Nombre</th>
                            <th>Dirección</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($orders as  $order)
                            <tr>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$order->id}}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->user->name . '' . $order->user->lastname}}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->user->address  }}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$order->user->telephone  }}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->user->email }}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->total }}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->status }}</td>
                                <td width="70px">
                                    <form action="{{route('orders.show',$order->id)}}">
                                        <button type="submit" class="btn btn-warning btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


@endsection
