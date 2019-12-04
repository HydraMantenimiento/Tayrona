    <label class="mt-3">Card details:</label>

<div class=" form-row">
    <div class="col-md-5 form-group">
        <input class="form-control" type="text" id="cardNumber" data-checkout="cardNumber" placeholder="Card Number">
    </div>

    <div class="col-md-3 form-group">
        <input class="form-control" type="text" data-checkout="securityCode" placeholder="CVC">
    </div>


    <div class="col-md-2 ">
        <input class="form-control" type="text" data-checkout="cardExpirationMonth" placeholder="MM">
    </div>

    <div class="col-md-2 ">
        <input class="form-control" type="text" data-checkout="cardExpirationYear" placeholder="YY">
    </div>
</div>

<div class=" form-row">
    <div class="col-md-6 form-group">
        <input class="form-control" type="text" data-checkout="cardholderName" placeholder="Your Name">
    </div>
    <div class="col-md-6 form-group">
        <input class="form-control" type="email" data-checkout="cardholderEmail" placeholder="email@example.com" name="email">
    </div>
</div>

<div class=" form-row">

    <div class="col-md-6 form-group">
        <select id="inputState" class="form-control custom-select" data-checkout="docType"></select>
    </div>

    <div class="col-md-6 form-group">
        <input class="form-control" type="text" data-checkout="docNumber" placeholder="Document">
    </div>
</div>

<div class=" form-row">
    <div class="col-md-12 form-group">
        <small class="form-text text-mute"  role="alert" >Your payment will be converted to {{ strtoupper(config('services.mercadopago.base_currency')) }}</small>
    </div>
</div>

<div class="form-group form-row">
    <div class="col">
        <small class="form-text text-danger" id="paymentErrors" role="alert"></small>
    </div>
</div>

<input type="hidden" id="cardNetwork" name="card_network">
<input type="hidden" id="cardToken" name="card_token">




<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>

<script>
    const mercadoPago = window.Mercadopago;

    mercadoPago.setPublishableKey('{{ config('services.mercadopago.key') }}');

    mercadoPago.getIdentificationTypes();
</script>

<script>
    function setCardNetwork()
    {
        const cardNumber = document.getElementById("cardNumber");

        mercadoPago.getPaymentMethod(
            { "bin": cardNumber.value.substring(0,6) },
            function(status, response) {
                const cardNetwork = document.getElementById("cardNetwork");

                cardNetwork.value = response[0].id;
            }
        );
    }
</script>

<script>
    const mercadoPagoForm = document.getElementById("paymentForm");

    mercadoPagoForm.addEventListener('submit', function(e) {
        if (mercadoPagoForm.elements.payment_platform.value === "{{ $paymentPlatform->id }}") {
            e.preventDefault();

            mercadoPago.createToken(mercadoPagoForm, function(status, response) {
                if (status != 200 && status != 201) {
                    const errors = document.getElementById("paymentErrors");

                    errors.textContent = response.cause[0].description;
                } else {
                    const cardToken = document.getElementById("cardToken");

                    setCardNetwork();

                    cardToken.value = response.id;

                    mercadoPagoForm.submit();
                }
            });
        }
    });
</script>
