<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Profile</h2>
        <ol class="breadcrumb">
            <li>
                <a href=".">Dashboard</a>
            </li>
            <li class="active">
                <strong>Profile</strong>
            </li>
            
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<br>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    
                    <h5>
                        Nombre de Usuario
                    </h5>
                    
                    <div class="ibox-tools">
                        
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        
                        <ul class="dropdown-menu dropdown-user">
                            
                            <li>
                                <a href="#">Config option 1</a>
                            </li>
                            
                            <li>
                                <a href="#">Config option 2</a>
                            </li>
                        </ul>
                        
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                        
                    </div>
                </div>
                <div class="ibox-content">
                    
                    <div class="row">
                        
                        <form role="form" action="profile" method="post" id="formuser">
                    
                    <div class="col-md-12 form-group">
                        
                        <label for="username">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $info_user['username']?>" required>
                        
                    </div>
                    
                    <div class="col-md-12 form-group">
                        
                        <label for="realname">Nombre Real</label>
                        <input type="text" class="form-control" id="realname" name="realname" value="<?php echo $info_user['realname'] ?>" required>
                        
                    </div>
                                      
                                      
                    <div class="col-md-12 form-group"> 
						<input type="hidden" name="status" value="<?php echo $info_user['status'] ?>">
                        <input type="hidden" name="permission" value="<?php echo $info_user['permission'] ?>">
                        <input type="hidden" name="id_user" value="<?php echo $info_user['id_user'] ?>">
                        
                    <br><input type="submit" name="changeUsername" class="btn btn-success" value="Guardar Cambios">
                        
                    </div>
                    
                </form>
  
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    
                    <h5>
                        Cambio de Contraseña
                    </h5>
                    
                    <div class="ibox-tools">
                        
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        
                        <ul class="dropdown-menu dropdown-user">
                            
                            <li>
                                <a href="#">Config option 1</a>
                            </li>
                            
                            <li>
                                <a href="#">Config option 2</a>
                            </li>
                        </ul>
                        
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                        
                    </div>
                </div>
                <div class="ibox-content">
                    
                    <div class="row">
                <form role="form" action="profile" method="post" id="formuserpass">
                                      
                    <div class="col-md-12 form-group">
                        
                        <label for="password">Contraseña Actual</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        
                    </div>
                                      
                    <div class="col-md-12 form-group">
                        
                        <label for="newpassword">Nueva</label>
                        <input type="password" class="form-control" id="newpassword" name="newpassword" required>
                        
                    </div>
                    
                    <div class="col-md-12 form-group">
                        
                        <label for="confirmpassword">Confirme</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required equalTo="#newpassword">
                        
                    </div>
                                      
                    <div class="col-md-12 form-group">  
                        
                        <input type="hidden" name="id_user" value="<?php echo $info_user['id_user'] ?>">
                        <input type="hidden" name="realname" value="<?php echo $info_user['realname'] ?>">
                        <input type="hidden" name="username" value="<?php echo $info_user['username'] ?>">
                        <br><input type="submit" name="changePassword" class="btn btn-success" value="Guardar Cambios">
                        
                    </div>
                                  </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    
                    <h5>
                        Seguridad
                    </h5>
                    
                    <div class="ibox-tools">
                        
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        
                        <ul class="dropdown-menu dropdown-user">
                            
                            <li>
                                <a href="#">Config option 1</a>
                            </li>
                            
                            <li>
                                <a href="#">Config option 2</a>
                            </li>
                        </ul>
                        
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                        
                    </div>
                </div>
                <div class="ibox-content">
                    
                    <div class="row">
                 <form role="form" action="profile" method="post" id="formusersec">
                                      
                     <div class="col-md-12 form-group">
                        
                        <label for="pregunta1">Pregunta</label>
                <select class="form-control" name="id_security" required>
                    <option value="">Seleccione</option>
<?php

$sql="SELECT * FROM security";
$execute=$connect-> query($sql);
                
foreach($execute as $filas){
    echo'<option value = "'.$filas[id_security].'">
        '.utf8_encode($filas[name_security]).'
        </option>';
}

?>
            </select>
                        
                    </div>
                                      
                    <div class="col-md-12 form-group">
                        
                        <label for="security">Ingrese su respuesta</label>
                        <input type="text" class="form-control" id="security" name="security" required>
                        
                    </div>
                     
                    <div class="col-md-12 form-group">
                        
                        <label for="password">Contraseña Actual</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        
                    </div>
                    
                                      
                    <div class="col-md-12 form-group">  
                        
                        <input type="hidden" name="id_user" value="<?php echo $info_user['id_user'] ?>">
                        <input type="hidden" name="realname" value="<?php echo $info_user['realname'] ?>">
                        <br><input type="submit" name="changeSecurity" class="btn btn-success" value="Guardar Cambios">
                        
                    </div>
                                  </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
