<!DOCTYPE html>
<html>
<body>

<h1>
LearnPHP
</h1>

<?php
$variable = "PHP";

echo <<<HTML
<p>La extensión por defecto de los archivos $variable es '.php'.
<br><br>    
Un archivo $variable normalmente contiene etiquetas HTML y algunos scripts de $variable.
<br><br>
Una declaración en $variable siempre termina con punto y coma (;).
<br><br>
En $variable las palabras clave (if, else, while, echo), clases, funciones pueden ir en mayúscula o minúscula (ej. ECHO, echo, EcHo). ECHO es lo mismo que echo. Pero las variables sí son sensibles a mayúsculas y minúsculas.</p>
<br><br>
HTML;

?>

</body>
</html>