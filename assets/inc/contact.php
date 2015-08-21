<?php

    require 'sendgrid-php/sendgrid-php.php';


	$sendgrid_username = "ialtamirano";
    $sendgrid_password ="Password01";
    $to                = "ivan.altamirano@cuatroo.com";
    
    
    if(!isset($_POST["name"])){
        echo "Por favor ingrese su nombre";
        exit();
    };
    
    if(!isset($_POST["email"])){
        echo "Por favor ingrese su correo electrónico";
        exit();
    };
    
    
    if(!isset($_POST["message"])){
        echo "Por favor ingrese un mensaje";
        exit();
    };
    
    $body = "Nombre:".$_POST["name"].", email:".$_POST["email"].", mensaje:".$_POST["message"].", presupuesto:".$_POST["budget"];
    
    
    $sendgrid = new SendGrid($sendgrid_username, $sendgrid_password, array("turn_off_ssl_verification" => true));
    $email    = new SendGrid\Email();
    $email->addTo($to)->
           setFrom('sistema@cuatroo.com')->
           setFromName('Web Cuatroo')->
           setSubject('"Contacto desde Web Cuatroo - !"')->
           setHtml($body)->
           addHeader('X-Sent-Using', 'SendGrid-API')->
           addHeader('X-Transport', 'web');
    $response = $sendgrid->send($email);
          
    echo "success" ;
                
?>