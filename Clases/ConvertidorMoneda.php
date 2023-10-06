<?php
require_once 'UnitConverterInterface.php';
// Clase para conversiones de moneda
class ConvertidorMoneda extends ConvertidorUnidades {
    protected $tasasConversion = [
        'Dólar' => [
            'Dólar' => 1,
            'Euro' => 0.96,
            'Yen' => 149.02,
        ],
        'Euro' => [
            'Dólar' => 1.18,
            'Euro' => 1,
            'Yen' => 156.69,
        ],
        'Yen' => [
            'Dólar' => 0.0067,
            'Euro' => 0.0064,
            'Yen' => 1,
        ],
    ];
}

?>