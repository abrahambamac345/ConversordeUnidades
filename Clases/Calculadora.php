<?php

// Interfaz para unidades de medida
interface UnitConverterInterface {
    public function convertir($valor, $de, $a);
}

// Clase base para unidades de medida
abstract class ConvertidorUnidades implements UnitConverterInterface {
    protected $tasasConversion = [];

    public function convertir($valor, $de, $a) {
        if (isset($this->tasasConversion[$de][$a])) {
            return $valor * $this->tasasConversion[$de][$a];
        } else {
            throw new Exception("No se puede realizar la conversión de $de a $a");
        }
    }
}

// Clase para conversiones de longitud
class ConvertidorLongitud extends ConvertidorUnidades {
    protected $tasasConversion = [
        'metro' => [
            'metro' => 1,
            'pulgada' => 39.3701,
            'pie' => 3.28084,
        ],
        'pulgada' => [
            'metro' => 0.0254,
            'pulgada' => 1,
            'pie' => 0.0833333,
        ],
        'pie' => [
            'metro' => 0.3048,
            'pulgada' => 12,
            'pie' => 1,
        ],
    ];
}

// Clase para conversiones de masa
class ConvertidorMasa extends ConvertidorUnidades {
    protected $tasasConversion = [
        'gramo' => [
            'gramo' => 1,
            'kilogramo' => 0.001,
            'libra' => 0.00220462,
        ],
        'kilogramo' => [
            'gramo' => 1000,
            'kilogramo' => 1,
            'libra' => 2.20462,
        ],
        'libra' => [
            'gramo' => 453.592,
            'kilogramo' => 0.453592,
            'libra' => 1,
        ],
    ];
}

// Clase para conversiones de volumen
class ConvertidorVolumen extends ConvertidorUnidades {
    protected $tasasConversion = [
        'litro' => [
            'litro' => 1,
            'mililitro' => 1000,
            'galon' => 0.264172,
        ],
        'mililitro' => [
            'litro' => 0.001,
            'mililitro' => 1,
            'galon' => 0.000264172,
        ],
        'galon' => [
            'litro' => 3.78541,
            'mililitro' => 3785.41,
            'galon' => 1,
        ],
    ];
}

// Clase para conversiones de datos
class ConvertidorDatos extends ConvertidorUnidades {
    protected $tasasConversion = [
        'byte' => [
            'byte' => 1,
            'kilobyte' => 0.000976563,
            'megabyte' => 9.53674e-7,
        ],
        'kilobyte' => [
            'byte' => 1024,
            'kilobyte' => 1,
            'megabyte' => 0.000976563,
        ],
        'megabyte' => [
            'byte' => 1048576,
            'kilobyte' => 1024,
            'megabyte' => 1,
        ],
    ];
}

// Clase para conversiones de moneda
class ConvertidorMoneda extends ConvertidorUnidades {
    protected $tasasConversion = [
        'dolar' => [
            'dolar' => 1,
            'euro' => 0.85,
            'peso' => 20.0,
        ],
        'euro' => [
            'dolar' => 1.18,
            'euro' => 1,
            'peso' => 23.53,
        ],
        'peso' => [
            'dolar' => 0.05,
            'euro' => 0.0425,
            'peso' => 1,
        ],
    ];
}

// Clase para conversiones de tiempo
class ConvertidorTiempo extends ConvertidorUnidades {
    protected $tasasConversion = [
        'segundo' => [
            'segundo' => 1,
            'minuto' => 0.0166667,
            'hora' => 0.000277778,
        ],
        'minuto' => [
            'segundo' => 60,
            'minuto' => 1,
            'hora' => 0.0166667,
        ],
        'hora' => [
            'segundo' => 3600,
            'minuto' => 60,
            'hora' => 1,
        ],
    ];
}

?>
