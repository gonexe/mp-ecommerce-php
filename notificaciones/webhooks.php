<?php
    //  SDK de Mercado Pago
    require __DIR__ .  '/vendor/autoload.php';
    //
    
    //  Agrego Credencial (Access Token)
    MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
    //

    //  Obtengo mensaje
    $body = @file_get_contents('php://input');
    $data = json_decode($body);
    //

    //  Guardo mensaje en servidor
    file_put_contents('notificaciones/'.$data -> id.".json", $body);
    //

    //  Verifico de que tipo de notificación se trata
    switch ($data -> type) {

        case "payment":

            #$payment = MercadoPago\Payment::find_by_id($data->data->id);

            http_response_code(201);

            // var_dump($payment);

        break;

        case "test":

            echo ($data -> type);

        break;
        
        case "plan":

            #$plan = MercadoPago\Plan::find_by_id($_POST["id"]);

            echo ($data -> type);

        break;

        case "subscription":

            #$plan = MercadoPago\Subscription::find_by_id($_POST["id"]);

            echo ($data -> type);

        break;

        case "invoice":
            
            #$plan = MercadoPago\Invoice::find_by_id($_POST["id"]);

            echo ($data -> type);

        break;
    }
    //

