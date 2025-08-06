<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach php</title>
</head>
<body>
    <?php
        $persona = array("nombre" => "Felipe", "edad"=>"23", "ciudad"=>"Popayán");

        foreach($persona as $persona=>$datos){
            echo "Mi $persona $datos";
        }
    
    ?>
</body>
</html>