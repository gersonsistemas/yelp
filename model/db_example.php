<?php 	

$options = array(
    'db_host'=> '',  //mysql host
    'db_uname' => '',  //user
    'db_password' => '', //pass
    'db_to_select' => '', //database name
    'db_backup_path' => '/back', //where to backup
    'db_exclude_tables' => array() //tables to exclude
);

$connect = new mysqli($options['db_host'], $options['db_uname'], $options['db_password'], $options['db_to_select']);


if($connect->connect_error) {
    
    header('location: errordb');	
} else {
  // echo "Successfully connected";
}

?>