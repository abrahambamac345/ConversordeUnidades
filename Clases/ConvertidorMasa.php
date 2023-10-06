<?php
require_once 'UnitConverterInterface.php';
// Clase para conversiones de masa
class ConvertidorMasa extends ConvertidorUnidades {
    protected $tasasConversion = [
        'Gramo' => [
            'Gramo' => 1,
            'Kilogramo' => 0.001,
            'Libra' => 0.00220462,
        ],
        'Kilogramo' => [
            'Gramo' => 1000,
            'Kilogramo' => 1,
            'Libra' => 2.20462,
        ],
        'Libra' => [
            'Gramo' => 453.592,
            'Kilogramo' => 0.453592,
            'Libra' => 1,
        ],
    ];
}
?>