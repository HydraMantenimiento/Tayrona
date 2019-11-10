@extends('theme.lteuser.masteruser')

@section('content')

    @if(session::has('cartproduct'))
        <section class="invoice">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-globe"></i> Tayrona Pet Shop
                        <small class="pull-right">{{ date("d-m-Y ")  }}</small>
                    </h2>
                </div>
            </div>
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    De:
                    <address>
                        <strong>Tayrona Pet Shop</strong><br>
                        Plaza Mercado Restrepo L 29 – 30 – 31<br>
                        Carrera 19 No 18 – 43 Sur<br>
                        Bogotá D.C. – Colombiabr>
                        TEL: 2392673
                    </address>
                </div>
                <div class="col-sm-4 invoice-col ">
                    Para:
                    <address>
                        <strong>John Doe</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        Phone: (555) 539-1037<br>
                        Email: john.doe@example.com
                    </address>
                </div>
                <!-- <div class="col-sm-4 invoice-col">
                     <b>Invoice #007612</b><br>
                     <br>
                     <b>Order ID:</b> 4F3S8J<br>
                     <b>Payment Due:</b> 2/22/2014<br>
                     <b>Account:</b> 968-34567
                 </div>-->
            </div>
            <form action="">
                <div class="row">
                    <div class="col-xs-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Description</th>
                                    <th>Qty</th>
                                    <th>Precio Producto</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            @foreach($product as $products)
                            <tbody>
                                <tr>
                                    <td>{{ $products['item']['name'] }}</td>
                                    <td>{{ $products['item']['descripcion'] }}</td>
                                    <td>{{ $products['qty'] }}</td>
                                    <td>{{ $products['item']['precio'] }}</td>
                                    <td>{{ $products['precio'] }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <p class="lead">Payment Methods:</p>
                        <div class="form-group">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons" style="">
                                @foreach($PaymentPlatforms as $PaymentPlatform)
                                    <label class="btn btn-outline-secondary rounded m-2 p-1">
                                        <input
                                            type="radio"
                                            name="payment_platform"
                                            value="{{ $PaymentPlatform->id }}"
                                            required
                                        >
                                        <img src="{{ asset($PaymentPlatform->image) }}" class="img-thumbnail">
                                    </label>
                                @endforeach
                            </div>
                            @foreach($PaymentPlatforms as $PaymentPlatform)
                                <div>
                                    @includeIf('components.'.strtolower($PaymentPlatform->name. '-collapse'))
                                </div>
                            @endforeach
                        </div>
                        <br>
                        <p class="text-muted well well-sm no-shadow" >
                            <label>Tipo Moneda</label>
                            <select class="custom-select" name="currency" style="margin-top: 3px;"required >
                                @foreach($currencies as $currency)
                                    <option value="{{ $currency->iso }}">
                                        {{ $currency->iso }}
                                    </option>
                                @endforeach
                            </select>
                        </p>
                    </div>
                    <div class="col-xs-6">
                        <p class="lead">Amount Due {{ date("d-m-Y ") }}</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>{{$totalPrice}}</td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td>{{$totalPrice}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row no-print">
                    <div class="col-xs-12">
                        <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                        <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
                        </button>
                        <button type="button" id="payButton" class="btn btn-primary pull-right" style="margin-right: 5px;">
                            <i class="fa fa-download"></i> Generate PDF
                        </button>
                    </div>
                </div>
            </form>
        </section>
    @else
        <div class="row">
            <div class="col-ms-6 col-md-6 col-md-offset-3 col-md-offset-3">
                <h2>NO ITEMS IN CART!</h2>
            </div>
        </div>
    @endif





@endsection
