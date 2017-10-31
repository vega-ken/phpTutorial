<?php 

 /*
  get envia la data en el URL

  post envia la data en el header y si la envias con https la encripta
    eso se usa con credit cards forms
 */

  if(isset($_GET['name'])){ // isset (?) funciona asi no hayas escrito nada
    //print_r($_GET);
    //echo $_GET['name'];
    $name = htmlentities($_GET['name']); // evita al usuario entradas de scripts
    echo $name;
  }

  if(isset($_POST['name'])){
    print_r($_POST);
    $name = htmlentities($_POST['name']); // evita al usuario entradas de scripts
    echo $name;
  } 

  // $_REQUEST puede ser usado para recibir tanto post como get

  echo $_SERVER['QUERY_STRING']; // para get, consigue el 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Website</title>
</head>
<body>
  <form method="GET" action="get_post.php"> 
    <div>
      <label for="name">Name</label><br>
      <input type="text" name="name">
    </div>
    <div>
      <label for="email">Email</label><br>
      <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
  </form>
  
  <!-- puedes cambiar el query no solo con forms -->

  <ul>
    <li><a href="get_post.php?name=Brad">Brad</a></li>
    <li><a href="get_post.php?name=Steve">Steve</a></li>
  </ul>

  <h1><?php echo "{$name}'s profile" ?></h1>
</body>
</html>