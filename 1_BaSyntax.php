<!DOCTYPE html>
<html>
<body>

<h1>
LearnPHP
</h1>
<h3>
Sintaxis básica
</h3>

<?php
// Este es un comentario de una linea
# Este tambien es un comentario de una linea
/*
Este es un comentario de multilinea
*/
$A = 8 /*Este es un comentario dentro del codigo*/ + 5;
$variable = "PHP";

echo <<<HTML
<p>La extensión por defecto de los archivos $variable es '.php'.
<br><br>    
Un archivo $variable normalmente contiene etiquetas HTML y algunos scripts en $variable.
<br><br>
Una declaración en $variable siempre termina con punto y coma (;).
<br><br>
En $variable las palabras clave (if, else, while, echo), clases, funciones pueden ir en mayúscula o minúscula (ej. ECHO, echo, EcHo). ECHO es lo mismo que echo. Pero las variables sí son sensibles a mayúsculas y minúsculas.
<br><br>
Una variable comienza con el signo $ seguido por el nombre de la variable.
<br><br> 
Los comentaios $variable van con los signo // o /* Ej.
<ul>
  <li>// Este es un comentario de una linea</li>
  <li># Este tambien es un comentario de una linea</li>
  <li>/*Este es un comentario de multilinea*/</li>
</ul>
En $variable hay dos maneras para obtener resultados con echo y print. Ej.
<ul>
  <li>echo 'texto'</li>
  <li>echo "texto"</li>
  <li>print "texto"</li>
  <li>print ("texto")</li>
</ul>
</p>
HTML;
?>

</body>
</html>