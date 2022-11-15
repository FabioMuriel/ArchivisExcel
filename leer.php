<?php

require 'vendor/autoload.php';
require 'conexion.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

$Nombrearchivo = 'producto.xlsx';
$documento = IOFactory::load($Nombrearchivo);
$TotalHojas = $documento -> getSheetCount();

$HojaActual = $documento->getSheet(0);
$NumeroFilas = $HojaActual->getHighestDataRow();
$letra = $HojaActual->getHighestColumn();

$numero_letra = Coordinate::columnIndexFromString($letra);

for($indiceFila = 1; $indiceFila <= $NumeroFilas; $indiceFila++){
    for($indiceCol = 1; $indiceCol <= $numero_letra; $indiceCol++){
        $valor = $HojaActual->getCellByColumnAndRow($indiceCol, $indiceFila);
        echo $valor;
    }
    echo '<br/>';
}

?>