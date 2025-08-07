<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia 4</title>
</head>
<body>
    <?php
        $temperaturaSemana = array(
            "TemperaturaLunes"=>"20",
            "TemperaturaMartes"=>"10",
            "TemperaturaMiercoles"=>"30",
            "TemperaturaJueves"=>"20",
            "TemperaturaViernes"=>"10",
            "TemperaturaSabado"=>"50",
            "TemperaturaDomingo"=>"40"
        );
    ?>
    <h1>Temperatura Semana</h1>
    <table style="border: 1px solid black; border-collapse: collapse; background-color: aliceblue ;">
            <tr style="border: 1px solid black;border-collapse: collapse;">
                <th>Temperatura</th>
                <th>Grados</th>
            </tr>

            <?php
            $contador =0;
                foreach ($temperaturaSemana as $dia => $grados) {
                   echo "<tr>";
                   echo "<td> $dia</td>";
                   echo "<td>$grados</td>";
                    echo "</tr>";
                   $contador+=$grados;
                   
                }
            $promedioGrados=$contador/7;
            ?>
   
    </table>
    <h2>Temperatura Promedio</h2>
    <?php
      echo "la temperatura promedio de la semana es: ".$promedioGrados;
    ?>
    <h2>Temperatura Máxima</h2>
    <?php
        $gradoMaximo=0;
        $diaMaximo="";
        foreach ($temperaturaSemana as $dias => $grado) {
            
            if ($grado > $gradoMaximo){
                   $gradoMaximo=$grado;
                   $diaMaximo = $dias;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
            }
        }
         echo "el dia que tuvo la temperatura más alta fue: " .$diaMaximo;
    ?>

    <h2>Lista de temperaturas de mayor a menor</h2>
    <table style="border: 1px solid black; border-collapse: collapse; background-color: aliceblue; ">
        <tr style="border: 1px solid black;border-collapse: collapse;">
            <th>Dia de la semana</th>
            <th>Grados descendentes</th>
        </tr>

        <?php
        arsort($temperaturaSemana);
        foreach ($temperaturaSemana as $diaOl => $gradoOl) {
            echo "<tr >";
                echo "<td>$diaOl</td>";
                echo "<td>$gradoOl</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>