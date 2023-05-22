<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/estilosForm.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <title>Modificar Artículo</title>
</head>
<body>
  <section class="Titulo">
    <h1>Modificar Artículo</h1>
  </section>
  <section class="contenido">
    <form method="POST" action="../Controller/modificarArticulo.php" enctype="multipart/form-data">
      <input type="hidden" value="<?=$articulo->getId()?>" name="id">
      <label for="titulo">Título:</label><br>
      <input type="text" id="titulo" name="titulo" value="<?=$articulo->getTitulo()?>"><br>

      <label for="intro">Introducción:</label><br>
      <textarea id="intro" name="intro"><?=$articulo->getIntro()?></textarea><br>

      <label for="contenido">Contenido:</label><br>
      <textarea id="contenido" name="contenido"><?=$articulo->getContenido()?></textarea><br>

      <label for="img">Imagen:</label><br>
      <input type="file" id="img" name="imagen"><br>
      <img src="../View/images/<?=$articulo->getImg()?>" alt="<?= $articulo->getImg() ?>" width="400"><br>

      <label for="cta">CTA:</label><br>
      <textarea id="cta" name="cta"><?=$articulo->getCta()?></textarea><br>

      <input type="submit" value="Guardar">
      <button type="button" onclick="cancelar()">Cancelar</button>
    </form>
  </section>
</body>
<script>
function cancelar() {
  // Redireccionar a la página deseada
  window.location.href = "../index.php";
}
</script>
</html>
