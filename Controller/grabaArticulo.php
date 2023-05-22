<?php

require_once '../Model/Articulo.php';

// sube la imagen al servidor
move_uploaded_file($_FILES["imagen"]["tmp_name"], "../View/images/" . $_FILES["imagen"]["name"]);
// inserta la oferta en la base de datos
$articuloaux = new Articulo("", $_POST['titulo'],$_POST['intro'], $_POST['contenido'],$_FILES["imagen"]["name"], $_POST['cta']);
$articuloaux->insert();
header("Location: index.php");
