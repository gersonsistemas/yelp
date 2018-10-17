<?php 


$busca="SELECT * FROM `reviews` WHERE id_business = '$_POST[id_business]'";
$execute=$connect-> query($busca);

              
 foreach($execute as $valores){
      
        echo'
<tr>
    <td>'.$valores[id].'</td>
    <td>'.$valores[username].'</td>
    <td>'.$valores[rating].'</td>
    <td>'.$valores[time_created].'</td>
    <td>
    <div class="pull-right hidden-phone">
        <a href="#view'.$valores[id].'" title="View detail" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
        
    </div>
    </td>
    
</tr>';
  }
?>