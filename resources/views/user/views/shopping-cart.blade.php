@extends('theme.lteuser.masteruser')

@section('content')

    @if(session::has('cartproduct'))
    <div class="row">
        <div class="col-ms-6 col-md-6 col-md-offset-3 col-md-offset-3">
            <ul class="list-group">

                    <li class="list-group-items">
                        <spam class="badge">{{ $products['qty'] }}</spam>
                        <strong>{{ $products['item']['name'] }}</strong>
                        <strong>{{ $products['item']['descripcion'] }}</strong>
                        <span class="label label-success">{{ $products['precio'] }}</span>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="">Reduce by 1</a></li>
                                <li><a href="">Reduce by all</a></li>
                            </ul>
                        </div>
                    </li>

            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-ms-6 col-md-6 col-md-offset-3 col-md-offset-3">
            <strong>Total: {{$totalPrice}}</strong>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-ms-6 col-md-6 col-md-offset-3 col-md-offset-3">
            <button type="button" class="btn btn-success">Checkout</button>
        </div>
    </div>
    @else
        <div class="row">
            <div class="col-ms-6 col-md-6 col-md-offset-3 col-md-offset-3">
                <h2>NO ITEMS IN CART!</h2>
            </div>
        </div>
    @endif

    <section class="invoice">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> Tayrona Pet Shop
                    <small class="pull-right">Date: 2/10/2014</small>
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
            <div class="col-sm-4 invoice-col">
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
        <div class="row">
            <div class="col-xs-12 table-responsive">
                @foreach($product as $products)
                    <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Description</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Call of Duty</td>
                        <td>455-981-221</td>
                        <td>El snort testosterone trophy driving gloves handsome</td>
                        <td>$64.50</td>
                    </tr>
                    </tbody>
                </table>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <p class="lead">Payment Methods:</p>
                <img src="../../dist/img/credit/visa.png" alt="Visa">
                <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                <img src="../../dist/img/credit/american-express.png" alt="American Express">
                <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                </p>
            </div>
            <div class="col-xs-6">
                <p class="lead">Amount Due 2/22/2014</p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>$250.30</td>
                        </tr>
                        <tr>
                            <th>Tax (9.3%)</th>
                            <td>$10.34</td>
                        </tr>
                        <tr>
                            <th>Shipping:</th>
                            <td>$5.80</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>$265.24</td>
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
                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> Generate PDF
                </button>
            </div>
        </div>
    </section>



@endsection
