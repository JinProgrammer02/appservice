<?php
	$options = array(
        'location' => 'http://localhost/webservices/appwebservices/server.php',
        'uri'      => 'http://localhost/webservices/appwebservices/'
    );
    
    $client = new SoapClient (NULL, $options);
    $nombre = "Santiago";

    echo $client->saludar($nombre.'!!')."</br>";
    echo "El Resultado de la suma es: ".$client->operacion(10, 5)."</br>";
    
?>