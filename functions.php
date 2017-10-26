<?php
  #Functions

  /*
    Camel Case - myFunction()
    Lower Case - my_function()
    Pascal Case - MyFunction()
  */

  function myFunction(){
    echo 'Hola!';
  }

  myFunction();

  function sayHello($name = 'World'){
    echo "Hello $name<br>";
  }

  sayHello('Job');
  sayHello('Bob');
  sayHello(); // usa el valor por defecto 

  function addNumbers ($num1, $num2){
    return $num1 + $num2;
  }

  echo addNumbers(8,9);
  echo "<br>";

  // manipulando parametros por referencia -- normalmente no se usa

  $myNum = 10;

  function addTen(&$num){
    $num += 10;
  }

  addTen($myNum);

  echo $myNum; // el valor de $myNum cambió porque se mandó por referencia
  echo "<br>";
?>