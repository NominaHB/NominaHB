<?php

require_once __DIR__ .'/vendor/autoload.php'

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('desprendible.php')
$mpdf->Output();
?>