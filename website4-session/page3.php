<?php
  session_start();

  print_r($_SESSION); // para ver qué variables de session existen

  $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest' ; // si está seteado, que asigne ese valor a $name, sino dale el valor de 'Guest'
    // puede ser escrito en php 7 así : $name = $_SESSION['name'] ?? 'Guest';

    // lo mismo se puede hacer para el email, darle un valor por defecto para evitar el error

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1> Hello <?php echo $name; ?></h1>
</body>
</html>