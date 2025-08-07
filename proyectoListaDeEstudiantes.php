<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estudiantes</title>
</head>

<body>

    <?php
    $estudiantes = array(
        array("nombre" => " johan", "edad" => "23", "nota" => "3.0"),
        array("nombre" => " Felipe", "edad" => "23", "nota" => "4.0"),
        array("nombre" => " Nelly", "edad" => "25", "nota" => "5.0"),
        array("nombre" => " Janito", "edad" => "25", "nota" => "2.0"),
        array("nombre" => " Stiven", "edad" => "24", "nota" => "4.0"),
    );

    ?>
    <h1>tabla de estudiantes</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Nota</th>
        </tr>
        <tr>
            <?php 
                foreach ($estudiantes as $informacionEstudiante => $valor) {
                    echo "<tr></tr>";
                    echo "<td>" .$valor["nombre"];
                    echo "<td>" .$valor["edad"];
                    echo "<td>" .$valor["nota"];
                }
            ?>
        
        </tr>
    </table>
    <h2>Quienes pasaron la nota son: </h2>
    <table>
            <tr>
                <th>Pasaron</th>
                <th>No pasaron</th>
            </tr>
            <tr>
                <?php 
                $pasaron=0;
                $noPasaron=0;
                foreach ($estudiantes as $informacionEstudiante => $valor) {
                    if($valor["nota"]<3.0){
                        $noPasaron+=1;
                    }
                    else{
                        $pasaron+=1;
                    }
                    
                }
                echo "<tr>";
                echo "<td>". $pasaron. "</td>";
                echo "<td>". $noPasaron. "</td>";
                echo "<tr>"
                ?>

            </tr>

    </table>


</body>

</html>