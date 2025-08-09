<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <h2>1. Funcion sin parametros</h2>
    <?php
        function saludar(){
            echo "Hola a todos";
        }
        saludar();
    ?>

    <h2>2. Función con parámetros</h2>
    <?php
        function saludarConParaemtro($nombre){
            echo "hola ".$nombre;
            
        }
        saludarConParaemtro("Felipe");
    ?>

    <h2>3. Función con valor de retorno</h2>
    <?php
        function elDobleDeUnNumero($numero){
            $doble =($numero *2);
            echo "El doble del $numero es: ".$doble;
        }
        elDobleDeUnNumero(2);
    ?>
    <h2>4. Crear una función que calcule el área de un rectángulo.</h2>
    <?php
        function calcularAreaTriangulo($base,$altura){
            $resultado =($base *$altura)/2;
            return "El area del triangulo es: ".$resultado;
        }
        echo calcularAreaTriangulo(2,2);
    ?>
    <h2>5. Crear una función que determine si un número es par o impar.</h2>
    <?php
        function ParoImpar($numeroaComparar){
            if($numeroaComparar % 2==0){
                echo "El numero $numeroaComparar es par";
            }
            else{
                echo "El numero $numeroaComparar es impar";
            }
        }
        ParoImpar(8);
    ?>
    <h2>5. Crear una función que convierta grados Celsius a Fahrenheit.</h2>
    <?php
        function convertidorDeGradosCaF($gradoConvertir){
            $resultadoConversion= ($gradoConvertir *9/5)+32;
            return "el resultado de convertir $gradoConvertir c a f es : $resultadoConversion";
        }
        echo convertidorDeGradosCaF(29);
    ?>
    <h2>Calculadora con funciones</h2>
    <p>Escoja el numero de lo que quiere hacer</p>
    <ol>
        <li>Sumar</li>
        <li>Restar</li>
        <li>Multiplicar</li>
        <li>Dividir</li>
    </ol>
    <?php
        function sumar($a,$b){
            $resultadoSuma= $a+$b;
            return"el resultado de la suma $a + $b es: $resultadoSuma";
        }
         
        function restar($a,$b){
            $resultadoResta= $a-$b;
            return "el resultado de la resta $a - $b es: $resultadoResta";
        }
        function multiplicar($a,$b){
            $resultadoMultiplicacion= $a*$b;
            return "el resultado de la multiplicacion $a * $b es: $resultadoMultiplicacion";
        }
        function dividir($a,$b){
            if ($b ==0){
                return "No se puede dividir por cero";
            }
            $resultadoDivision= $a/$b;
            return "el resultado de la division $a / $b es: $resultadoDivision";
        }
        $caso=2;
        switch ($caso) {
            case 1:
                echo sumar(2,2);
                break;
            case 2:
                echo restar(2,2);
                break;
            case 3:
                echo multiplicar(2,2);
                break;
            case 4:
                echo dividir(2,2);
                break;
            default:
                echo "Numero Invalido";
                break;
        }
    ?>
</body>
</html>