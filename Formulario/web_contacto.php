<?php
	include("smtpmail.php");

	// Aqui colocamos los campos que tiene nuestro formulario

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	
	$comentario = $_POST['comentario'];
	$error = '';
	// Aqui comprobamos si el usuario ingreso los datos requeridos
	if ($nombre == ""){ 
		$error.="No ha ingresado su Nombre <BR>\n";
	
	}if ($email == ""){ 
		$error.="No ha ingresado su Email <BR>\n";
   	}if(ereg("[a-z0-9_.]+@[a-z0-9]+[.][.a-z0-9]+",$email)==0 && $email!=""){
		$error.="El Email ingresado no es valido <BR>\n";
   
   	}if ($comentario==""){ 
		$error.="No ha ingresado su Consulta o Comentario <BR>\n";	
   	}
   	
   	if ($error != ""){
		// Este es el archivo que contendra el mensaje de error
		include ("contacto_error.php");
		exit;
	}else{
		
		// Aqui armamos el mensaje

		$TxtMensa="------------------------------------------------------\n\n";
		$TxtMensa.="Nuevo Comentario desde su pagina web \n\n";
		$TxtMensa.="-----------------------------------------------------\n\n";
		
		
		$TxtMensa.="Nombre: $nombre $apellido \n";
		$TxtMensa.="Email: $email\n";
		
		$TxtMensa.="Comentario: $comentario \n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";

	// Aqui hacemos el envio del email

        $Mail =& new PHPMailer();
        $Mail->IsSMTP();
        $Mail->Host = "localhost:25";
        $Mail->SMTPAuth = false;
	$Mail->WordWrap = 50;
        $Mail->FromName = $nombre;
        $Mail->From = $email;
        $Mail->Priority = 1;
        $Mail->Subject = "Nuevo Comentario desde su pagina web";
        $Mail->Body = $TxtMensa;

 	 $Mail->AddAddress("h.p@ventamex.net", "Hector Peregrina");
	 $Mail->Send();
	// Este es el archivo que contendra el mensaje de agradecimiento o puede ingresar otra ruta para que lo redireccione despues de enviado el correo
	 include ("contacto_gracias.php");
	
	}

?>