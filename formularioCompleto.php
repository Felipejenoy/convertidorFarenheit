<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario completo en php</title>
</head>
<body>
    <?php 
    $nombre= $email= $edad= "";
    $nombreErr = $emailErr= $edadErr="";
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        Nombre: <input type="text" name="nombre" value="<?php echo $nombre?>">
        <span class="error"><?php echo $nombreErr?></span>
        <br><br>
        Email: <input type="text" name="email" value="<?php echo $email?>">
        <span class="error"> <?php echo $emailErr?></span>
        <br><br>
        Edad: <input type="number" name="edad" value="<?php echo $edad?>">
        <span class="error"><?php echo $edadErr?></span>
        <br><br>
        <input type="submit">
    </form>
    <?php 

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            if (empty($_POST["nombre"])) {
                $nombreErr= "Debes colocar un nombre";
            }elseif (!ctype_alpha($_POST["nombre"])) {
                $nombreErr ="El nombre solo debe contener letras";
            }else{
                $nombre= $_POST["nombre"];
            }

            if (empty($_POST["email"])) {
                $emailErr= "Debe escribir su correo electronico";
            }elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $emailErr= "El correro debe tener un formato correcto";
            }
            else{
                $email= $_POST["email"];
            }

            if (empty($_POST["edad"])) {
                $edadErr= "Escribe una edad valida";
            }elseif ($_POST["edad"]<18 || $_POST["edad"]>99) {
                $edadErr= "Escribe una edad valida";
            }
            else{
                $edad= $_POST["edad"];
            }
        }
    ?>

    <h1>Resultado: </h1>
    <?php 
        echo htmlspecialchars($nombre);
        echo "<br>";
        echo htmlspecialchars($email);
        echo "<br>";
        echo htmlspecialchars($edad);
    ?>
</body>
</html>