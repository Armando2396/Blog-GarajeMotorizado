<?php
  require_once '../Model/Articulo.php';

  //obtiene todos los articulos
  $data['articulos'] = Articulo::getArticulos();

  // carga la vista listado

  include '../View/listado.php';
  
?>