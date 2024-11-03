<!DOCTYPE html>
<html>
<body>

<h1>LearnPHP</h1>
<h3>Tipos de datos</h3>

<?php
$x = "datos";
$P = 'PHP';
$a = 5;
$float = 8.4;
$y = array(2,3,4);
$z = false;
//var_dump($x);
class Car{
  public $color;
  public $model;
}
//casting una vaiable, cambiar el tipo de dato de una variable
$a = (string)$x;

echo <<<HTML
<p>Las variables pueden almacenar cualquier tipo de $x
<br><br> 
Las variables pueden ser declaradas en cualquier parte del script.
<br><br>
$P soporta los siguientes tipos de datos:
<ul>
  <li>string</li>
  <li>Integer</li>
  <li>float</li>
  <li>boolean</li>
  <li>array</li>
  <li>object</li>
  <li>null</li>
  <li>resource</li>
</ul>
Para obtener el tipo de dato se usa la funcion var_dump()

<h3>$P Strings</h3>
Las cadenas pueden ser cualquier texto entre '' o "".
<br><br>
Un string es una secuencia de caracteres. Ej. "PHP es divertido"

<h3>$P Integer</h3>
Los enteros son numeros entre -2,147,483,648 and 2,147,483,647.
<br><br>
Las reglas de los enteros son:
<ul>
  <li>Deben tener por lo menos un digito</li>
  <li>No deben tener un punto decimal</li>
  <li>Pueden ser negativos o positivos</li>
</ul>

<h3>$P Float</h3>
Los flotantes son numeros con punto decimal. Ej. 10.8
<br><br>

<h3>$P Boolean</h3>
Los caracteres boleanos representa dos posibilidades. Verdadero o Falso.
<br><br>

<h3>$P Array</h3>
Los vectores almacenan muchos valores en una sola variable.
<br><br>

<h3>$P Clase y Objectos</h3>
Las clases y objetos son dos tipos de aspectos en programacion orienta a objetos.
<br><br>
Una clase es una plantilla para objetos, y un objeto es una instancia de una clase.
<br><br>
Cuando se crean los objetos, ellos heredan todas las propiedades y comportamientos de la clase, pero cada objeto tendrá valores diferentes para las propiedades.
<br><br>
<h3>$P Null</h3>
Los datos nulos son variables sin un valor asignado, las variables sin un valor toma un valor único: NULL
<br><br>
</p>
HTML;
?>

</body>
</html>