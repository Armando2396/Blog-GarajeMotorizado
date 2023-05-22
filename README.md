## Ejercicio 1

Crea un blog siguiendo las pautas que se marcan a continuación:

* En un blog hay como mínimo una cabecera, una serie de artículos y un pie de página.
* Los artículos se almacenan en una base de datos. Sobre cada artículo se debe saber al menos
el título, la fecha de publicación y el contenido. Además cada artículo tendrá un
identificador o código único (puede ser un código que se auto-incremente).
* El identificador puede ser un número que se vaya incrementando él solo.
* La fecha se puede coger del sistema cuando se graba un nuevo artículo.
* Crea la clase BlogDB para aislar los datos de la conexión a la base de datos donde se guardan los
artículos.
* Crea la clase Articulo con los mismos atributos que campos hay en la tabla articulo de la base
de datos. Esta clase debe tener implementado el constructor y opcionalmente los getter y setter (se
pueden crear de forma automática con Alt + Insert).
* La clase Articulo tendrá también los métodos insert y delete, que deben insertar y borrar
respectivamente un artículo de la base de datos.
* La clase Articulo debe tener también un método de clase getArticulos() que devuelva en un
array todos los artículos de la base de datos.

## Ejercicio 2

Mejora el blog de tal forma que se permita la modificación de un artículo.

## Ejercicio 3

Añade estilos a la aplicación para hacerla más atractiva.

