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
                            <th width="10px">Id</th>
                            <th width="50px">Usuario</th>
                            <th>Producto</th>
                            <th>Precio u/d</th>
                            <th width="50px">Cantidad</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as  $order)
                            <tr>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$order->id}}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->user->name }}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->precio }}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->precio }}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->cantidad }}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->total }}</td>
                                <td style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->status }}</td>
                                <td width="70px">
                                    <form action="">
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
