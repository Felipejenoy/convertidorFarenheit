<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso del while en php-</title>
</head>
//✅ Muestra los primeros 10 números pares usando un while.

<body>
    <?php
    $numeroPar=0;
    $contador=0;

       //while($contador <=  10){
       // echo $numeroPar ."<br>";
       // $numeroPar+=2;
       // $contador++;
       //}

       while ($contador <= 10){
            if( $numeroPar % 2 ==0){
                echo $numeroPar . "<br>";
                $contador++;
            }
            $numeroPar++;
       }
    
    ?>
</body>
</html>