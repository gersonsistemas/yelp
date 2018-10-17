<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar Sesión</title>

    <link href="<?php echo $rutastyles?>assets/img/favicon.png" rel="shortcut icon" type="image/ico" />
    
    <link href="<?php echo $rutastyles?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $rutastyles?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo $rutastyles?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo $rutastyles?>assets/css/style.css" rel="stylesheet">
    
    <link href="<?php echo $rutastyles?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo $rutastyles?>assets/css/plugins/steps/jquery.steps.css" rel="stylesheet">


</head>


<body class="gray-bg" style="background-image:url(assets/images-galeria/.jpg);">

    <div class="loginColumns animated fadeInDown">
        <div class="row">
            
            <div class="col-md-3"></div>


            <div class="col-md-6">
                <div class="ibox-content">
                    <div class="messages">
				<?php 
                    if($errors) {
				        foreach ($errors as $key => $value) {
				            echo'
                                <div class="alert  alert-warning" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
								    <i class="glyphicon glyphicon-exclamation-sign"></i>
									'.$value.'
                                </div>
                                ';										
				        }
                    } 
                ?>
            </div>
                
                    
                <h4 class="text-center all-tittles" style="margin-bottom: 30px;">INICIA SESIÓN CON TU CUENTA</h4>
                    
                    <form action="<?php echo $rutastyles?>login" method="post" class="templatemo-login-form">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" name="username" placeholder="Nombre de Usuario">           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control" name="password" placeholder="Contraseña">           
		          	</div>	
	        	</div>	          	
	          	
				<div class="form-group">
					<button value="session" type="submit" name="session" class="btn btn-primary block full-width m-b">Iniciar</button>
				</div>
                
	        
            </form>
                    
                    <p class="m-t"> <small>¿Ha olvidado su Contraseña?</small> </p>
            <div class="form-group">
					<a data-toggle="modal" data-target="#myModal" type="submit" class="btn btn-warning block full-width m-b">Recuperar</a>
            </div>
                </div>
            </div>
            
            <div class="col-md-3"></div>
            
        </div>
        <hr/>
    </div>
  <div class="modal inmodal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Recuperar credenciales de inicio</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                            
                        <script type="text/javascript" src="../controller/login/busca_pregunta.js"></script>
                        <script type="text/javascript" src="../controller/login/valida_pregunta.js"></script>
                                <div class="form-group">
                                    
                <label>Introduzca su nombre de usuario</label> 
                <input autocomplete="Off" type="text" id="buscar" onkeyup="loadXMLDoc()"  placeholder="Nombre de usuario" class="form-control">
                                     <br>                   
                                 <div id="myDiv"></div> 
                                    <br>
                                <div id="myDiv1"></div> 
                                            
                                            
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
    
    <script src="<?php echo $rutastyles?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/bootstrap.min.js"></script>

</body>

</html>