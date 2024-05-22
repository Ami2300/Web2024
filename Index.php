<!DOCTYPE html>
<html>
    <head>
        <title>Indicex</title>
    </head>

    
    <body>

    
    <?php

    # echo 
            echo "¡Hola, soy un script de PHP!";
        ?>



<?php
class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';

    // Declaración de un método
    function mostrarVar() {
        echo $this->var;
    }
  
    
}

    // Crear una instancia de la clase
    $objeto = new ClaseSencilla();
    // Llamar al método mostrarVar en la instancia
    $objeto->mostrarVar();

?>
    </body>
</html>