
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Listar</title>
    </head>
    <body>
    <?php
        require('../controlador/controlador.php');
        $controlador = new Controlador();
        $datos=$controlador->listarFlashCard();

        //Obtenemos las flashcards y las listamos, indicando la acción a modificar
        echo "<div class='contenedor'>";
        echo "<h1>Lista de FlashCards</h1>";
        foreach ($datos as $dato){
            echo "<div class='listado'>";
            echo "FlashCard: ".$dato["Flashcard"]."<br/>";
            echo "<a href='modificar_borrar.php? id=".$dato['Flashcard']."&accion=Modificar''><button>Modificar FlashCard</button></a>";
            echo "<a href='modificar_borrar.php? id=".$dato['Flashcard']."&accion=Borrar'><button>Borrar FlashCard</button></a>";
            echo "</div>";
        }
        echo" <a href='../index.html'>Menú Principal</a>";
        echo "</div>";
    ?>
    </body>
</html>