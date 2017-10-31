<?php
  #VARIABLES
  /* 
    - prejifo siempre $
    - empiezan con letras o _ 
    - case sensitive
  */
  //comentario
  $output = 'Hello world';
  echo $output; 

  #DATA TYPES
  /* 
    String
    Integers
    floats
    booleans
    arrays
    objects
    null
    resource // referencias a funciones
  */
  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;
  echo $sum;

  $string1 = 'Hello';
  $string2 = 'mundo';
  $greeting = $string1 .' '. $string2 . '!' ; // concatenar
  echo $greeting;
  $greeting2 = "$string1 $string2";
  echo $greeting2;

  $string3  = 'They\'re there'; // o con doble quotes "They're there"
  echo $string3;
  
  $float1 = 4.4;
  $bool1 = true;
  echo $bool1

  #CONSTANTS
  define('GREETING','Hello everyone'); // solo usar si sabes que este string nunca cambiará
    // el tercer parametro si está en true hace a la constante notCaseSensitive
  echo GREETING;

?>