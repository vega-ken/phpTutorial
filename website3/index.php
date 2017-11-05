<?php
  //mensajes
    $msg = '';
    $msgClass = '';

  //chequear si el form fue submitted 
  if(filter_has_var(INPUT_POST,'submit')){ // como es post, se chequea INPUT_POST
    // conseguri la data del form
      $name = htmlspecialchars($_POST['name']); // special chars para evitar que entren scripts
      $email = htmlspecialchars($_POST['email']);
      $message = htmlspecialchars($_POST['message']);

      //verificar campos requeridos
      if(!empty($email) && !empty($name) && !empty($message)){
        //echo 'PASSED'; // recuerda : cuando haces echo sin mas, siempre se adjuntara al inicio de la pagina

        //chequear el email 
        if(filter_var($email,FILTER_VALIDATE_EMAIL) === false ){
          //failed
          $msg = 'please fill in a valid email';
          $msgClass = 'alert-danger';
        }
        else{
          echo 'email passed';
          //paso, asi que envia el email

          $toEmail = 'vega.ken.developer@gmail.com';
          $subject = 'Contact Request From '.$name;
          $body = '<h2>Contact Request</h2>
            <h4>Name</h4><p>'.$name.'</p>
            <h4>Email</h4><p>'.$email.'</p>
            <h4>Message</h4><p>'.$message.'</p>
          ';

          $headers = "MIME-Version: 1.0" . "\r\n"; // especificar mime version y content type | \r\n == caracter return and a new line 
          $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";  // .= concatena
          
          //adittional headers
          $headers .="From: " .$name. "<".$email.">" . "\r\n"; // who

          if(mail($toEmail, $subject, $body , $headers)){
            $msg = 'Your email has been sent';
            $msgClass = 'alert-success';
          }
          else{
            $msg = 'There was a problem sending your email';
            $msgClass = 'alert-danger';
          }

        }

      }
      else{
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
      }
    
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">My Website</a>
      </div>
    </div>
  </nav>

  <div class="container">
    <?php if($msg != ''): ?>
      <div class="alert <?php echo $msgClass; ?>"> <?php echo $msg; ?> </div>
    <?php endif; ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> <!-- asi puedes cambiar el nombre del archivo e igual funcionaria | asegurate de poner echo -->
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>"> <!-- php en value esta para evitar borrar todo lo puesto si se equivocó | usa shorthand if-->
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea> <!-- tambien funciona para el mensaje en el textarea -->
      </div>
      <br>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


    
  
</body>
</html>