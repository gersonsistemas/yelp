<?php
setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');

$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$fecha= $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ." ". date('h:i a');

$fecha_sin_hora=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y');

$a_fecha= date('d')."/".date('n'). "/".date('Y') ." ". date('h:i a');

$fecha_hoy= date('Y')."-".date('m'). "-".date('d');


$company = "SELECT * FROM `company` WHERE id_company = 1";
$query_company = $connect->query($company);
$info_company = $query_company->fetch_assoc();

?>