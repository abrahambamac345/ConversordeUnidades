<?php
require_once './clases/ConvertidorLongitud.php';
require_once './clases/ConvertidorMasa.php';
require_once './clases/ConvertidorVolumen.php';
require_once './clases/ConvertidorDatos.php';
require_once './clases/ConvertidorMoneda.php';
require_once './clases/ConvertidorTiempo.php';
require_once './clases/UnitConverterInterface.php';

// Verifica si se ha enviado un formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valor = $_POST['valor'];
    $unidadDe = $_POST['de'];
    $unidadA = $_POST['a'];
    $tipoUnidad = $_POST['tipoUnidad'];

    // Inicializa la variable $convertidor
    $convertidor = null;

    //  dependiendo del tipo de unidad, crea el objeto correspondiente a convertir .
    switch ($tipoUnidad) {
        case 'Longitud':
            $convertidor = new ConvertidorLongitud();
            break;
        case 'Masa':
            $convertidor = new ConvertidorMasa();
            break;
        case 'Volumen':
            $convertidor = new ConvertidorVolumen();
            break;
        case 'Datos':
            $convertidor = new ConvertidorDatos();
            break;
        case 'Moneda':
            $convertidor = new ConvertidorMoneda();
            break;
        case 'Tiempo':
            $convertidor = new ConvertidorTiempo();
            break;
        default:
            break;
    }

    // Verifica si se ha creado un objeto $convertidor
    if ($convertidor) {
        // utiliza el objeto $convertidor para realizar la conversión.
        $resultado = $convertidor->convertir($valor, $unidadDe, $unidadA);

     // resultado se muestra en index.php para ser re direccionado 
        header("Location: index.php?resul=" . $resultado . "&uniDe=" . $unidadDe . "&uniA=" . $unidadA . "&val=" . $valor . "#resultado");
        exit;
    } else {
        echo "Tipo de unidad desconocido.";
    }
}
