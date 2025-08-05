<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi calculadora con php </title>
</head>
<body style="background-color: burlywood;">
    <h2 style="position:sticky;">
        <?php
        $a = 12;
        $b = 4;

        function suma(){
            global $a,$b;
            $resultado= $a+$b;
           echo "El resultado de la suma es:" . $resultado;
        }
        function resta(){
            global $a,$b;
            $resultado= $a-$b;
           echo "El resultado de la resta es:" . $resultado;
        }
        function multiplicacion(){
            global $a,$b;
            $resultado= $a*$b;
           echo "El resultado de la multiplicación es:" . $resultado;
        }
        function division(){
            global $a,$b;
            $resultado= $a/$b;
           echo "El resultado de la división es:" . $resultado;
        }

    suma();
    echo "<br>";
    resta();
    echo "<br>";
    multiplicacion();
    echo "<br>";
    division();

     ?>
    </h2>
</body>
</html>