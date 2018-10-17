<?php 
if($info_user['db_insert']=="Activo"){

    if($_POST['newUser']) {

        $username = $_POST['username'];
        $realname = $_POST['realname'];
        $permission = $_POST['permission'];
        $status = $_POST['status'];
        $db_insert = $_POST['db_insert'];
        $db_update = $_POST['db_update'];
        $db_delete = $_POST['db_delete'];
        $password = $_POST['password'];
        $confirmpassword= $_POST['confirmpassword'];
            
            if($status==""){$status="No activo";}

            if($db_insert==""){$db_insert="No activo";}
            
            if($db_update==""){$db_update="No activo";}
            
            if($db_delete==""){$db_delete="No activo";}
            
        $mainUsername = "SELECT * FROM users WHERE username = '$username'";
        $mainResultUsername = $connect->query($mainUsername);
            
        if($mainResultUsername->num_rows == 0) {
                
            $mainRealname = "SELECT * FROM users WHERE realname = '$realname'";
            $mainResultRealname = $connect->query($mainRealname);
                
            if($mainResultRealname->num_rows == 0) {
                        
                if($password==$confirmpassword){
                  
                $password = md5($password);
                    
                $newuser="INSERT INTO `users`(`id_user`, `username`, `realname`, `password`, `id_security`, `permission`,`db_insert`,`db_update`,`db_delete`,`status`) VALUES (NULL,'$username','$realname','$password','1','$permission','$db_insert','$db_update','$db_delete','$status');";
                    
            
                    if($connect->query($newuser) === TRUE){
                        
                        $bitacora[] = "Creo el usuario $username para $realname";  
                        
                        $success[] = "Usuario para $realname creado con exito ";
                        
                    }else{
                        $errors[] = "Creacion de Usuario <br><br> $connect->error";
                    }
                }else{  
                    $warning[] = "Las contraseñas no coinciden";
                }
            }else{  
                $warning[] = "Ya hay una persona regitrada con el nombre $realname.";  
            }   
        }else{   
            $errors[] = "Ya existe el usuario $username.";
        }
    }
    
    if($_POST['newCity']) {

        $name = $_POST['name'];
        $country = $_POST['country'];
        $zip_code = $_POST['zip_code'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];        
        
        $validateUnique = $connect->query("SELECT * FROM cities WHERE zip_code = '$zip_code'");
    
        if($validateUnique->num_rows == 0) {
        
            
            $new="INSERT INTO `cities`(`id`, `name`, `country`, `zip_code`, `latitude`, `longitude`) VALUES (NULL,'$name','$country','$zip_code','$latitude','$longitude');";
                   
    
            if($connect->query($new) === TRUE){
                
                
                $bitacora[] = "Created city $name";  
                
                $success[] = "Created city $name";
                
            }
            else{
                $errors[] = "Registry city <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Zip code $zip_code is exist.";
        }
    }
}else{
    if($_POST['insert']){
        $errors[] = "Privileges no insert data.";
    }
}

if($info_user['db_update']=="Activo"){

    if($_POST['changeUsername']) {

        $username = $_POST['username'];
        $realname = $_POST['realname'];
        $permission = $_POST['permission'];
        $status = $_POST['status'];
        $db_insert = $_POST['db_insert'];
        $db_update = $_POST['db_update'];
        $db_delete = $_POST['db_delete'];
        $id_user = $_POST['id_user'];
    
    
        if($status==""){$status="No activo";}

        if($db_insert==""){$db_insert="No activo";}
        
        if($db_update==""){$db_update="No activo";}
        
        if($db_delete==""){$db_delete="No activo";}
    
        $mainUsername = "SELECT * FROM users WHERE username = '$username' AND id_user != '$id_user'";
        $mainResultUsername = $connect->query($mainUsername);
            
        if($mainResultUsername->num_rows == 0) {

            $mainRealname = "SELECT * FROM users WHERE realname = '$realname' AND id_user != '$id_user'";
            $mainResultRealname = $connect->query($mainRealname);
                    
            if($mainResultRealname->num_rows == 0) {

                $edita="UPDATE `users` SET 
                `username` = '$username',
                `realname` = '$realname',
                `permission` = '$permission',
                `status` = '$status',
                `db_insert` = '$db_insert',
                `db_update` = '$db_update',
                `db_delete` = '$db_delete'
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
                }else{
                    $errors[] = "No se realizaron cambios en la Base de datos.";
                }
            }else{
                $warning[] = "Las contraseñas no coinciden";
            } 
        }else{
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
            }else{
              $errors[] = "No se realizaron cambios en la Base de datos";
            }    
        }else{
            $warning[] = "La contraseña actual que ingreso no es valida.";   
        } 
    }
    
    if($_POST['editCity']) {
    
        $id = $_POST['id'];
        $name = $_POST['name'];
        $country = $_POST['country'];
        $zip_code = $_POST['zip_code'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];  

        $validateUnique = $connect->query("SELECT * FROM cities WHERE zip_code = '$zip_code' AND id != '$id'");

        if($validateUnique->num_rows == 0) {
            
            $edit="UPDATE `cities` SET 
            `name` = '$name',
            `country` = '$country',
            `zip_code` = '$zip_code',
            `latitude` = '$latitude',
            `longitude` = '$longitude' 
            WHERE `cities`.`id` = '$id';";
                   
    
            if($connect->query($edit) === TRUE){
                
                
                $bitacora[] = "Edit city $name";  
                
                $success[] = "Edit city $name";
                
            }
            else{
                $errors[] = "Edit city <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Zip code $zip_code is exist.";
        }
    }
}else{
    if($_POST['update']){
        $errors[] = "Privileges no edit data.";
    }
}



if($info_user['db_delete']=="Activo"){


    if($_POST['deleteUser']) {

        $username = $_POST['username'];
        $realname = $_POST['realname'];
        $id_user = $_POST['id_user'];

        $delete = "DELETE FROM `users` WHERE `users`.`id_user` = '$id_user'";
        $deleteUser = $connect->query($delete);
    
        if($deleteUser) {
            $bitacora[] = "Elimino el usuario $username (ID: $id_user)";
            $warning[] = "El usuario $username ha sido eliminado.";
        }else{
            $errors[] = "No se realizaron cambios en la Base de datos.";
        }
    }
    
    
    if($_POST['deleteCity']) {

        $id = $_POST['id'];
        $name = $_POST['name'];
        
        $delete = "DELETE FROM `cities` WHERE `cities`.`id` = '$id'";
        
        if($connect->query($delete) === TRUE){
    
            $bitacora[] = "Delete City $name id $id";
        
            $warning[] = "Delete City $name id $id";
        }
        else{
            $errors[] = "Delete City. <br><br> $connect->error";
        }

    }

    if($_POST['deleteAllBusinessInCity']) {

        $id_city = $_POST['id_city'];
        $info_city = $_POST['info_city'];
        
        $delete = "DELETE FROM `business` WHERE `business`.`id_cities` = '$id_city'";
        
        if($connect->query($delete) === TRUE){
    
            $bitacora[] = "Delete all business in city $info_city";
        
            $warning[] = "Delete all business in city $info_city";
        }
        else{
            $errors[] = "Delete all business. <br><br> $connect->error";
        }

    }
}
else{
    if($_POST['delete']){
    $errors[] = "No tiene permisos para eliminar datos.";
    }
}
?>

