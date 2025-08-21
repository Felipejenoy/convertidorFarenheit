<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <?php
        $s =mktime(12,2,2,05,12,2025);
       echo "Created date is " . date("Y-m-d h:i:sa", $s);
        echo"<br>";

       #se crea una fecha desde otra con strtitime

       $fechaNueva= strtotime("12:03pm August 20 2025");
       echo "LA fecha creada es : ". date("Y-m-d h:i:sa", $fechaNueva);

    ?>
</body>
</html>