<?php 
$id_mail = 1;  
$buscaMail="SELECT * FROM `mail` WHERE `id_mail` = $id_mail";
$Result=$connect-> query($buscaMail);
$info_Mail = $Result->fetch_assoc();
?>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Gestión de Correo</h2>
        <ol class="breadcrumb">
            <li>
                <a href=".">Dashboard</a>
            </li>
            <li class="active">
                <strong>PHPMailer</strong>
            </li>
            
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<br>
    
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    
                    <h5>
                        Configuración
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
                        <form role="form" action="phpmailer" method="post" id="form">
                    
                    <div class="col-md-6 form-group">
                        
                        <label>Nombre del Host</label>
                        <input type="text" class="form-control" name="host" value="<?php echo $info_Mail['host']?>" required>
                        
                    </div>
                            
                    <div class="col-md-3 form-group">
                        
                        <label>Puerto</label>
                        <input type="text" class="form-control" name="port" value="<?php echo $info_Mail['port']?>" maxlength="5" minlength="2" digits="true" required>
                        
                    </div>
                            
                    <div class="col-md-3 form-group">
                        
                        <label>SMTPDebug</label>
                        <input type="text" class="form-control" name="SMTPDebug" value="<?php echo $info_Mail['SMTPDebug']?>" maxlength="2" minlength="1" digits="true" required>
                        
                    </div>
                    
                    <div class="col-md-4 form-group">
                        
                        <label>Usuario de Correo</label>
                        <input type="email" class="form-control" name="username_mail" value="<?php echo $info_Mail['username_mail']?>" required>
                        
                    </div>
                    
                    <div class="col-md-4 form-group">
                        
                        <label>Contraseña</label>
                        <input type="text" class="form-control" name="password_mail" value="<?php echo $info_Mail['password_mail']?>" required>
                        
                    </div>
                    
                    <div class="col-md-4 form-group">
                        
                        <label>Nombre de Usuario</label>
                        <input type="text" class="form-control" name="realname_mail" value="<?php echo $info_Mail['realname_mail']?>" required>
                        
                    </div>
                            
                <div class="col-md-12 form-group">
                <div class="radio i-checks">
                    <label>
<input type="radio" value="true" <?php if($info_Mail[SMTPAuth]=="true"){echo'checked=""';}?> name="SMTPAuth"> 
                        <i></i> Requiere SSL True
                    </label>
                    </div>
                <div class="radio i-checks">
                    <label><input type="radio" value="false" <?php if($info_Mail[SMTPAuth]=="false"){echo'checked=""';}?> name="SMTPAuth"> 
                        <i></i> Requiere SSL False
                    </label>
                </div>
                    
                </div>
                                      
                                      
                    <div class="col-md-12 form-group">  
                        
                    <br><input type="submit" name="changePHPmailer" class="btn btn-success" value="Guardar Cambios">
                        
                    </div>
                    
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
