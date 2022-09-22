<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Tp Nº 4</title>
  </head>
  <body>
<h1> Mostrar los numeros de 1 al 100 </h1>
    <?php
    $i = 1;
    do {
      print " <p> $i </p>\n";
      $i++;
    } while ($i <= 100);
     ?>
<br><hr>

<h1> Mostrar lo numeros del 100 al 1</h1>
<?php
$i = 100;
do {
  print " <p> $i </p>\n";
  $i--;
} while ($i >= 1);
 ?>

 <br><hr>

 <h1> mostrar los numeros pares del 1 al 100 </h1>
 <?php
 $i = 0;
 do {
   print " <p> $i </p>\n";
   $i+=2;
 } while ($i < 100);
  ?>
<br><hr>

<h1> Mostrar los numeros impares del 1 al 100 </h1>
<?php
$i = 1;
do {
  print " <p> $i </p>\n";
  $i+=2;
} while ($i < 100);
 ?>

 <h1>Mostrar la suma de los numeros del 1 al 20</h1>
 <?php
 $suma= 0;
 for ($i=2; $i<20; $i++){
   $suma += $i;
 }
   print " la suma de los numeros del 1 al 20 es $suma";
 ?>

 <br><hr>

<h1>Mostrar la suma de los numeros pares del 1 al 20</h1>
<?php
$suma= 0;
for ($i=2; $i<20; $i+=2){
  $suma += $i;
}
  print " la suma de los numeros pares del 1 al 20 es $suma";
?>




  </body>
</html>
