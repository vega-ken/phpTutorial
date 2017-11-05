<?php 
  if(isset($_POST['submit'])){
    // echo 123; // to test
    session_start(); // si quieres usar la data de sesión necesitas esto

    // tomar los valores del form y ponerlos en variables de session
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    header('Location: page2.php'); //redirect desde php
  }
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
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
    <input type="text" name="name" placeholder="Enter name">
    <br>
    <input type="text" name="email" placeholder="Enter email">
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>