<?php

$url_sitio='https://labgracesocorro.com.ve/webapp/reporte';

$template_header='
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Correo enviado desde labgracesocorro.com.ve</title>
    <style type="text/css">
    /* -------------------------------------
    GLOBAL
    A very basic CSS reset
------------------------------------- */
* {
    margin: 0;
    padding: 0;
    font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
    box-sizing: border-box;
    font-size: 14px;
}

img {
    max-width: 100%;
}

body {
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: none;
    width: 100% !important;
    height: 100%;
    line-height: 1.6;
}

/* Lets make sure all tables have defaults */
table td {
    vertical-align: top;
}

/* -------------------------------------
    BODY & CONTAINER
------------------------------------- */
body {
    background-color: #f6f6f6;
}

.body-wrap {
    background-color: #f6f6f6;
    width: 100%;
}

.container {
    display: block !important;
    max-width: 600px !important;
    margin: 0 auto !important;
    /* makes it centered */
    clear: both !important;
}

.content {
    max-width: 600px;
    margin: 0 auto;
    display: block;
    padding: 20px;
}

/* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */
.main {
    background: #fff;
    border: 1px solid #e9e9e9;
    border-radius: 3px;
}

.content-wrap {
    padding: 20px;
}

.content-block {
    padding: 0 0 20px;
}

.header {
    width: 100%;
    margin-bottom: 20px;
}

.footer {
    width: 100%;
    clear: both;
    color: #999;
    padding: 20px;
}
.footer a {
    color: #999;
}
.footer p, .footer a, .footer unsubscribe, .footer td {
    font-size: 12px;
}

/* -------------------------------------
    TYPOGRAPHY
------------------------------------- */
h1, h2, h3 {
    font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    color: #000;
    margin: 40px 0 0;
    line-height: 1.2;
    font-weight: 400;
}

h1 {
    font-size: 32px;
    font-weight: 500;
}

h2 {
    font-size: 24px;
}

h3 {
    font-size: 18px;
}

h4 {
    font-size: 14px;
    font-weight: 600;
}

p, ul, ol {
    margin-bottom: 10px;
    font-weight: normal;
}
p li, ul li, ol li {
    margin-left: 5px;
    list-style-position: inside;
}

/* -------------------------------------
    LINKS & BUTTONS
------------------------------------- */
a {
    color: #1ab394;
    text-decoration: underline;
}

.btn-primary {
    text-decoration: none;
    color: #FFF;
    background-color: #1ab394;
    border: solid #1ab394;
    border-width: 5px 10px;
    line-height: 2;
    font-weight: bold;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    border-radius: 5px;
    text-transform: capitalize;
}

/* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */
.last {
    margin-bottom: 0;
}

.first {
    margin-top: 0;
}

.aligncenter {
    text-align: center;
}

.alignright {
    text-align: right;
}

.alignleft {
    text-align: left;
}

.clear {
    clear: both;
}

/* -------------------------------------
    ALERTS
    Change the class depending on warning email, good email or bad email
------------------------------------- */
.alert {
    font-size: 16px;
    color: #fff;
    font-weight: 500;
    padding: 20px;
    text-align: center;
    border-radius: 3px 3px 0 0;
}
.alert a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    font-size: 16px;
}
.alert.alert-warning {
    background: #f8ac59;
}
.alert.alert-bad {
    background: #ed5565;
}
.alert.alert-good {
    background: #1ab394;
}

/* -------------------------------------
    INVOICE
    Styles for the billing table
------------------------------------- */
.invoice {
    margin: 40px auto;
    text-align: left;
    width: 80%;
}
.invoice td {
    padding: 5px 0;
}
.invoice .invoice-items {
    width: 100%;
}
.invoice .invoice-items td {
    border-top: #eee 1px solid;
}
.invoice .invoice-items .total td {
    border-top: 2px solid #333;
    border-bottom: 2px solid #333;
    font-weight: 700;
}

/* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */
@media only screen and (max-width: 640px) {
    h1, h2, h3, h4 {
        font-weight: 600 !important;
        margin: 20px 0 5px !important;
    }

    h1 {
        font-size: 22px !important;
    }

    h2 {
        font-size: 18px !important;
    }

    h3 {
        font-size: 16px !important;
    }

    .container {
        width: 100% !important;
    }

    .content, .content-wrap {
        padding: 10px !important;
    }

    .invoice {
        width: 100% !important;
    }
}

    
    
    </style>
    
</head>

<body>

<table class="body-wrap">
    <tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">


';

if($_POST['email_welcome']){
     
$nombres = $_POST['nombres'];
$email = $_POST['email'];    

$template_send='
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="alert alert-good">
                            Lab. Anatomía Patológica Dra. Grace Socorro de Sain
                        </td>
                    </tr>
                    <tr>
                        <td class="content-wrap">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="content-block">
                                        Bienvenido, <strong>'.$nombres.'.</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                    Se ha realizado el registro de sus datos en nuestro sistema para la gestión de pacientes e informes.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
							         Usted estara recibiendo correos con información acerca de los examenes que se realizara en nuestro laboratorio, para mas detalle le invitamos a visitar nuestro sitio web.
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="content-block">
                                        <a href="https://labgracesocorro.com.ve" target="_blank" class="btn-primary">Ir al sitio web</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        Recuerde acceder desde un computador, los smartphones pueden limitar el acceso.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>


';

}

