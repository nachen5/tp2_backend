<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
 </head>
 <body>
<h1>Tp N°2</h1>
<h2>Ejercicio 1</h2>
<?php
$a = 3;
if ($a > 0){
    echo "El número es positivo";
}
else{
    echo "El número es negativo";
}
?>
<hr>
<h2>Ejercicio 2</h2>
<?php
$b = 9;
if ($b>1 && $b<10)
{
    echo "El número es válido";
}
else{
    echo "El número no es válido";
}
?>
<hr>
<h2>Ejercicio 3</h2>
<?php
$c = 1;
if($c>10 or $c<2)
{
    echo "El número es válido";
}
else{
    echo "El número no es válido";
}
?>
<hr>
<h2>Ejercicio 4</h2>
<?php
$numero1 = 5;
$numero2 = 10;
if($numero1>$numero2)
{
    echo $numero1+$numero2;
    echo "<hr>";
    echo $numero1-$numero2;
}
elseif($numero1<$numero2)
{
    echo $numero1*$numero2;
    echo "<hr>";
    echo $numero1/$numero2;
    echo "<hr>";
    echo $numero1%$numero2;
}
else{
    echo "Los números son iguales";
}
?>
 </body>
</html>