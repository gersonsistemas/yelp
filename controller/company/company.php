<?php

if($_POST['changeCompany']) {
    
$name_company = $_POST['name_company'];
$prefix_company = $_POST['prefix_company'];
$img_logo = $_POST['img_logo'];
$img_login = $_POST['img_login'];
$img_profile = $_POST['img_profile'];
$title_html = $_POST['title_html'];

    
    $edita="UPDATE `company` 
    SET 
    `name_company` = '$name_company', 
    `prefix_company` = '$prefix_company', 
    `img_logo` = '$img_logo', 
    `img_login` = '$img_login', 
    `img_profile` = '$img_profile', 
    `title_html` = '$title_html' 
    WHERE 
    `company`.`id_company` = 1;";
                
    $bitacora[] = "Edito los datos de la organización";
                    
    if($connect->query($edita) === TRUE){
        
        $success[] = "Datos de la organización editados";
        
    }
    else{
      $errors[] = "No se realizaron cambios en la Base de datos";
    }
}

?>