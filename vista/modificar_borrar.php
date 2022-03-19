
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Gestión de FlashCards</title>
    </head>
    <body>
        <div class="contenedor">
            <h1>Modificar FlashCards</h1>
            <?php
                require ('../controlador/controlador.php');
                
                $controlador = new Controlador();
                $id=$_GET['id'];
                
                if($_GET['accion']=='Modificar'){
                    $datos=$controlador->idFlashCard($id);
                    echo '
                    <form method="post" enctype="multipart/form-data">
                    <label for="descripcion">Descripción</label>
                    <input type="text" id="descripcion" name="descripcion" value='.$datos['descripcion'].' required> <br />
                    <label for="audio">Fonética</label>
                    <input type="file" id="audio" name="audio" required> <br />
                    <label for="imagen">Imagen</label>
                    <input type="file" id="imagen" name="imagen"> <br />
                    <label for="tipo">Tipo de FlashCard</label>
                    <select name="tipo" id="tipo">
                        <option value="1">Material Escolar</option>
                        <option value="2">Animales</option>
                    </select>
                    <hr />
                    <input type="submit" value="Modificar Datos" name="modificar">
                    </form>';
                    if (isset($_POST['modificar'])){
                        $descripcion='"'.$_POST['descripcion'].'"';
                        $audio='"'.$_FILES['audio']['tmp_name'].'"';
                        if(isset($_POST['imagen'])){
                            $imagen='"'.$_FILES['imagen']['tmp_name'].'"';
                        }else{
                            $imagen='NULL';
                        }
                        if($_POST['tipo']==1){
                            $tipo = '"'.'Material Escolar'.'"';
                        }else{
                            $tipo = '"'.'Animales'.'"';
                        }
                        $controlador->actualizarFlashCard($_GET['id'],$descripcion, $audio, $imagen, $tipo);
                    }    
                }else{
                    $controlador->eliminarFlashCard($_GET['id']);
                    header('Refresh:2; url=listar.php');
                    echo 'Datos borrados con éxito';
                }
            ?>
        </div>
    </body>
</html>