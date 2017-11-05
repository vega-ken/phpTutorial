<?php
  /*
    recuerda, usar sessions es preferido en lugar de usar cookies.
  */
  if (isset($_POST['submit']))
  {
    $username = htmlentities($_POST['username']);

    setcookie('username', $username , time()+3600); // set a cookie. se guarda en el cliente | nombre, variable, expiracion

    header('Location: page2.php');
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
    <input type="text" name="username" placeholder="Enter username">
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>