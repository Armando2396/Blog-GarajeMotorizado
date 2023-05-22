<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de los articulos</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <section class="Titulo">
        <h1>"Garaje Motorizado"</h1>
    </section>
    <section class="btn">
        <a href="../Controller/nuevoArticulo.php">Nuevo Articulo</a>
    </section>
    <section class="contenido">
        <?php
            foreach($data['articulos'] as $articulo) {
        ?>
            <h3><?=$articulo->getTitulo()?></h3>
            <div class="contenedor-img">
                <img src="../View/images/<?=$articulo->getImg()?>">
            </div>
            <div class="articulo">
                <h1>Introduccion:</h1>
                <p><?=$articulo->getIntro()?></p>
                <h1>Contenido: </h1>
                <p><?=$articulo->getContenido()?></p>
                <h1>CTA: </h1>
                <p><?=$articulo->getCta()?></p>
                <h1>Fecha: </h1>
                <p><?=$articulo->getFecha_hora()?></p><br>
                <div class="btnes">
                    <a href="../Controller/borraArticulo.php?id=<?=$articulo->getId()?>">Borrar</a>
                    <a href="../Controller/modificarArticulo.php?id=<?=$articulo->getId()?>">Modificar</a> 
                </div>
                <hr>
            </div>
        <?php
            }
        ?>
            
    </section>
</body>
</html>