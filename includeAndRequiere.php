<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docs</title>
</head>
<body>
    
    <?php 
        echo "el mejor lenguaje del mundo es: ";
        include "archivo.txt";

        echo readfile("archivo.txt");
    ?>
</body>
</html>