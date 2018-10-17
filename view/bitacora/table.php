<?php 

$fecha_inicio=$_POST['fecha_inicio'];
$fecha_fin=$_POST['fecha_fin'];

if($fecha_fin < $fecha_inicio){
       
    $warning[] = "La fecha Desde es mayor, la consulta no se realizo";
}


if($_POST['consultarFechas']){
$busca="SELECT * FROM `bitacora` WHERE `fecha_registro` >= '$fecha_inicio' AND `fecha_registro` <= '$fecha_fin'";
$execute=$connect-> query($busca);

}

if($_POST['consultarNombres']){

$nombres=$_POST['nombres'];
    
$busca="SELECT * FROM `bitacora` WHERE `username` LIKE '%$nombres%'";
$execute=$connect-> query($busca);

}
              
 foreach($execute as $valores){
      
      echo'
<tr class="gradeU">
                        <td class="text-table-gamp">'.$valores[id_bitacora].'</td>
                        <td class="center text-table-gamp">'.$valores[historial].'</td>
                        <td class="center text-table-gamp">'.$valores[fecha].'</td>
                        <td class="center text-table-gamp">'.$valores[username].'</td>
            
</tr>   
      
      ';
  }
?>