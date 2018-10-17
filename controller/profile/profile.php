<?php 
if($_POST['changeUsername']) {

$username = $_POST['username'];
$realname = $_POST['realname'];
$permission = $_POST['permission'];
$id_user = $_POST['id_user'];
    
$mainUsername = "SELECT * FROM users WHERE username = '$username' AND id_user != '$id_user'";
$mainResultUsername = $connect->query($mainUsername);
    
    if($mainResultUsername->num_rows == 0) {
        $mainRealname = "SELECT * FROM users WHERE realname = '$realname' AND id_user != '$id_user'";
        $mainResultRealname = $connect->query($mainRealname);
            if($mainResultRealname->num_rows == 0) {
                $edita="UPDATE `users` SET 
                `username` = '$username',
                `realname` = '$realname',
                `permission` = '$permission'
                WHERE `users`.`id_user` = '$id_user';";
                
                

                
                if($connect->query($edita) === TRUE){
        
                    $success[] = "Nombres de usuario $username editados con exito.";
                    $bitacora[] ="Nombres de usuario $username editados (ID: $id_user)";
        
                }
                else{
                    
                    $errors[] = "No se realizaron cambios en la Base de datos $connect->error.";
     
                }           
            }
            else{
                
                $warning[] = "Ya hay una persona regitrada con el nombre $realname";
            }
    
    }
    else{
        
        $warning[] = "El usuario $username ya existe.";
        
    }
}

if($_POST['changeData']) {
    
$id_user = $_POST['id_user'];
$proffession = $_POST['proffession'];
$education = $_POST['education'];
$location = $_POST['location'];
$notes = $_POST['notes'];
    
    
    $edita="UPDATE `users` SET 
    `proffession` = '$proffession',
    `education` = '$education',
    `location` = '$location',
    `notes` = '$notes' WHERE `users`.`id_user` = '$id_user';";
                
            
    $connect->query($bitacora);
    
    if($connect->query($edita) === TRUE){
        
        $bitacora[] ="Datos adicionales de usuario $username editados (ID: $id_user)";
        
        $success[] = "Datos adicionales editados";
        
    }
    else{
      $errors[] = "No se realizaron cambios en la Base de datos";
    }
}

if($_POST['changePassword']) {


$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$confirmpassword= $_POST['confirmpassword'];
$realname = $_POST['realname'];
$username = $_POST['username'];
$id_user = $_POST['id_user'];
    
if($_POST['passAdmin']) {
        
}
else{
    $password = md5($password);
}
    
$mainSql = "SELECT * FROM users WHERE id_user = '$id_user' AND password = '$password'";
$mainResult = $connect->query($mainSql);
    if($mainResult->num_rows == 1) {
        if($newpassword==$confirmpassword){
            
            $newpassword = md5($newpassword);
            $edita="UPDATE `users` SET 
            `password` = '$newpassword' WHERE `users`.`id_user` = '$id_user';";
            
            $bitacora[] = "Cambio de contraseña al usuario $username (ID: $id_user)";
    
            if($connect->query($edita) === TRUE){
                $success[] = "Contraseña cambiada";
                $bitacora[] = "Cambio de contraseña al usuario $username (ID: $id_user)";
            }
            else{
      
                $errors[] = "No se realizaron cambios en la Base de datos.";
                
            }
        }
        else{
        
            $warning[] = "Las contraseñas no coinciden";
        } 
    } 
    else{
        
        $warning[] = "La contraseña actual que ingreso no es valida.";
        
    } 
}

if($_POST['changeSecurity']) {
    
$realname = $_POST['realname'];
$id_user = $_POST['id_user'];
$id_security = $_POST['id_security'];
$security = $_POST['security'];
    
$password = $_POST['password'];
    
$password = md5($password); 
    
    $mainSql = "SELECT * FROM users WHERE id_user = '$id_user' AND password = '$password'";
    $mainResult = $connect->query($mainSql);
    if($mainResult->num_rows == 1) {
        
    $security = md5($security);
    
    $edita="UPDATE `users` SET 
    `id_security` = '$id_security',
    `security` = '$security' WHERE `users`.`id_user` = '$id_user';";
                
    
                    
    if($connect->query($edita) === TRUE){
        
        $bitacora[] = "Edito su respuesta de seguridad (ID: $id_user)";
        
        $success[] = "Datos de seguridad editados";
        
    }
    else{
      $errors[] = "No se realizaron cambios en la Base de datos";
    }    
        
    }else{
        
        $warning[] = "La contraseña actual que ingreso no es valida.";
        
    } 
    

}
?>

