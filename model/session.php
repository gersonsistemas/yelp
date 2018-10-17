<?php
session_start();
if(!$_SESSION['idUserYelpgconex']) {
	header('location: login');	
} 

$id_user = $_SESSION['idUserYelpgconex'];
$user = "SELECT * FROM `users` WHERE id_user = '$id_user'";
$query_user = $connect->query($user);
$info_user = $query_user->fetch_assoc();
$permission=$info_user['permission'];

if($info_user['status']!="Activo"){
    
    header('location: nosession');
    
}

if($info_user['security']==""){
    
    $warning[] = "Sin respuesta de seguridad. <br><br>Debe crearla en el modulo Perfil/Pregunta de Seguridad: <a type='submit' class='btn btn-warning block full-width m-b' href='profile#pregunta'>Perfil</a>";
}

$company = "SELECT * FROM `company` WHERE id_company = 1";
$query_company = $connect->query($company);
$info_company = $query_company->fetch_assoc();

?>