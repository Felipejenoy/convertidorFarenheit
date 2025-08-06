<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cóndicional if</title>
</head>
<body>
    <?php
        $numeroComprobar=30;

        if ($numeroComprobar >0  && $numeroComprobar %2 ==0 ){
            echo "Es par";
        }
        else{
            echo "Es impar";
        }

    
    ?>


</body>
</html>