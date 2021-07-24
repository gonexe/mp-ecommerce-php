<?php
    // SDK de Mercado Pago
    require __DIR__ .  '/vendor/autoload.php';
    
    // Agrega credenciales
    MercadoPago\SDK::setAccessToken('TEST-7892157177460921-030322-ceb964be4439a87efac7b39c63718e09-31823309');

    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();

    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->title = 'Mi producto';
    $item->quantity = 1;
    $item->unit_price = 75.56;
    $preference->items = array($item);
    $preference->save();

?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width-device-width, initial-scale=1.0">
            <title>Prueba Gonzalo</title>
        </head>

        <script src="https://sdk.mercadopago.com/js/v2"></script>
        
        <script>
            const mp = new MercadoPago('TEST-df699538-52a2-4f37-8bae-f7df14723a8d', {
                    locale: 'es-AR'
            });

            // Inicializa el checkout
            mp.checkout({
                preference: {
                    id: '<?php $preference->id; ?>'
                },
                render: {
                        container: '.cho-container', // Indica el nombre de la clase donde se mostrará el botón de pago
                        label: 'Pagar Gonzalo', // Cambia el texto del botón de pago (opcional)
                }
            });
        </script>

    <body>
        <form action="detail2.php" method="POST">
            <div class=".cho-container">

            </div>
        </form>
    </body>
</html>