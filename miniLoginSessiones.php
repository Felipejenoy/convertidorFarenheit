<?php 
    session_start();
  
    if ($_SERVER["REQUEST_METHOD"]== "POST") {
        
        if (isset($_POST["cerrar"])) {
        session_unset();
        session_destroy();
        echo "Sessión cerrada correctamente";
    }
    else{
        $userName = $_POST["userName"] ?? null;
        $password = $_POST["password"] ?? null;
        if ($userName =="felipe@gmail.com" && $password == "12345") {
            $_SESSION["userName"] =$userName;
            echo "Bienvenido de nuevo". $_SESSION["userName"];
        }
         else{
            echo "User o password incorrecto";
        }
    }
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Login</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
         <label for="userName"> Ingrese su usuario <span class="required">*</span></label><br>
         <input type="text" name="userName"><br><br>
         <label for="password">Ingrese su contraseña <span class="required">*</span></label><br>
         <input type="password" name="password"><br><br>
         <input type="submit" value="ingresar"><br>
         <input type="submit" name="cerrar" value="salir"><br>
          
    </form>


   
</body>
</html>