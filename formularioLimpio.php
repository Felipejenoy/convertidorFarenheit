<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Limpio</title>
</head>
<body>
    
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    NOMBRE: <input type="text" name="nombre"><br>
    <input type="submit">
    
   </form>

    
    <?php 
        if (empty($_POST["nombre"])) {
            echo "se requiere un nombre";
            exit();
        }else{
             echo "Su nombre es: ". htmlspecialchars( $_POST["nombre"]);
        }
       
    ?>


   


</body>
</html>