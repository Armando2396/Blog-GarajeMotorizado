<?php

require_once('../Controller/ArticuloController.php');

if (isset($_GET['id'])) {
    $articulo_id = $_GET['id'];
} else {
    echo "Error: falta el ID del artículo.";
    exit;
}

$articulo_controller = new ArticuloController();
$articulo = $articulo_controller->getArticulo($articulo_id);

if (!$articulo) {
    echo "Error: no se encontró el artículo.";
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Detalle del artículo</title>
</head>
<body>
    <h1><?php echo $articulo->getTitulo(); ?></h1>
    <p><?php echo $articulo->getContenido(); ?></p>
    <p>Autor: <?php echo $articulo->getAutor(); ?></p>
    <p>Fecha de publicación: <?php echo $articulo->getFecha(); ?></p>
    <a href="formularioArticuloModificar.php?id=<?php echo $articulo->getId(); ?>">Modificar artículo</a>
</body>
</html>
