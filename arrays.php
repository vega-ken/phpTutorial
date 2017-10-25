<?php
  #Array 

  /* tipos de arreglos
    -index
    -associative
    -multidimensional
  */

  //indexed
  $people = array('Kevin', 'Jeremy', 'Sara');
  echo $people[1]; // index 0 es el primero
    echo "<br>";

  $ids = array(23,55,12);
  echo $ids[2];
    echo "<br>";

  $cars = ['honda', 'toyota', 'ford'];
  $cars[3] = 'chevy';
  $cars[] = 'BMW'; // lo agrega al ultimo index

  #funciones importantes de arrays
  echo count($cars);
    echo "<br>";
  print_r($cars);
    echo "<br>";
  var_dump($cars); // para ver todo tipo de variable dentro
    echo "<br>";

  //associative array -- btw variables override here
  $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
  echo $people['Brad'];
    echo "<br>";

  $ids = [22 =>'Brad', 44 => 'Jose' , 63 => 'William'];
  echo $ids[22];
    echo "<br>";

  $people['Jill'] = 42;
  echo $people['Jill'];
    echo "<br>";
  print_r($people);
    echo "<br>";
  
  #Multi Dimensional
  $cars = array(
    array('Honda',20,10),
    array('Toyota',30,20),
    array('Ford',40,12)
  );

  echo $cars[1][2]; // will print 20 (array toyota y tercer elemento)
  
?>