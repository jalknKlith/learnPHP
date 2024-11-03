<!DOCTYPE html>
<html>
<body>

<h1>
LearnPHP
</h1>

<?php
$variable = "PHP";

echo <<<HTML
<p>La extensión por defecto de los archivos $variable es '.php'.</p>

<p>Un archivo $variable normalmente contiene etiquetas HTML y algunos scripts de $variable.</p>

<p>Una declaración en $variable siempre termina con punto y coma (;).</p>

<p>En $variable las palabras clave (if, else, while, echo), clases, funciones pueden ir en mayúscula o minúscula (ej. ECHO, echo, EcHo).</p>

<p>ECHO es lo mismo que echo.</p>

<p>Pero las variables sí son sensibles a mayúsculas y minúsculas.</p>
HTML;

?>

</body>
</html>