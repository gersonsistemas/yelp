
<?php
require_once '../../model/db.php';
ini_set('display_errors', 'off');

$q=$_POST['q'];

$sql="select * from users where username = '$q'";
$ejecutasql= $connect-> query($sql);


if(mysqli_num_rows($ejecutasql)==0){

echo "<h2>Disculpe, el usuario $q no existe</h2>";

}else{


$fila=mysqli_fetch_array($ejecutasql);
    
$usuario=$fila['id_user'];
$id_security=$fila['id_security'];
    
    $Pregunta="select * from security where id_security = '$id_security'";
    $ejecutaPregunta= $connect-> query($Pregunta);
    
    $result=mysqli_fetch_array($ejecutaPregunta);

setcookie("User","$usuario",time() + 600);
    
echo '

<h3><strong>Pregunta de seguridad</strong> : '.$result[name_security].' </h3> 
  <br>

<h3><strong>Respuesta de seguridad</strong></h3> 

<input autocomplete="Off" id="buscar1" onkeyup="loadXMLDoc1()" type="text" placeholder="Ingrese su respuesta" name="respuesta" class="form-control"><br>

';
}

?>