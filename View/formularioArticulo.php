<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilosForm.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Agregar Nuevo Articulo</title>
    </head>
    <body>
        <section class="Titulo">
            <h1>Agregar Nuevo Artículo</h1>
        </section>
        <section class="contenido">
            <form action="../Controller/grabaArticulo.php" enctype="multipart/form-data" method="POST">
                <label for="titulo">Titulo:</label><br>
                <input type="text"  id="titulo" name="titulo"><br>
                
                <label for="intro">Introduccion</label><br>
                <input type="text"  name="intro"><br>
                
                <label for="contenido">Contenido del Articulo</label><br>
                <textarea id="intro" name="intro"></textarea><br>
                
                <label>Imagen</label><br>
                <input type="file" id="imagen" name="imagen" width="400"><br>
                    <br>
                <label for="cta">CTA</label><br>
                <textarea id="cta" name="cta"></textarea><br>
                
                <input type="submit" value="Aceptar">
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
