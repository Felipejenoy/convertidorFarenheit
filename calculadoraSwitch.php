<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora switch</title>
</head>
<body>
    <?php
        $a =10;
        $b =5;
        $operacion ="*";

        switch($operacion){
            case "+":
                echo "El resultado es ".($a + $b);
                break;
            case "-":
                echo "El resultado es ".($a - $b);   
                break; 
            case "*":
                echo "El resultado es ".($a* $b);
                break;
            case "/":
                echo "El resultado es ".($a / $b);
                break;
            default:
                echo "Caracter invalido";

        }
    ?>
</body>
</html>