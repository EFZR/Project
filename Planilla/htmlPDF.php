<?php
require_once  '../vendor/autoload.php';
include '../SqlTools/database.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf ->showImageErrors = true;
$db = new database();

$html = $_POST['rolex'];
$empresa = $_POST['empresa'];
$planilla = $_POST['planilla'];

$name = 'planilla' . $planilla . ' Empresa' . $empresa;
$url = 'C:/Planillas/planilla' . $planilla . ' Empresa' . $empresa . '.pdf';

$Object = new DateTime();
$Object->setTimezone(new DateTimeZone('America/El_Salvador'));
$DateAndTime = $Object->format("d-m-Y h:i:s a");
$concatenacion = '<h1 style="text-align:Right;">$DateAndTime</h1>';

if (!file_exists("C:\Planillas")) {
  mkdir('C:\Planillas', 0777, true);
}

if ($empresa == 1) {
  $stylesheet = file_get_contents('../css/estilo.css');

  $mpdf->SetHTMLHeader($DateAndTime);
  $mpdf->WriteHTML('<img src="../img/HeaderWonka.png" />');
  $mpdf->WriteHTML('<h1 style="text-align:center;">Planilla de Pagos</h1>');
  $mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);

  $mpdf->WriteHTML($html);
  $mpdf->SetHTMLFooter('<img src="../img/Footer.png" /> Pag. {PAGENO} de {nb}');


  $mpdf->Output('C:\Planillas\planilla' . $planilla . ' Empresa' . $empresa . '.pdf', 'F');

  $db->insert('registros', [
    'id_Planilla' => $planilla,
    'Nombre_Planilla' => $name,
    'url' => $url
  ]);
} else {
  $stylesheet = file_get_contents('../css/estilo.css');

  $mpdf->SetHTMLHeader($DateAndTime);
  $mpdf->WriteHTML('<img src="../img/HeaderCOD.png" />');
  $mpdf->WriteHTML('<h1 style="text-align:center;">Planilla de Pagos</h1>');
  $mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);

  $mpdf->WriteHTML($html);
  $mpdf->SetHTMLFooter('<img src="../img/Footer.png" /> Pag. {PAGENO} de {nb}');


  $mpdf->Output('C:\Planillas\planilla' . $planilla . ' Empresa' . $empresa . '.pdf', 'F');

  $db->insert('registros', [
    'id_Planilla' => $planilla,
    'Nombre_Planilla' => $name,
    'url' => $url
  ]);
}


if ($db == true) {
  echo 'insertado correcto';
}