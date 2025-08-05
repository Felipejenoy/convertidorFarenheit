<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases y objetos php</title>
</head>

    <?php
        class carro {
            public $color;
            public $modelo;
            public $numeroPuertas;



             function __construct($color,$modelo, $numeroPuertas) {
                $this->color = $color;
                $this->modelo = $modelo;
                $this->numeroPuertas = $numeroPuertas;

            }

             function mensaje(){
                return "Mi carro tiene " . $this->numeroPuertas." Puertas". ", es modelo " . $this->modelo . " y el color es " . $this->color;
             }

            

        }

        $japones= new carro("Rojo","TOYOTA","3");
        echo $japones->mensaje();



    ?>

</html>