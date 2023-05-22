<?php
require_once '../Model/Articulo.php';
$articuloaux= new Articulo($_GET['id'], $_GET['titulo'], $_GET['intro'], $_GET['contenido'], $_GET['cta'], $_GET['Fecha_Hora'],);
$articuloaux->delete();
header("Location: index.php");