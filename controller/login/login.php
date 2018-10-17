<?php 
session_start();

if($_POST['changePassword']) {
	$password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword= $_POST['confirmpassword'];
    $realname = $_POST['realname'];
	$id_user = $_POST['id_user'];
    if($_POST['passAdmin']) {
        
  
    }else{
    $password = md5($password);
    }
    
    $mainSql = "SELECT * FROM users WHERE id_user = '$id_user' AND password = '$password'";
    $mainResult = $connect->query($mainSql);

    if($mainResult->num_rows == 1) {
        
        if($newpassword==$confirmpassword){
          
            $newpassword = md5($newpassword);
            
            $edita="UPDATE `users` SET 
            `password` = '$newpassword' WHERE `users`.`id_user` = '$id_user';";
            
            $b_historial="Cambio de contraseña al usuario $realname ";
                    
            $bitacora="INSERT INTO `bitacora` (`id_bitacora`, `b_historial`, `b_fecha`, `b_username`) VALUES (NULL, '$b_historial', '$b_fecha', '$realname');";
            
            $connect->query($bitacora);
    
    
            if($connect->query($edita) === TRUE){
                
                $errors[] = "Contraseña del usuario $realname cambiada, ya podra iniciar sesion";
                
            }else{
      
             $errors[] = "No se realizaron cambios en la Base de datos";
                        
            }
            
            
            
        }
        else{
        
       $errors[] = "Las contraseñas no coinciden";
        
        } 
    } else{
        
       
        $errors[] = "La contraseña actual no coincide";
        
    } 
}

if($_POST['session']) {	
     
	$username = $connect->real_escape_string($_POST['username']); // Escapando caracteres especiales
	$password = $_POST['password'];

	if(empty($username) || empty($password)) {
		if($username == "") {
			$errors[] = "Se requiere nombre de usuario";
		} 

		if($password == "") {
			$errors[] = "Se requiere contraseña";
		}
	} else {
		$sql = "SELECT * FROM users WHERE username = '$username'";
		$result = $connect->query($sql);

		if($result->num_rows == 1) {
			$password = md5($password);
			// exists
			$mainSql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$mainResult = $connect->query($mainSql);

			if($mainResult->num_rows == 1) {
				$info_user = $mainResult->fetch_assoc();
				$id_user = $info_user['id_user'];
                
				// set session
				$_SESSION['idUserYelpgconex'] = $id_user;
                
                $id = 1;
	           setcookie("lockscreen","$id",time() + 0);
                
                $bitacora[] = "Inicio de sesion (ID: $id_user)";

				header('location: home');	
                
			} else{
				
				$errors[] = "Combinación incorrecta de nombre de usuario y/o contraseña";
			} // /else
		} else {		
			$errors[] = "El nombre de usuario no existe";		
		} // /else
	} // /else not empty username // password
	
} // /if $_POST


if(isset($_SESSION['idUserYelpgconex'])) {
    
	header('location: home');	
}
?>