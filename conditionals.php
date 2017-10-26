<?php
  #CONDITIONALS

  /*
    == : el valor es el mismo en ambos lados
    === : no solo el valor es el mismo, sino que también el tipo de dato
    <= 
    >=
    != : not equal
    !== : not identical
  */

  $num = 5;

  if($num == '5'){
    echo "5 pasa por ser el mismo valor";
    echo "<br>";
  }

  if($num === '5'){
    echo "5 pasa"; // pero no imprimira porque no es del mismo tipo
    echo "<br>";
  }

  #nesting ifs

  $num = 6;

  if($num < 4){
    if($num > 10){
      echo "$num passed";
      echo "<br>";
    }
  }

  #logical operators

  /*
    and  : && o AND
    or   : || o OR
    xor  : XOR
  */  

  if ($num > 4 AND $num <10){ // o puedes usar &&
    echo "$num passed<br>";
  }
  
  #switch

  $favColor = 'red';

  switch($favColor){
    case 'red':
      echo "your favorite color is Red";
      break;
    case 'blue':
      echo "your favorite color is Blue";
      break; 
    case 'green':
      echo "your favorite color is Green";
      break;
    default:
      echo "your favorite color is something else";
      break; 
  }
?>