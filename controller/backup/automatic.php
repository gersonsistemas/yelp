<?php
function backup_mysql_database($options){
$mtables = array(); $contents = "-- Database: `".$options['db_to_select']."` --\n";

$connect = new mysqli($options['db_host'], $options['db_uname'], $options['db_password'], $options['db_to_select']);

$results = $connect->query("SHOW TABLES");

while($row = $results->fetch_array()){
    if (!in_array($row[0], $options['db_exclude_tables'])){
        $mtables[] = $row[0];
    }
}

foreach($mtables as $table){
    $contents .= "-- Table `".$table."` --\n";

    $results = $connect->query("SHOW CREATE TABLE ".$table);
    while($row = $results->fetch_array()){
        $contents .= $row[1].";\n\n";
    }

    $results = $connect->query("SELECT * FROM ".$table);
    $row_count = $results->num_rows;
    $fields = $results->fetch_fields();
    $fields_count = count($fields);

    $insert_head = "INSERT INTO `".$table."` (";
    for($i=0; $i < $fields_count; $i++){
        $insert_head  .= "`".$fields[$i]->name."`";
            if($i < $fields_count-1){
                    $insert_head  .= ', ';
                }
    }
    $insert_head .=  ")";
    $insert_head .= " VALUES\n";        

    if($row_count>0){
        $r = 0;
        while($row = $results->fetch_array()){
            if(($r % 400)  == 0){
                $contents .= $insert_head;
            }
            $contents .= "(";
            for($i=0; $i < $fields_count; $i++){
                $row_content =  str_replace("\n","\\n",$connect->real_escape_string($row[$i]));

                switch($fields[$i]->type){
                    case 8: case 3:
                        $contents .=  $row_content;
                        break;
                    default:
                        $contents .= "'". $row_content ."'";
                }
                if($i < $fields_count-1){
                        $contents  .= ', ';
                    }
            }
            if(($r+1) == $row_count || ($r % 400) == 399){
                $contents .= ");\n\n";
            }else{
                $contents .= "),\n";
            }
            $r++;
        }
    }
}

if (!is_dir ( $options['db_backup_path'] )) {
        mkdir ( $options['db_backup_path'], 0777, true );
 }

$backup_file_name = $options['db_to_select'] . " sql-backup- " . date( "d-m-Y--h-i-s").".sql";

$fp = fopen($backup_file_name ,'w+');
if (($result = fwrite($fp, $contents))) {
    
    echo '     <div class="alert alert-success alert-dismissible mensaje-bottom-success animated bounceIn">
                    <div class="animated bounceIn">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Backup Automático</h4>
                        Realizado el backup automático de la base de datos del sistema, ha sido creado un archivo .sql en la raiz del directorio. Para eliminar esta opción vaya a autoload.php linea 65.
                    </div>
                </div>'; 
}
fclose($fp);
return $backup_file_name;
}


$backup_file_name=backup_mysql_database($options);

?>