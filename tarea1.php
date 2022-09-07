<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> Ejercicio Nº 1: Imprimir por pantalla "Hola Mundo"</h2>
    <?php
    echo "Hola mundo";
    ?>
    <br>
    <hr>

    <h2> Ejercicio Nº 2: Cargaren una variable la cadena de caracteres de "hola mundo" y luego imprimir por pantalla</h2>
    <?php
    $mensaje = "Hola mundo";
    echo $mensaje;
     ?>
     <br>
     <hr>
     <h2> Ejercicio Nº 3: crear dos variables enteras y mostrar por pantalla suma, resta, division, multiplicacion y el resto</h2>
     <br>

     <h1> Suma</h1>
     <?php
     $alfajor = 20;
     $jugo = 10;
     echo $alfajor + $jugo;
     ?>
     <br>

     <h1>Resta</h1>
     <?php
     echo $alfajor - $jugo;
      ?>
      <br>

      <h1> Division</h1>
      <?php
      echo $alfajor / $jugo;
       ?>
       <br>

       <h1>multiplicacion</h1>
       <?php
     echo $alfajor * $jugo;
        ?>
        <br>

        <h1>Resto</h1>
        <?php
        echo $alfajor % $jugo;
         ?>
         <br>
         <hr>

         <h2> Ejercico Nº 4: Transformar grados Celsius, en grados Fahrenheit, para el valor 20ºC y luego lo imprima en pantalla</h2>
         <?php
         $grados = 20;
         $fahrenheit = 32;
         echo $grados * $fahrenheit;
          ?>
          <br>
          <hr>

          <h2> Ejercico Nº 5a: Perímetro de un rectangulo</h2>
          <?php
          $base = 18;
          $altura = 12;
          echo $base * $altura * 2;
           ?>
           <br>
           <hr>

           <h2> Ejercico Nº 5b: Area de un rectangulo</h2>
           <?php
            echo $base * $altura ;
            ?>
            <br>
            <hr>

            <h2> Ejercico Nº 5c: Perímetro de un circulo</h2>
            <?php
            $radio = 30;
            $pi = 3.14;
            echo $radio * $pi * 2;
             ?>
             <br>
             <hr>

             <h2> Ejercico Nº 5d: Area de un circulo</h2>
             <?php
              echo $radio * $radio* $pi ;
    ?>
  </body>

</html>
