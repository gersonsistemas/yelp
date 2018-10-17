<?php 
  
  if($_POST['deletefile']){
  
  $delete=$_POST['deletefile'];
  unlink($delete);
      
      
      $warning[] = "Eliminacion de imagen en la ruta $delete";
      $bitacora[] = "Eliminación de ruta $delete";
      
}
  
if($_POST['image']){
  
$uploadedfileload="true";
$uploadedfile_size=$_FILES['uploadedfile'][size];
  
  if ($_FILES[uploadedfile][size]>3000000){
      
      $warning[] = "El archivo es mayor que 3000KB, debes reduzcirlo antes de subirlo.";
      
    $uploadedfileload="false";}
  
  if (!($_FILES[uploadedfile][type] =="image/jpeg" OR $_FILES[uploadedfile][type] =="image/jpg" OR $_FILES[uploadedfile][type] =="image/gif" OR $_FILES[uploadedfile][type] =="image/png")){
    
      $warning[] = "El archivo debe ser jpg, jpeg o png.";
      
    $uploadedfileload="false";}

$file_name=$_FILES[uploadedfile][name];
$add="assets/images-galeria/$file_name";
if($uploadedfileload=="true"){

if(move_uploaded_file ($_FILES[uploadedfile][tmp_name], $add)){
    
    $success[] = "Se ha guardado la imagen $file_name";
    $bitacora[] = "Se ha guardado la imagen $file_name";
    

}else{
    
    $errors[] = "El archivo $file_name no fue guardado.";
}

}
 
}        
?>