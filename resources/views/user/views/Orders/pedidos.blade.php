@extends('theme.lteuser.masteruser')




@section('title')
    Tayrona Pet Shop
@endsection

@section('content')
    @include('partials.alert')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header">
                    Lista Ordenes
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-center" width="10px">N°Pedido</th>
                            <th class="text-center" width="50px">Nombre</th>
                            <th class="text-center">Dirección</th>
                            <th class="text-center">Telefono</th>
                            <th class="text-center">Correo</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($operation as  $order)
                            <tr>
                                <td class="text-center" style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$order->id}}</td>
                                <td class="text-center" style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->user->name . '  ' . $order->user->lastname}}</td>
                                <td class="text-center" style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->user->address  }}</td>
                                <td class="text-center" style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{$order->user->telephone  }}</td>
                                <td class="text-center" style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->user->email }}</td>
                                <td class="text-center" style="overflow: hidden; text-overflow:ellipsis; white-space: nowrap;  max-width: 150px;" width="100px">{{ $order->total }}</td>

                                <td class="td-actions text-center "  width="100px">
                                    <a>
                                        <a href="{{route('orders.user',$order->id)}}" class="btn btn-info" data-toggle="tooltip" title="Vista pedido"><i class="fa fa-eye"></i></a>
                                    </a>
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
