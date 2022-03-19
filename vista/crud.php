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
            <h1>Alta de FlashCard</h1>
            <form method="post" enctype="multipart/form-data">
                <label for="descripcion">Descripción</label>
                <input type="text" id="descripcion"> <br />
                <label for="audio">Fonética</label>
                <input type="file" id="audio"> <br />
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen"> <br />
                <label for="tipo">Tipo de FlashCard</label>
                <select name="tipo" id="tipo">
                    <option value="1">Material Escolar</option>
                    <option value="2">Animales</option>
                </select>
                <hr />
                <input type="submit" value="Dar de Alta" name="enviar">
            </form>
        </div>
    </body>
</html>