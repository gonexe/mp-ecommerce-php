<?php
    //  SDK de Mercado Pago
    require __DIR__ .  '/vendor/autoload.php';
    //
    
    //  Agrego Credencial (Access Token)
    MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
    //

    //  Agrego Integrador ID
    MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");
    //

    //  Creo Objeto de Preferencia
    $preference = new MercadoPago\Preference();
    //

    //  Creo Item
    $item = new MercadoPago\Item();
    $item->title = 'Prueba';
    $item->quantity = 2;
    $item->unit_price = 123.45;
    $preference->items = array($item);
    //

    //  Excluyo tarjetas AMEX y como máximo 6 cuotas
    $preference->payment_methods = array(
        "excluded_payment_methods" => array(
            array(
                "id" => "amex"
            )
        ),
        "installments" => 6,
        "excluded_payment_types" => array(
            array(
                "id" => "atm"
            )
        )
    );
    //

    //  Guardo Preferencia
    $preference->save();
    //

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Prueba Gonzalo</title>
    </head>

    <body>
        <form action="detail2.php" method="POST">

            <script
                src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                data-preference-id="<?php echo $preference->id; ?>">
            </script>

        </form>
    </body>
</html>