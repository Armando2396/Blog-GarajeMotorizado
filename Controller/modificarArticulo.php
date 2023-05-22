<?php
require_once('../Model/Articulo.php');

// Recupera el ID del artículo que se va a modificar
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET["id"];
    } else {
        // Manejar caso de petición no soportada
        echo 'Error pa :v';
    }
    
// Recupera el artículo de la base de datos
$articulo = Articulo::getArticuloById($id);

// Procesa el formulario si se envió
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $articulo->setId($_POST['id']);
    $articulo->setTitulo($_POST['titulo']);
    $articulo->setIntro($_POST['intro']);
    $articulo->setContenido($_POST['contenido']);
    $articulo->setCta($_POST['cta']);

    if ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $info = getimagesize($_FILES['imagen']['tmp_name']);
        if ($info === false) {
            echo "Error: no es una imagen válida.";
        } else {
            $size = filesize($_FILES['imagen']['tmp_name']);
            if ($size > 1024 * 1024) {
                echo "Error: la imagen es demasiado grande (más de 1 MB).";
            } else {
                $img_name = basename($_FILES['imagen']['name']);// Obtener el nombre de la imagen sin la ruta completa
                //$img_path = "../View/images/" . $img_name; // Concatenar la ruta de destino y el nombre de la imagen
                move_uploaded_file($_FILES['imagen']['tmp_name'], "../View/images/". $img_name);
                $articulo->setImg($img_name);
            }
        }
    }

    // Actualiza el artículo en la base de datos
    if ($articulo->update()) {
        //header("Location: ../View/detalleArticulo.php?id=" . $articulo->getId());
        header("Location: index.php");
        exit;
    } else {
        echo "Error: no se pudo actualizar el artículo.";
    }
}

// Muestra el formulario de modificación del artículo
require_once('../View/formularioArtiModificar.php');
