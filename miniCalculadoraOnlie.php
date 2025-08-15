<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini calculadora Online</title>
</head>
<body>
    <form action="minic.php" method="post">
        Numero 1: 
        <input type="number" name="numero1"><br>
        Numero 2: 
        <input type="number" name="numero2"><br>

        operaciones:
        <select name="Operaciones">
        <option value="Suma">Sumar</option>
        <option value="Resta">Resta</option>
        <option value="Multiplicacion">Multiplicacion</option>
        <option value="Division">Division</option>
        </select><br>
        <input type="submit" name="calcular">
    </form>
</body>
</html>