<?php

if($_POST['changePHPmailer']) {
    
$host = $_POST['host'];
$port= $_POST['port'];
$SMTPDebug = $_POST['SMTPDebug'];
$username_mail = $_POST['username_mail'];
$password_mail= $_POST['password_mail'];
$realname_mail = $_POST['realname_mail'];
$SMTPAuth = $_POST['SMTPAuth'];
    
    $edita="UPDATE `mail` 
    SET 
    `host` = '$host', 
    `port` = '$port', 
    `SMTPDebug` = '$SMTPDebug', 
    `username_mail` = '$username_mail', 
    `password_mail` = '$password_mail', 
    `realname_mail` = '$realname_mail', 
    `SMTPAuth` = '$SMTPAuth' 
    WHERE 
    `mail`.`id_mail` = 1;";
                
    $bitacora[] = "Edito los datos de PHPMailer";
                    
    if($connect->query($edita) === TRUE){
        
        $success[] = "Datos de PHPMailer editados";
        
    }
    else{
      $errors[] = "No se realizaron cambios en la Base de datos";
    }
}

?>