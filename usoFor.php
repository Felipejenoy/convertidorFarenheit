<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso del for </title>
</head>
<body>
    //✅ Suma los elementos de un array de números usando un bucle for.

    <?php
        $numeroSumar= array(1,2,3,4,5);
        $resultadoSuma=0;

        for ($i=0; $i <count($numeroSumar) ; $i++) { 
            $resultadoSuma= $numeroSumar[$i]+$resultadoSuma ;
        }
        echo "$resultadoSuma" ."<br>";

    ?>
</body>
</html>