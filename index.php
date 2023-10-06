<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style.css">
  <title>Calculadora Unidades</title>
</head>

<body>
  <div class="imagen"><img src="./assets/img/KODIGO.png" alt="imagen ilustrativa a Kodigo"></div>
  <h1 class="titulo">Calculadora de Conversión de Unidades</h1>
  <div class="container">
    <form method="post" action="procesar.php">
      <select name="tipoUnidad" id="selectTipoUnidad" required onchange="cargarUnidades()" class="selectM">
        <option value="Longitud">Longitud</option>
        <option value="Masa">Masa</option>
        <option value="Volumen">Volumen</option>
        <option value="Datos">Datos</option>
        <option value="Moneda">Moneda</option>
        <option value="Tiempo">Tiempo</option>
      </select>
      <div class="formulario">
        <input type="number" min="1" name="valor" required class="value" autocomplete="off">
        <div class="formDatos">
          <div class="unidadesV">
            <label for="de">De</label>
            <select name="de" id="selectDe" required class="selectU"></select>
          </div>
          <div class="unidadesV">
            <label for="a">A</label>
            <select name="a" id="selectA" required class="selectU"></select>
          </div>
        </div>
      </div>
      <input type="submit" name="enviar" value="Convertir">
    </form>

    <?php
    if (isset($_GET['resul'])) {
      $resultado = $_GET['resul'];
      $uniDe = $_GET['uniDe'];
      $uniA = $_GET['uniA'];
      $val = $_GET['val'];
    ?>
      <div id="resultado" class="resultado">
        <h4>Resultado de la conversión:</h4>
        <?php echo $val . " " . $uniDe; ?> = <?php echo $resultado . " " . $uniA; ?>
      </div>
    <?php } ?>
    <br>
    <hr>
    <h1 class="usadas">Conversiones Más Usadas</h1>
    <div class="info">
      <!-- Tabla para Longitud -->
      <table id="tablaLongitud" style="display: none;" class="tablaS">
        <tr>
          <th>Valor</th>
          <th>De</th>
          <th>A</th>
          <th>Conversión </th>

        </tr>
        <tr>
          <td>1</td>
          <td>Metro</td>
          <td>Centímetro</td>
          <td>100</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Metro</td>
          <td>Centímetro</td>
          <td>500</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Metro</td>
          <td>Centímetro</td>
          <td>1000</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Metro</td>
          <td>Centímetro</td>
          <td>10000</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Metro</td>
          <td>Centímetro</td>
          <td>100000</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Metro</td>
          <td>Pulgada</td>
          <td>39.37</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Metro</td>
          <td>Pulgada</td>
          <td>196.85</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Metro</td>
          <td>Pulgada</td>
          <td>393.70</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Metro</td>
          <td>Pulgada</td>
          <td>3937.01</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Metro</td>
          <td>Pulgada</td>
          <td>39370.1 </td>
        </tr>
        <tr>
          <td>1 </td>
          <td>Pulgada</td>
          <td>Centímetro</td>
          <td>2.54</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Pulgada</td>
          <td>Centímetro</td>
          <td>12.7</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Pulgada</td>
          <td>Centímetro</td>
          <td>25.4</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Pulgada</td>
          <td>Centímetro</td>
          <td>254</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Pulgada</td>
          <td>Centímetro</td>
          <td>2540</td>
        </tr>
      </table>
      <!-- Tabla para magnitud de Masa -->
      <table id="tablaMasa" style="display: none;" class="tablaS">
        <tr>
          <th>Valor</th>
          <th>De</th>
          <th>A</th>
          <th>Conversión </th>

        </tr>
        <tr>
          <td>1</td>
          <td>Kilogramo</td>
          <td>Gramo</td>
          <td>1000</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Kilogramo</td>
          <td>Gramo</td>
          <td>5000</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Kilogramo</td>
          <td>Gramo</td>
          <td>10000</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Kilogramo</td>
          <td>Gramo</td>
          <td>100000</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Kilogramo</td>
          <td>Gramo</td>
          <td>1e+6</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Kilogramo</td>
          <td>Libra</td>
          <td>2.20</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Kilogramo</td>
          <td>Libra</td>
          <td>11.02</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Kilogramo</td>
          <td>Libra</td>
          <td>22.04</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Kilogramo</td>
          <td>Libra</td>
          <td>220.46</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Kilogramo</td>
          <td>Libra</td>
          <td>2204.62 </td>
        </tr>
        <tr>
          <td>1 </td>
          <td>Libra</td>
          <td>Gramo</td>
          <td>453.59</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Libra</td>
          <td>Gramo</td>
          <td>2267.96</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Libra</td>
          <td>Gramo</td>
          <td>4535.92</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Libra</td>
          <td>Gramo</td>
          <td>45359.2</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Libra</td>
          <td>Gramo</td>
          <td>453592</td>
        </tr>
      </table>
      <!-- Tabla para magnitud de Volumen -->
      <table id="tablaVolumen" style="display: none;" class="tablaS">
        <tr>
          <th>Valor</th>
          <th>De</th>
          <th>A</th>
          <th>Conversión </th>

        </tr>
        <tr>
          <td>1</td>
          <td>Litro</td>
          <td>Mililitro</td>
          <td>1000</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Litro</td>
          <td>Mililitro</td>
          <td>5000</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Litro</td>
          <td>Mililitro</td>
          <td>10000</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Litro</td>
          <td>Mililitro</td>
          <td>100000</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Litro</td>
          <td>Mililitro</td>
          <td>1e+6</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Litro</td>
          <td>Galon</td>
          <td>0.26</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Litro</td>
          <td>Galon</td>
          <td>1.32</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Litro</td>
          <td>Galon</td>
          <td>2.64</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Litro</td>
          <td>Galon</td>
          <td>26.41</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Litro</td>
          <td>Galon</td>
          <td>264.17 </td>
        </tr>
        <tr>
          <td>1 </td>
          <td>Galon</td>
          <td>Mililitro</td>
          <td>3785.41</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Galon</td>
          <td>Mililitro</td>
          <td>18927.1</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Galon</td>
          <td>Mililitro</td>
          <td>37854.1</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Galon</td>
          <td>Mililitro</td>
          <td>378541</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Galon</td>
          <td>Mililitro</td>
          <td>3.785e+6</td>
        </tr>
      </table>
      <!-- Tabla para magnitudes de Datos -->
      <table id="tablaDatos" style="display: none;" class="tablaS">
        <tr>
          <th>Valor</th>
          <th>De</th>
          <th>A</th>
          <th>Conversión </th>

        </tr>
        <tr>
          <td>1</td>
          <td>Byte</td>
          <td>Bit</td>
          <td>8</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Byte</td>
          <td>Bit</td>
          <td>40</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Byte</td>
          <td>Bit</td>
          <td>80</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Byte</td>
          <td>Bit</td>
          <td>800</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Byte</td>
          <td>Bit</td>
          <td>8000</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Byte</td>
          <td>Kilobyte</td>
          <td>0.001</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Byte</td>
          <td>Kilobyte</td>
          <td>0.005</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Byte</td>
          <td>Kilobyte</td>
          <td>0.01</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Byte</td>
          <td>Kilobyte</td>
          <td>0.1</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Byte</td>
          <td>Kilobyte</td>
          <td>1</td>
        </tr>
        <tr>
          <td>1 </td>
          <td>Kilobyte</td>
          <td>Bit</td>
          <td>8000</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Kilobyte</td>
          <td>Bit</td>
          <td>40000</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Kilobyte</td>
          <td>Bit</td>
          <td>80000</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Kilobyte</td>
          <td>Bit</td>
          <td>800000</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Kilobyte</td>
          <td>Bit</td>
          <td>8e+6</td>
        </tr>
      </table>
      <!-- Tabla para magnitud de Moneda -->
      <table id="tablaMoneda" style="display: none;" class="tablaS">
        <tr>
          <th>Valor</th>
          <th>De</th>
          <th>A</th>
          <th>Conversión </th>

        </tr>
        <tr>
          <td>1</td>
          <td>Dólar</td>
          <td>Euro</td>
          <td>0.96</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Dólar</td>
          <td>Euro</td>
          <td>4.78</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Dólar</td>
          <td>Euro</td>
          <td>9.55</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Dólar</td>
          <td>Euro</td>
          <td>95.50</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Dólar</td>
          <td>Euro</td>
          <td>955.05</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Dólar</td>
          <td>Yen</td>
          <td>149.02</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Dólar</td>
          <td>Yen</td>
          <td>745.31</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Dólar</td>
          <td>Yen</td>
          <td>1490.61</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Dólar</td>
          <td>Yen</td>
          <td>14906.10</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Dólar</td>
          <td>Yen</td>
          <td>149061</td>
        </tr>
        <tr>
          <td>1 </td>
          <td>Yen</td>
          <td>Euro</td>
          <td>0.0064</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Yen</td>
          <td>Euro</td>
          <td>0.032</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Yen</td>
          <td>Euro</td>
          <td>0.064</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Yen</td>
          <td>Euro</td>
          <td>0.64</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Yen</td>
          <td>Euro</td>
          <td>6.41</td>
        </tr>
      </table>
      <!-- Tabla para magnitud de Tiempo -->
      <table id="tablaTiempo" style="display: none;" class="tablaS">
        <tr>
          <th>Valor</th>
          <th>De</th>
          <th>A</th>
          <th>Conversión </th>

        </tr>
        <tr>
          <td>1</td>
          <td>Hora</td>
          <td>Minuto</td>
          <td>60</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Hora</td>
          <td>Minuto</td>
          <td>300</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Hora</td>
          <td>Minuto</td>
          <td>600</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Hora</td>
          <td>Minuto</td>
          <td>6000</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Hora</td>
          <td>Minuto</td>
          <td>60000</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Hora</td>
          <td>Segundo</td>
          <td>3600</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Hora</td>
          <td>Segundo</td>
          <td>18000</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Hora</td>
          <td>Segundo</td>
          <td>36000</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Hora</td>
          <td>Segundo</td>
          <td>360000</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Hora</td>
          <td>Segundo</td>
          <td>3.6e+6</td>
        </tr>
        <tr>
          <td>1 </td>
          <td>Segundo</td>
          <td>Minuto</td>
          <td>0.0166667</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Segundo</td>
          <td>Minuto</td>
          <td>0.0833333</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Segundo</td>
          <td>Minuto</td>
          <td>0.166667</td>
        </tr>
        <tr>
          <td>100</td>
          <td>Segundo</td>
          <td>Minuto</td>
          <td>1.66667</td>
        </tr>
        <tr>
          <td>1000</td>
          <td>Segundo</td>
          <td>Minuto</td>
          <td>16.6667</td>
        </tr>
      </table>

      <script>
        function cargarUnidades() {
          var selectTipoUnidad = document.getElementById("selectTipoUnidad");
          var selectDe = document.getElementById("selectDe");
          var selectA = document.getElementById("selectA");

          // Limpia los selectores antes de cargar nuevas opciones.
          selectDe.innerHTML = "";
          selectA.innerHTML = "";

          // Define las unidades de conversión según el tipo seleccionado.
          var unidades = {
            "Longitud": ["Metro", "Centímetro", "Pulgada"],
            "Masa": ["Kilogramo", "Gramo", "Libra"],
            "Volumen": ["Litro", "Mililitro", "Galon"],
            "Datos": ["Bit", "Byte", "Kilobyte"],
            "Moneda": ["Dólar", "Euro", "Yen"],
            "Tiempo": ["Segundo", "Minuto", "Hora"]
          };

          var tipoSeleccionado = selectTipoUnidad.value;

          // Oculta todas las tablas de conversiones
          var tablas = document.querySelectorAll(".info table");
          tablas.forEach(function(tabla) {
            tabla.style.display = "none";
          });

          // Muestra la tabla de conversiones correspondiente al tipo seleccionado
          var tablaCorrespondiente = document.getElementById("tabla" + tipoSeleccionado);
          tablaCorrespondiente.style.display = "block";

          // Llena el select 'De:' y 'A:'
          unidades[tipoSeleccionado].forEach(function(unidad) {
            var option = document.createElement("option");
            option.value = unidad;
            option.text = unidad;
            selectDe.appendChild(option);

            var optionA = document.createElement("option");
            optionA.value = unidad;
            optionA.text = unidad;
            selectA.appendChild(optionA);
          });
        }

        // Llama a la función una vez para inicializar el estado de los select y mostrar la tabla de Longitud.
        cargarUnidades();
      </script>
    </div>
</body>

</html>