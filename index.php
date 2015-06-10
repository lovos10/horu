<?php
require 'vendor/autoload.php';

define('DOMPDF_ENABLE_AUTOLOAD', false); 

 require_once 'vendor/dompdf/dompdf/dompdf_config.inc.php'; 

 ob_start();
  include "includes/html.php";
   $html = ob_get_clean();

  $dompdf = new DOMPDF();
  $dompdf->load_html($html);
  $dompdf->render();
  $dompdf->stream("salida.pdf");
?> 