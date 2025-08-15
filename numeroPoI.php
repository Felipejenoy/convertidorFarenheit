<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num =$_POST["numero"];
        if ($num % 2 ==0) {
            echo "El numero  $num es par";
        }
        else{
            echo "el numero $num es impar";
        }
    ?>
</body>
</html>