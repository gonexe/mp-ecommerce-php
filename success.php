<?php

    print_r('Visualización de resultado EXITOSO ($_GET)');
    print_r('<br>');
    foreach ($_GET as $key => $value) {
        print_r("Clave: $key - Valor: $value");
        print_r('<br>');
    }
    print_r('<br><br>');
    print_r('Muchas gracias !!');

?>