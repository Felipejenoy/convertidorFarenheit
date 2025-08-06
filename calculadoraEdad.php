<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edad</title>
</head>
<body>
    <?php
        $edad =0;

        if ($edad <0){
            echo "Edad no valida";
        }
        elseif($edad < 18){
            echo "no puedes ingresar";
        }
        else {
            echo "Bienvenido";
        }
    ?>
</body>
</html>