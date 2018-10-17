<?php
require_once '../../core/model/db.php';
ini_set('display_errors', 'Off');

$q=$_POST['q'];

$sql="select * from users where username = '$q'";
$ejecutasql= $connect-> query($sql);


if(mysqli_num_rows($ejecutasql)==0){

echo "<h2>Disculpe, el usuario $q no existe</h2>";

}else{


$fila=mysqli_fetch_array($ejecutasql);
    
$usuario=$fila['id_user'];

setcookie("User","$usuario",time() + 600);
    
echo '

<h3><strong>Pregunta de seguridad</strong> : '.$fila[preg_1].' </h3> 
  <br>

<h3><strong>Respuesta de seguridad</strong></h3> 

<input autocomplete="Off" id="buscar1" onkeyup="loadXMLDoc1()" type="text" placeholder="Ingrese su respuesta" name="respuesta" class="form-control"><br>

';
}

?>