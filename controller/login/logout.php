<?php
$bitacora[] = "Cierre de sesion(ID: $id_user)";


session_start();
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 


header('location: login');

?>