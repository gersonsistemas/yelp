<?php 


$busca="SELECT * FROM `cities`";
$execute=$connect-> query($busca);

              
 foreach($execute as $valores){
      
        echo'
<tr>
    <td>'.$valores[id].'</td>
    <td>'.$valores[name].'</td>
    <td>'.$valores[country].'</td>
    <td>'.$valores[zip_code].'</td>
    <td>'.$valores[latitude].'</td>
    <td>'.$valores[longitude].'</td>
    <td>
    <div class="pull-right hidden-phone">

        <form style="display:inline-block;" action="search-business" method="POST" target="_top" title="View Business">

        <input type="hidden" name="info_city" value="'.$valores[name].' '.$valores[country].' '.$valores[zip_code].'">

        <input type="hidden" name="latitude" value="'.$valores[latitude].'">

        <input type="hidden" name="longitude" value="'.$valores[longitude].'">
                
        <button name="id_city" value="'.$valores[id].'" type="submit" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></button>
            
    </form> 

        <a href="#edit'.$valores[id].'" title="Edit" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
        
        <a href="#delete'.$valores[id].'" title="Delete" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-times"></i></a>
    </div>
    </td>
    
</tr>';
  }
?>