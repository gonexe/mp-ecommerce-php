<?php

    print_r('<h2>Visualización de resultado PENDIENTE ($_GET):</h2>');
    print_r("<br>");
    foreach ($_GET as $key => $value) {
        print_r($key.' = "'.$value.'"');
        print_r("<br>");
    }
    print_r("<br>");
    print_r("<h2>Muchas gracias (PENDIENTE) !!</h2>");

?>