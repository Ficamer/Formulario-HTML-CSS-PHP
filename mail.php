<?php 
    if(isset($_POST['Enviar'])){  //Si se presiono enviar
        if(!empty($_POST['nombre']) && !empty($_POST['mail']) && !empty($_POST['texto']) && !empty($_POST['asunto'])){ // Si no estan vacios los campos.
            $nombre = $_POST['nombre'];
            $email = $_POST['mail'];
            $texto = $_POST['texto'];
            $asunto = $_POST['asunto'];
            $destinatario = "emaildeprueba@gmail.com";
            $carta = "De: ".$nombre."\n";
            $carta .= "Correo: ".$email."\n";
            $carta .= "Mensaje: ".$texto;
            $mail = mail($destinatario,$asunto,$carta); //Enviando MSJ
        }
    }
?>