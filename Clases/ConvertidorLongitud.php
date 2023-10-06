<?php

require_once 'UnitConverterInterface.php';

// Clase para conversiones de longitud
class ConvertidorLongitud extends ConvertidorUnidades {
    protected $tasasConversion = [
        'Metro' => [
            'Metro' => 1,
            'Pulgada' => 39.3701,
            'Centímetro' => 100,
        ],
        'Pulgada' => [
            'Metro' => 0.0254,
            'Pulgada' => 1,
            'Centímetro' => 2.540,
        ],
        'Centímetro' => [
            'Metro' => 0.0100000054,
            'Pulgada' => 0.3937,
            'Centímetro' => 1,
        ],
    ];
}

?>