if($_POST['email_citologia']){
     
$nombres = $_POST['nombres'];
$email = $_POST['email'];    
$id_citologia = $_POST['id_citologia'];
$correlativo_citologia = $_POST['correlativo_citologia'];
$firma_digital = $_POST['firma_digital'];
$paper = $_POST['paper'];
$header = $_POST['header'];
$title = $_POST['title'];
$logo1 = $_POST['logo1'];
$logo2 = $_POST['logo2'];

$template_send='
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="alert alert-good">
                            Lab. Anatomía Patológica Dra. Grace Socorro de Sain
                        </td>
                    </tr>
                    <tr>
                        <td class="content-wrap">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="content-block">
                                        Hola, <strong>'.$nombres.'.</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                    Trabajamos para brindarle una mejor atención, por ello le damos acceso a nuestra plataforma web.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
							         No es necesario un registro, usted podrá ver y descargar su citologia ingresando al siguiente link:
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="content-block">
                                        <form role="form" action="'.$url_sitio.'" method="post" target="_blank">
                            

                                            
                                            <input type="hidden" name="id_citologia" value="'.$id_citologia.'">
                                            
                                            <input type="hidden" name="firma_digital" value="'.$firma_digital.'">
                                            
                                            <input type="hidden" name="logo1" value="'.$logo1.'">
                                            
                                            <input type="hidden" name="logo2" value="'.$logo2.'">
                            
                                            <input type="hidden" name="paper" value="'.$paper.'">
                                            
                                            <input type="hidden" name="header" value="'.$header.'">
                                            
                                            <input type="hidden" name="title" value="'.$title.'">
                            
                                            <input type="submit" name="pdf_citologia" class="btn btn-primary" value="Acceder">
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        Recuerde acceder desde un computador, los smartphones pueden limitar el acceso.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>


';

}

if($_POST['email_biopsia']){
     
$nombres = $_POST['nombres'];
$email = $_POST['email'];    
$id_biopsia = $_POST['id_biopsia'];
$correlativo_biopsia = $_POST['correlativo_biopsia'];
$firma_digital = $_POST['firma_digital'];
$hallazgomacro = $_POST['hallazgomacro'];
$hallazgomicro = $_POST['hallazgomicro'];
$paper = $_POST['paper'];
$orientation = $_POST['orientation'];
$header = $_POST['header'];
$title = $_POST['title'];
$logo1 = $_POST['logo1'];
$logo2 = $_POST['logo2'];
    
$template_send='
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="alert alert-good">
                            Lab. Anatomía Patológica Dra. Grace Socorro de Sain
                        </td>
                    </tr>
                    <tr>
                        <td class="content-wrap">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="content-block">
                                        Hola, <strong>'.$nombres.'.</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                    Trabajamos para brindarle una mejor atención, por ello le damos acceso a nuestra plataforma web.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
							         No es necesario un registro, usted podrá ver y descargar su biopsia ingresando al siguiente link:
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="content-block">
                                        <form role="form" action="http://localhost/www/labgracesocorro/webapp/reporte" method="post" target="_blank">
                            

                                            
                                            <input type="hidden" name="id_biopsia" value="'.$id_biopsia.'">
                                            
                                            <input type="hidden" name="firma_digital" value="'.$firma_digital.'">
                                            
                                            <input type="hidden" name="hallazgomacro" value="'.$hallazgomacro.'">
                                            
                                            <input type="hidden" name="hallazgomicro" value="'.$hallazgomicro.'">
                                            
                                            <input type="hidden" name="logo1" value="'.$logo1.'">
                                            
                                            <input type="hidden" name="logo2" value="'.$logo2.'">
                            
                                            <input type="hidden" name="paper" value="'.$paper.'">
                                            
                                            <input type="hidden" name="header" value="'.$header.'">
                                            
                                            <input type="hidden" name="title" value="'.$title.'">
                            
                                            <input type="submit" name="pdf_biopsia" class="btn btn-primary" value="Acceder">
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        Recuerde acceder desde un computador, los smartphones pueden limitar el acceso.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>


';

}

$template_footer='
                <div class="footer">
                    <table width="100%">
                        <tr>
                            <td class="aligncenter content-block"> Telefono/Email:  0281-2867778 / info@labgracesocorro.com.ve</td>
                            
                        </tr>
                        <tr>
                            <td class="aligncenter content-block">
                                <a href="https://labgracesocorro.com.ve/terminos-y-condiciones/" target="_blank">Términos y condiciones</a> 
                                <a href="https://labgracesocorro.com.ve/politicas-de-privacidad/" target="_blank">Políticas del sitio</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </td>
        <td></td>
    </tr>
</table>

</body>
</html>
';

/*
echo'
'.$template_header.'
'.$template_send.'
'.$template_footer.'
';  
*/
?>