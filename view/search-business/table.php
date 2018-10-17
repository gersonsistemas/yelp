<?php 


$busca="SELECT * FROM `business` WHERE id_cities = '$_POST[id_city]'";
$execute=$connect-> query($busca);

              
 foreach($execute as $valores){
      
        echo'
<tr>
    <td>'.$valores[id].'</td>
    <td>'.$valores[name].'</td>
    <td>'.$valores[phone].'</td>
    <td>'.$valores[address].' '.$valores[address_city].' '.$valores[address_zip].'</td>
    <td>'.$valores[rating].'</td>
    <td>'.$valores[is_claimed].'</td>
    <td>
        <div class="pull-right hidden-phone">
   
           <form style="display:inline-block;" action="search-reviews" method="POST" target="_top" title="Reviews">

                <input type="hidden" name="info_business" value="'.$valores[name].' '.$valores[latitude].' '.$valores[longitude].'">
                
                <input type="hidden" name="id_business" value="'.$valores[id].'">

                <input type="hidden" name="id_api" value="'.$valores[id_api].'"> 

                <button name="button" value="value" type="submit" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></button>

             </form> 
        </div>
    </td>
</tr>';
  }
?>