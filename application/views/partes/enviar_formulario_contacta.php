<?php

  $nombre = $_POST["nombre_cita"];
  $email = $_POST["email_cita"];
  $consulta = $_POST["consulta_cita"];
  
  $asunto = "Consulta Leosoft";
  $cuerpo = "Nombre: $nombre <br />
             Email: $email <br />
             Mensaje: $consulta <br />
            ";
            
  $header = "From: $nombre <$email>";

  $enviar_email_a="info@ileosoft.com";
  
  $correo = mail($enviar_email_a,$asunto,$cuerpo,$header);
  
  if ($correo){
    /*si el correo se envía correctamente, se redirecciona a una página a la que le pasamos  
    un argumento para que muestre que todo ha ido correcto*/
    header("location:../contacto.php?ok=1");
    //echo "MENSAJE ENVIADO";
    exit;  
  } 
  else{
    /*si el correo no se envía correctamente, se redirecciona a una página a la que le pasamos  
    un argumento para que muestre que no se ha enviado*/
    header("location:../contacto.php?ok=0");
    //echo "ERROR";    
     exit;
  } 

  
?>
