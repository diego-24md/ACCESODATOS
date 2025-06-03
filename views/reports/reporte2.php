<?php
//Este archivo funciona como un MOTOR DE RENDERIZADO
//Input (HTML) > procesar > PDF

require_once '../../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {

    ob_start();
    include_once '../../public/CSS/estilos-reporte.html';
    include_once '../contents/content-reporte2.php';
    $content = ob_get_clean();

    //El ultimo valor son los margenes
    $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', array(15, 5, 15, 5));
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->output('DiegoVP.pdf');

} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}