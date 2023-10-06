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
?>