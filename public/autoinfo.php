<?php
ini_set('display_errors', 'Off');

$rutastyles="";

if($_GET['ruta'] == 'forbidden') {
    include('../view/pages/forbidden.php');
}

if($_GET['ruta'] == 'errordb') {
    include('../view/pages/errordb.php');
}

if($_GET['ruta'] == 'nosession') {
    include('../view/pages/nosession.php');
}

?>