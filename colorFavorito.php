<?php
   session_start();
   $cookie_name="cookieColor";
   $cookie_value= $_POST["colorFav"] ?? null;

    if ($cookie_value) {
        setcookie($cookie_name, $cookie_value, time() + (8600 * 30), "/");
        $colorFondo= $cookie_value;
    }
    elseif (isset($_COOKIE[$cookie_name])) {
        $colorFondo = $_COOKIE[$cookie_name];
    }
    else{
        $colorFondo ='#ffffff';
    }

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie valor favorito</title>
</head>
<body style="background-color: <?php echo $colorFondo?>;">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Pon tu color favorito: <input type="color" name="colorFav"><br>
                           <input type="submit"><br>

    </form>
   

 
</body>
</html>