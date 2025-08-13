<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function holaMundo (){
            $a = "hola mundo";
            return $a;
        }
        

        function sumar($a,$b):int{
            $resultado = $a+$b;
            return $resultado;
        }
        echo holaMundo();
        echo "<br>";
        echo sumar(2,2);
    ?>
    <h1>Esta es una función</h1>
    
</body>
</html>