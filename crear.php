<?php
require "vendor/autoload.php";
  
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
  
$spreadsheet = new Spreadsheet();
$Excel_writer = new Xlsx($spreadsheet);
  
$spreadsheet->setActiveSheetIndex(0);
$activeSheet = $spreadsheet->getActiveSheet();
  
$activeSheet->setCellValue('A1', 'Nombres');

$filename = 'Usuarios.xlsx';
  
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename='. $filename);
header('Cache-Control: max-age=0');

$Excel_writer->save('php://output');
?>