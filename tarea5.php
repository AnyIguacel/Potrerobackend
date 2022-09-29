<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Trabajo Practico nº 5</title>
</head>
<body>

  <h1>Trabajo Practico Nº 5. </h1>
  <br><hr>
  <h2> 1) Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h2>

  <?php
  $numeros=[2,4,6,8,10,12,14,16,18,20];
  print "<pre>\n";
  print_r ($numeros);
  ?>

  <br><hr>
  <h2> 2) Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
    matriz. Mostrar el esquema del array con print_r.</h2>

    <?php
    $datos=["Pedro", "Ana", "34", "1"];
    print "<pre>\n";
    print_r ($datos);
    ?>
    <br><hr>
    <h2>3) Crear un array asociativo e introducir los siguientes valores:
      Nombre: Pedro
      Apellido: Torres
      Dirección: Av. Mayor 3703
      Teléfono: 1122334455 </h2>

      <?php
      $datos2=['Nombre' => "Pedro", 'Apellido' => "Torres", 'Direccion' => "A. Mayor 3703", 'Telefono' => "1122334455"];
      print "<pre>\n";
      print_r ($datos2);
      ?>
      <br><hr>
      <h2>4) Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
        Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
        Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid </h2>

        <?php
        $ciudades=["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
        print "<pre>\n";
        print "La ciudad con el indice 0 es $ciudades[0]"; print "<pre>\n";
        print "La ciudad con el indice 1 es $ciudades[1]"; print "<pre>\n";
        print "La ciudad con el indice 2 es $ciudades[2]"; print "<pre>\n";
        print "La ciudad con el indice 3 es $ciudades[3]"; print "<pre>\n";
        print "La ciudad con el indice 4 es $ciudades[4]"; print "<pre>\n";
        ?>

        <br><hr>
        <h2>5) Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
          LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
          Ejemplo: El índice de Madrid es MD </h2>


          <?php
          $ciudades2=['MD' =>"Madrid", 'BCL' =>"Barcelona", 'LD' =>"Londres", 'NY' =>"New York", 'LA' =>"Los Angeles", 'CCG' =>"Chicago"];
          foreach ($ciudades2 as $indice => $ciudad) {
            print "<p> El indice de $ciudad es $indice </p>\n";
          } 

          print "<p> Final </p>\n";

          ?>


        </body>
        </html>
