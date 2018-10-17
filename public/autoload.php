<?php
ini_set('display_errors', 'Off');
include('../model/db.php');
include('../model/core.php');

$rutastyles="";

if($_GET['ruta'] == 'login') {
    include('../controller/login/login.php');
    include('../view/pages/login.php');
}

if($_GET['ruta'] == 'logout') {
    include('../model/session.php');
    include('../controller/login/logout.php');
}

if($_GET['ruta'] == 'home') {
    
    $act_home="active";
    include('../model/session.php');
    include('../view/layouts/header.php');
    include('../model/messajes.php');
    include('../view/home/home.php');
    include('../view/layouts/footer.php');
}

if($_GET['ruta'] == 'profile') {
    $act_profile="active"; $act_system="active";
    include('../controller/profile/profile.php');
    include('../model/session.php');
    include('../view/layouts/header.php');
    include('../model/messajes.php');
    include('../view/profile/profile.php');
    include('../view/layouts/footer.php');
}

if($_GET['ruta'] == 'users') {
    $act_users="active"; $act_system="active";
    include('../model/session.php');
    if($permission!="Administrador"){header('Location:forbidden');}
    include('../controller/app/scriptdb.php');
    include('../view/layouts/header.php');
    include('../model/messajes.php');
    include('../view/users/users.php');
    include('../view/users/modal.php');
    include('../view/layouts/footer.php');
}

if($_GET['ruta'] == 'company') {
    $act_company="active"; $act_system="active";
	include('../controller/company/company.php');
    include('../model/session.php');
    if($permission!="Administrador"){header('Location:forbidden');}
    include('../view/layouts/header.php');
    include('../model/messajes.php');
    include('../view/company/company.php');
    include('../view/layouts/footer.php'); 
}

if($_GET['ruta'] == 'backup') {
    $act_backup="active"; $act_system="active";
    include('../model/session.php');
    if($permission!="Administrador"){header('Location:forbidden');}
    include('../view/layouts/header.php');
    #include('../controller/backup/automatic.php');
    include('../model/messajes.php');
    include('../view/backup/backup.php');
    include('../view/layouts/footer.php'); 
}

if($_GET['ruta'] == 'execute-backup') {
    include('../model/session.php');
    if($permission!="Administrador"){header('Location:forbidden');}
    include('../controller/backup/manual.php');
}

if($_GET['ruta'] == 'gallery'){
    $act_gallery="active"; $act_system="active";
    include('../model/session.php');
    if($permission!="Administrador"){header('Location:forbidden');}
    include('../view/layouts/header.php');
    include('../controller/gallery/file.php');
    include('../model/messajes.php');
    include('../view/gallery/gallery.php');
    include('../view/layouts/footer.php');
}

if($_GET['ruta'] == 'phpmailer') {
    $act_phpmailer="active"; $act_system="active";
	include('../controller/phpmailer/phpmailer.php');
    include('../model/session.php');
    if($permission!="Administrador"){header('Location:forbidden');}
    include('../view/layouts/header.php');
    include('../model/messajes.php');
    include('../view/phpmailer/phpmailer.php');
    include('../view/layouts/footer.php'); 
}

if($_GET['ruta'] == 'bitacora') {
    $act_bitacora="active"; $act_system="active";
    include('../model/session.php');
    if($permission!="Administrador"){header('Location:forbidden');}
    include('../view/layouts/header.php');
    include('../view/bitacora/bitacora.php');
    include('../view/bitacora/modal.php');
    include('../model/messajes.php');
    include('../view/layouts/footer.php'); 
}

if($_GET['ruta'] == 'cities') {
    $act_cities="active";
    include('../model/session.php');
    include('../view/layouts/header.php');
    include('../controller/app/scriptdb.php');
    include('../view/cities/cities.php');
    include('../view/cities/modal.php');
    include('../model/messajes.php');
    include('../view/layouts/footer.php'); 
}

if($_GET['ruta'] == 'business') {
    $act_business="active";
    include('../model/session.php');
    include('../view/layouts/header.php');
    include('../controller/app/scriptdb.php');
    include('../view/business/business.php');
    include('../view/business/modal.php');
    include('../model/messajes.php');
    include('../view/layouts/footer.php'); 
}

if($_GET['ruta'] == 'search-business') {
    $act_business="active";
    include('../model/session.php');
    include('../view/layouts/header.php');
    include('../controller/app/scriptdb.php');
    include('../api/yelp-api.php');
    include('../view/search-business/search-business.php');
    include('../view/search-business/modal.php');
    include('../model/messajes.php');
    include('../view/layouts/footer.php'); 
}

if($_GET['ruta'] == 'search-reviews') {
    $act_business="active";
    include('../model/session.php');
    include('../view/layouts/header.php');
    include('../api/yelp-api.php');
    include('../view/search-reviews/search-reviews.php');
    include('../view/search-reviews/modal.php');
    include('../model/messajes.php');
    include('../view/layouts/footer.php'); 
}

include('../model/bitacora.php');
?>