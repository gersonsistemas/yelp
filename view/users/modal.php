<div class="modal inmodal fade" id="newUser" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="users" method="post" id="formuser">
     <div class="modal-dialog modal-lg">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Nuevo usuario</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="col-md-6 form-group">
                    <label for="username">Nombre de Usuario (*)</label>
                    <input type="text" class="form-control" id="username" name="username" value="" required autocomplete="off">      
                </div>
                    
                <div class="col-md-6 form-group">
                    <label for="realname">Nombre Real (*)</label>
                    <input type="text" class="form-control" id="realname" name="realname" value="" required autocomplete="off">
                </div>
                                      
                <div class="col-md-6 form-group">
                    <label for="newpassword">Contraseña (*)</label>
                    <input type="password" class="form-control" id="newpassword" name="password" required autocomplete="off" equalTo>
                </div>
                    
                <div class="col-md-6 form-group">
                    <label for="confirmpassword">Confirme la Contraseña (*)</label>
                    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required autocomplete="off" equalTo="#newpassword">
                </div>
                                                        
                <div class="col-md-4 form-group">
                    <div class="i-checks"><label><input type="checkbox" checked name="permission" value="Administrador"><i></i>Rol de Administrador</label></div>
                </div>

                <div class="col-md-2 form-group"> 
                    <div class="i-checks"><label><input type="checkbox" checked name="status" value="Activo"><i></i>Activo</label></div> 
                </div>
                
                <div class="col-md-2  form-group">
                    <div class="i-checks"><label><input type="checkbox" checked name="db_insert" value="Activo"><i></i>Insertar</label></div>
                </div>
                
                <div class="col-md-2 form-group">
                    <div class="i-checks"><label><input type="checkbox" checked name="db_update" value="Activo"><i></i>Editar</label></div>
                </div>
                
                <div class="col-md-2  form-group">
                    <div class="i-checks"><label><input type="checkbox" checked name="db_delete" value="Activo"><i></i>Eliminar</label></div>
                    
                </div><br>
                
                <p>(*) Campos requeridos</p>
                
            </div>
            
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="newUser" class="btn btn-success" value="Guardar Cambios">
            </div>
            
        </div>
    </div>
</form>
</div>

<?php 

foreach($execute as $usersmodal){
      
      echo'
<div class="modal inmodal fade" id="'.$usersmodal[username].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="users" method="post" id="formuser'.$usersmodal[id_user].'">
     <div class="modal-dialog modal-lg">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-edit modal-icon"></i>
                <h4 class="modal-title">Editar usuario</h4>
                <small class="font-bold">Esta editando los datos del usuario '.$usersmodal[username].' con nombre '.$usersmodal[realname].'.
                </small>
            </div>
            
            <div class="modal-body">
                              
                <div class="col-md-6 form-group">
                    <label for="username">Nombre de Usuario (*)</label>
                    <input type="text" class="form-control" id="username" name="username" value="'.$usersmodal[username].'" required autocomplete="off">
                </div>
                    
                <div class="col-md-6 form-group">
                    <label for="realname">Nombre Real (*)</label>
                    <input type="text" class="form-control" id="realname" name="realname" value="'.$usersmodal[realname].'" required autocomplete="off">
                </div>
                
                <div class="col-md-4 form-group">
                    <div class="i-checks"><label><input type="checkbox" checked name="permission" value="Administrador"><i></i>Rol de Administrador</label></div>
                </div>

                <div class="col-md-2 form-group"> 
                    <div class="i-checks"><label><input type="checkbox" checked name="status" value="Activo"><i></i>Activo</label></div> 
                </div>
                
                <div class="col-md-2  form-group">
                    <div class="i-checks"><label><input type="checkbox" checked name="db_insert" value="Activo"><i></i>Insertar</label></div>
                </div>
                
                <div class="col-md-2 form-group">
                    <div class="i-checks"><label><input type="checkbox" checked name="db_update" value="Activo"><i></i>Editar</label></div>
                </div>
                
                <div class="col-md-2  form-group">
                    <div class="i-checks"><label><input type="checkbox" checked name="db_delete" value="Activo"><i></i>Eliminar</label></div>
                    
                </div><br>
                
                <p>(*) Campos requeridos</p>
                
            </div>
            
            <div class="modal-footer">
                <input type="hidden" name="update" value="valor">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="hidden" name="id_user" value="'.$usersmodal[id_user].'">
                <input type="submit" name="changeUsername" class="btn btn-primary" value="Guardar Cambios">
                
            </div>
            
        </div>
    </div>
</form>
</div>

<div class="modal inmodal fade" id="pass'.$usersmodal[username].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="users" method="post" id="formuserpass'.$usersmodal[id_user].'">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-key modal-icon"></i>
                <h4 class="modal-title">Editar contraseña de usuario</h4>
                <small class="font-bold">Esta editando la contraseña del usuario '.$usersmodal[username].' con nombre '.$usersmodal[realname].'.
                </small>
            </div>
            
            <div class="modal-body">
                              
                <div class="col-md-12 form-group">
                    <label for="newpassword">Contraseña (*)</label>
                    <input type="password" class="form-control" id="newpassword'.$usersmodal[id_user].'" name="newpassword" required autocomplete="off">
                </div>
                    
                <div class="col-md-12 form-group">
                    <label for="confirmpassword">Confirme la Contraseña (*)</label>
                    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required autocomplete="off" equalTo="#newpassword'.$usersmodal[id_user].'">
                </div>
                <p>(*) Campos requeridos</p>
                
            </div>
            
            <div class="modal-footer">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="hidden" name="update" value="valor">
                <input type="hidden" name="id_user" value="'.$usersmodal[id_user].'">
                <input type="hidden" name="password" value="'.$usersmodal[password].'">
                <input type="hidden" name="realname" value="'.$usersmodal[realname].'">
                <input type="hidden" name="username" value="'.$usersmodal[username].'">
                <input type="hidden" name="passAdmin" value="12345678">
            
                <input type="submit" name="changePassword" class="btn btn-warning" value="Guardar Cambios">
            </div>
            
        </div>
    </div>
</form>
</div>

<div class="modal inmodal fade" id="delete'.$usersmodal[username].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="users" method="post" id="formuserpass'.$usersmodal[id_user].'">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-warning modal-icon"></i>
                <h4 class="modal-title">Eliminar usuario</h4>
                <small class="font-bold">Eliminación del usuario '.$usersmodal[username].' con nombre '.$usersmodal[realname].'.
                </small>
            </div>
            
            <div class="modal-body">
            
               <h3>Esta seguro que desea eliminar al usuario '.$usersmodal[username].' con nombre '.$usersmodal[realname].'. </h3>
                              
                
            </div>
            
            <div class="modal-footer">
                
            <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                
            <input type="hidden" name="id_user" value="'.$usersmodal[id_user].'">
            <input type="hidden" name="username" value="'.$usersmodal[username].'">
            <input type="hidden" name="realname" value="'.$usersmodal[realname].'">
            <input type="submit" name="deleteUser" class="btn btn-danger" value="Eliminar">
            </div>
            
        </div>
    </div>
</form>
</div>
      
      ';
      
      
  }


?>