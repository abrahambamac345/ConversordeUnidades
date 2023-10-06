<?php
require_once 'UnitConverterInterface.php';

// Clase para conversiones de volumen
class ConvertidorVolumen extends ConvertidorUnidades {
    protected $tasasConversion = [
        'Litro' => [
            'Litro' => 1,
            'Mililitro' => 1000,
            'Galon' => 0.264172,
        ],
        'Mililitro' => [
            'Litro' => 0.001,
            'Mililitro' => 1,
            'Galon' => 0.000264172,
        ],
        'Galon' => [
            'Litro' => 3.78541,
            'Mililitro' => 3785.41,
            'Galon' => 1,
        ],
    ];
}

?>