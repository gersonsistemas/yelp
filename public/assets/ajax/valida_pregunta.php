<?php
require_once '../../core/model/db.php';
ini_set('display_errors', 'Off');

$respuesta=$_POST['q'];

$user=$_COOKIE["User"];

$sql="select * from users where id_user = $user AND resp_1 = '$respuesta'";
$ejecutasql= $connect-> query($sql);

if(mysqli_num_rows($ejecutasql)==0){

echo "<h2>Su respuesta es incorrecta</h2>";

}else{

$info=mysqli_fetch_array($ejecutasql);


echo '

<a data-toggle="modal" data-target="#myModal1" class="btn btn-primary">Generar nueva Contraseña</a>

<div class="modal inmodal fade" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <form action="." method="POST">
            <div class="modal-content animated bounceInRight">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Generar Nueva Contraseña</h4>
                </div>
                
                <div class="modal-body">
                    <script type="text/javascript" src="assets/ajax/busca_pregunta.js"></script>
                    <script type="text/javascript" src="assets/ajax/valida_pregunta.js"></script>
                    
                    <div class="form-group">
                                    
                        <label>Introduzca su nueva contraseña</label>                     
                        <input autocomplete="Off" type="password" placeholder="Nueva" class="form-control" name="newpassword" required><br>
                                    
                        <label>Confirme su nueva contraseña</label>                     
                        <input autocomplete="Off" type="password" placeholder="Confirme" class="form-control" name="confirmpassword" required>
                        
                       
            <input type="hidden" name="id_user" value="'.$info[id_user].'">
            
            <input type="hidden" name="password" value="'.$info[password].'">
            <input type="hidden" name="realname" value="'.$info[realname].'">
            <input type="hidden" name="passAdmin" value="12345678">
                                            
                    </div>
                </div>
                <div class="modal-footer">
                    
                    <button type="submit" class="btn btn-primary" name="changePassword" value="changePassword">Generar</button>
                    
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
            </form>
        </div>
    </div>

';
}

?>