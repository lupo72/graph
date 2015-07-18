<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
/**
 * Created by PhpStorm.
 * User: lupo
 * Date: 18.07.15
 * Time: 13:32
 */
include_once 'html2pdf-master/html2pdf.class.php';
// get the HTML
ob_start();
include(dirname(__FILE__).'/create-graph-content.php');
$content = ob_get_clean();
try
{
    $html2pdf = new HTML2PDF('P', 'A4', 'fr');
//      $html2pdf->setModeDebug();
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output('demo1.pdf');
}
catch(HTML2PDF_exception $e) {
    echo $e;
    exit;
}
