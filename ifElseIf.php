<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else If</title>
</head>
<body>
    <?php
        $numero1=60;
        $numero2=50;
        $numero3=70;

        if($numero1>$numero2 && $numero1> $numero3){
            echo "Es el mayor numero 1";
        }
        elseif($numero2 >$numero1 && $numero2 > $numero3){
            echo "Es el mayor el numero 2";
        }
        else{
            echo "El numero 3 es el mayor";
        }
    
    ?>
</body>
</html>