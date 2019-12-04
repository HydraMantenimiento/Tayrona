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
            </div>
            <form action="{{ route('pay') }}" method="POST" id="paymentForm">
                @csrf
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
                                    <th></th>
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
                                    <td><a href="{{ route('product.reduce',['id'=>$products['item']['id']]) }}"><i class="fa fa-close"></i></a></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                       <div class="col">
                           <p class="lead">Payment Methods:</p>
                               <div class="form-group" id="toggler">
                                   <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                       @foreach($PaymentPlatforms as $paymentPlatform)
                                           <label
                                               class="btn btn-outline-secondary rounded m-2 p-1"
                                               data-target="#{{ $paymentPlatform->name }}Collapse"
                                               data-toggle="collapse"
                                               style="outline:none;"
                                           >
                                               <input
                                                   type="radio"
                                                   name="payment_platform"
                                                   value="{{ $paymentPlatform->id }}"
                                                   required
                                               >
                                               <img class="img-thumbnail" src="{{ asset($paymentPlatform->image) }}">
                                           </label>
                                       @endforeach
                                   </div>
                                   @foreach($PaymentPlatforms as $paymentPlatform)
                                       <div
                                           id="{{$paymentPlatform->name}}Collapse"
                                           class="collapse"
                                           data-parent="#toggler"
                                       >
                                           @includeIf('components.' . strtolower($paymentPlatform->name) . '-collapse')
                                       </div>
                                   @endforeach
                               </div>
                           <br>
                           <!--
                           <p class="text-muted well well-sm no-shadow"  >
                               <label>Tipo Moneda</label>
                               <select class="custom-select" name="currency" required >
                                   aca va un foreach para traer tipo de moneda que esta en la base de datos
                                       <option value="" required>
                                       </option>
                               </select>
                           </p>
                           -->
                       </div>
                    </div>
                    <div class="col-xs-6">
                        <p class="lead">Valor</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td><input value="{{$totalPrice}}" style=" border: 0; outline:none; background: none;" disabled></td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td><input required type="text" name="value"  value="{{$totalPrice}}" style=" border: 0; outline:none; background: none;" readonly></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row no-print">
                    <div class="col-xs-12">
                        <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
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
