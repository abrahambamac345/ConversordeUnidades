<?php
require_once 'UnitConverterInterface.php';
// Clase para conversiones de tiempo
class ConvertidorTiempo extends ConvertidorUnidades {
    protected $tasasConversion = [
        'Segundo' => [
            'Segundo' => 1,
            'Minuto' => 0.0166667,
            'Hora' => 0.000277778,
        ],
        'Minuto' => [
            'Segundo' => 60,
            'Minuto' => 1,
            'Hora' => 0.0166667,
        ],
        'Hora' => [
            'Segundo' => 3600,
            'Minuto' => 60,
            'Hora' => 1,
        ],
    ];
}

?>