<?php 

$sql="SELECT * FROM users WHERE id_user != 1 AND id_user != 2";
$execute=$connect-> query($sql);
              
    foreach($execute as $users){
        
        echo'
<tr>
    <td>'.$users[username].'</td>
    <td>'.$users[realname].'</td>
    <td>'.$users[permission].'</td>
    <td>'.$users[db_insert].'</td>
    <td>'.$users[db_update].'</td>
    <td>'.$users[db_delete].'</td>
    <td>'.$users[status].'</td>
    <td>
    <div class="pull-right hidden-phone">
        <a href="#'.$users[username].'" title="Editar" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
        <a href="#pass'.$users[username].'" title="Reestablecer Contraseña" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-key"></i></a>
        <a href="#delete'.$users[username].'" title="Eliminar Usuario" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-times"></i></a>
    </div>
    </td>
    
</tr>';
    }
?>