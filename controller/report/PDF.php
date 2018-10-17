<?php
require_once 'assets/dompdf/autoload.inc.php';
require_once 'assets/dompdf/lib/html5lib/Parser.php';
require_once 'assets/dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'assets/dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'assets/dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();

require_once 'core/controller/report/templates.php';

$codigoHTML=$header_template;
$codigoHTML.=$content_template;
$codigoHTML.=$footer_template;

// reference the Dompdf namespace
use Dompdf\Dompdf;

$paper = $_POST['paper'];
$orientation = $_POST['orientation'];

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($codigoHTML);

// (Optional) Setup the paper size and orientation
$dompdf->set_paper($paper, $orientation);

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("reporte.pdf", array("Attachment" => false));
?>