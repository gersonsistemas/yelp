<?php 
    if($bitacora) {
        foreach ($bitacora as $key => $historial) {
            
        $sql_bitacora="INSERT INTO `bitacora` (`id_bitacora`, `historial`, `fecha`, `username`, `fecha_registro`) VALUES (NULL, '$historial', '$fecha', '$info_user[realname]', '$fecha_hoy');";
        $connect->query($sql_bitacora);
									
        }
    } 
?>