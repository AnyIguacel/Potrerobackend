<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP2_backend</title>
  </head>
  <body>

    <h2>Ejercicio Nº 1: crear una variable y validar que sea un numero positivo</h2>

    <?php
    $a = 7;

  if ($a > 0) {
    echo "$a es un numero positivo";
  }
    ?>
<br>
<hr>
<h2> Ejercicio  Nº 2: crear una variable y validar que se a un numero mayor a 1 y menor a 10</h2>

<?php
if (($a<10) & ($a>1)) {
  echo "$a es un numero mayor a 1 y menor a 10";
}

?>

<br>
<hr>
<h2> Ejercicio  Nº 3: crear una variable y validar que se a un numero mayor a 10 o menor a 2</h2>
<h4> opcion validacion con or en condicion</h4>

<?php
if (($a > 10) or( $a < 2)) {
  echo "$a es un numero mayor a 10 o menor a 2";
} ?>

<br>
<hr>
<h4> opcion if y elseif </h4>

<?php
if ($a < 2) {
  echo "$a es un numero menor a 2";
}elseif ($a > 10) {
  echo "$a es un numero mayor a 10";
}
else {
  echo "$a no es un numero mayor a 10, ni menor de 2";
}

?>
<br>
<hr>
<h2> ejercico Nº 4</h2>
<?php
$numero1 = 20;
$numero2 = 10;
echo "Numero 1= $numero1 <br>";
echo "Numero 2= $numero2 <br> <hr>";


if ($numero1 > $numero2) {
  echo "   Suma = ($numero1 + $numero2)  <br>  Resta = ($numero1 - $numero2) ";
}elseif ($numero1 < $numero2) {
    echo " Multiplicacion= ($numero 1 * $numero2) <br> Division= ($numero1 / $numero2) <br> Resto = ($numero1 % $numero2)" ;

  }
  else {
    echo "Lo numeros ingresados son iguales";
  }

 ?>



  </body>
</html>
