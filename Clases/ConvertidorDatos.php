<?php
require_once 'UnitConverterInterface.php';
// Clase para conversiones de datos
class ConvertidorDatos extends ConvertidorUnidades {
    protected $tasasConversion = [
        'Byte' => [
            'Byte' => 1,
            'Kilobyte' => 0.000976563,
            'Bit' => 8,
        ],
        'Kilobyte' => [
            'Byte' => 1024,
            'Kilobyte' => 1,
            'Bit' => 8000,
        ],
        'Bit' => [
            'Byte' => 0.125,
            'Kilobyte' => 0.000125,
            'Bit' => 1,
        ],
    ];
}

?>