<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lógica computadora</title>
</head>
<body>
    <?php
    
        if (isset($_POST["calcular"])) {
            $numero1= $_POST["numero1"];
            $numero2= $_POST["numero2"];
            $operaciones = $_POST["Operaciones"];
            $resultado =0;
        
        if($operaciones == "Suma") {
            $resultado = $numero1 + $numero2;
        }
        else if ($operaciones == "Resta") {
            $resultado = $numero1 - $numero2;
        }
        else if ($operaciones == "Multiplicacion") {
            $resultado = $numero1 * $numero2;
        }
        else if ($operaciones == "Division") {
            if ($numero2 == 0) {
                echo "No se puede dividir por cero";
                exit();
                
            }else{
                $resultado = $numero1/$numero2;
            }
        }
        }
    echo "el resultado es $resultado ";
    ?>
</body>
</html>