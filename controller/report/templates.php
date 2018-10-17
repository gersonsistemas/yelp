<?php
$header = $_POST['header'];
$title = $_POST['title'];

if($_POST['paper'] == "letter"){
    
    $style='<link href="assets/css/PDF.css" rel="stylesheet">';
}

if($_POST['paper'] == "mletter"){
    
    $style='<link href="assets/css/PDFM.css" rel="stylesheet">';
}

if($_POST['logo1']){
    
    $logo1='<img src="assets/images-galeria/1.png">';
}

if($_POST['logo2']){
    
    $logo2='<img id="logo2" src="assets/images-galeria/2.png">';
}

$header_template='
<html>
    <head>
        <link href="assets/img/favicon.png" rel="shortcut icon" type="image/ico" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>'.$title.'</title>
        '.$style.'
    </head>
    <body>
        <div id="">
            '.$logo1.'
            '.$logo2.'
        </div>


';

if($_POST['pdf_citologia']){
$id_citologia = $_POST['id_citologia'];
$firma_digital = $_POST['firma_digital'];
    
$buscaCitologia="SELECT citologia.id_citologia, citologia.correlativo_citologia, citologia.edad, citologia.fecha_citologia, citologia.hallazgo, citologia.conclusion, citologia.observaciones, paciente.nombres, paciente.cedula, doctor.nombre_doctor, clinica.nombre_clinica, datacitologia.titulo FROM citologia INNER JOIN paciente ON citologia.id_paciente = paciente.id_paciente INNER JOIN doctor ON citologia.id_doctor = doctor.id_doctor INNER JOIN clinica ON citologia.id_clinica = clinica.id_clinica INNER JOIN datacitologia ON citologia.id_datacitologia = datacitologia.id_datacitologia WHERE id_citologia = '$id_citologia' AND firma_digital = '$firma_digital'";
$Result=$connect-> query($buscaCitologia);
$info_Citologia = $Result->fetch_assoc();
    
$content_template='
<div id="content">
    <div class="page" style="font-size: 8pt">

        <table style="width: 100%; font-size: 11pt;">
            <tr>
                <td>Paciente: <strong>'.$info_Citologia[nombres].'</strong></td>
                
                <td>Citologia: <strong>'.$info_Citologia[correlativo_citologia].'</strong></td>
            </tr>

            <tr>
                <td>Cedula: <strong>'.$info_Citologia[cedula].'</strong></td>
                
                <td>Fecha: <strong>'.$info_Citologia[fecha_citologia].'</strong></td>
            </tr>

            <tr>
                <td>Doctor: <strong>'.$info_Citologia[nombre_doctor].'</strong></td>
                
                <td>Edad: <strong>'.$info_Citologia[edad].'</strong></td>
            </tr>
        </table>

        <table style="width: 100%; border-top: 1px solid black; border-bottom: 0px solid black; font-size: 11pt;">

            <tr>
                <td>
                <center>
                ESTUDIO CITOLOGICO
                </center>
                </td>
            </tr>

        </table>
        
        <div id="parrafo">
        DESCRIPCIÓN MICROSCOPICA:<br>'.nl2br($info_Citologia[hallazgo]).'
        </div>
        
        
        
        <div id="parrafo">
        CONCLUSION DIAGNOSTICA:<br>'.nl2br($info_Citologia[conclusion]).'
        </div>
    </div>
</div>
';   
}

if($_POST['pdf_biopsia']){
$id_biopsia = $_POST['id_biopsia'];
$firma_digital = $_POST['firma_digital'];
$buscaBiopsia="SELECT biopsia.id_biopsia, biopsia.correlativo_biopsia, biopsia.edad, biopsia.fecha_biopsia, biopsia.hallazgomacro, biopsia.hallazgomicro, biopsia.material, biopsia.conclusion, biopsia.observaciones, paciente.nombres, paciente.cedula, doctor.nombre_doctor, clinica.nombre_clinica, databiopsia.titulo FROM biopsia INNER JOIN paciente ON biopsia.id_paciente = paciente.id_paciente INNER JOIN doctor ON biopsia.id_doctor = doctor.id_doctor INNER JOIN clinica ON biopsia.id_clinica = clinica.id_clinica INNER JOIN databiopsia ON biopsia.id_databiopsia = databiopsia.id_databiopsia WHERE id_biopsia = '$id_biopsia' AND firma_digital = '$firma_digital'";
$Result=$connect-> query($buscaBiopsia);
$info_Biopsia = $Result->fetch_assoc();
    
$namearchivo='Biopsia '.$info_Biopsia[correlativo_biopsia].' paciente '.$info_Biopsia[nombres].'';
    
if($_POST[hallazgomacro]){
    
    $hallazgomacro='
            <div id="parrafo">
        DESCRIPCION MACROSCOPICA:<br> '.nl2br($info_Biopsia[hallazgomacro]).'
        </div>
    ';
}
    
if($_POST[hallazgomicro]){
    
    $hallazgomicro='
            <div id="parrafo">
        DESCRIPCION MICROSCOPICA:<br> '.nl2br($info_Biopsia[hallazgomicro]).'
        </div>
    ';
}
    
$content_template='
<div id="content">
    <div class="page" style="font-size: 8pt">

        <table style="width: 100%; font-size: 11pt;">
            <tr>
                <td>Paciente: <strong>'.$info_Biopsia[nombres].'</strong></td>
                
                <td>Biopsia: <strong>'.$info_Biopsia[correlativo_biopsia].'</strong></td>
            </tr>

            <tr>
                <td>Cedula: <strong>'.$info_Biopsia[cedula].'</strong></td>
                
                <td>Fecha: <strong>'.$info_Biopsia[fecha_biopsia].'</strong></td>
            </tr>

            <tr>
                <td>Doctor: <strong>'.$info_Biopsia[nombre_doctor].'</strong></td>
                
                <td>Edad: <strong>'.$info_Biopsia[edad].'</strong></td>
            </tr>
        </table>

        <table style="width: 100%; border-top: 1px solid black; border-bottom: 0px solid black; font-size: 11pt;">

        </table>
        <div id="parrafo">
        MATERIAL REMITIDO: '.$info_Biopsia[material].'
        </div>
        
        '.$hallazgomacro.'
        '.$hallazgomicro.'
        
        <div id="parrafo">
        DIAGNOSTICO:<br> '.nl2br($info_Biopsia[conclusion]).'
        </div>
        
        
    </div>
</div>
';   
}

$footer_template='

        <div id="pre-footer">
                <img src="assets/images-galeria/firma.png">
        </div> 
        <div id="footer" style="font-size: 8pt;">
            <center>
                <div>Av. Lic. Diego Bautista Urbaneja, Edificio Ribadeo 1 piso 3, locales P3 2 y P3 3, sector Lecheria, Edo. Anzoátegui, ZP 6016.
                </div>
                <div>Telf. 0281  2867778, 0424 8571225, email: labgracesocorro@gmail.com.
                </div>
            </center>
        </div> 
    </body>
</html>
';
?>