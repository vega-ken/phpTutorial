<?php
  $user = ['name' => 'Brad' , 'email' => 'test@test.com' , 'age' => 35];

  $user = serialize($user); // prepararla para guardarla (a string, porque no se puede guardar un arreglo directamente en cookie)

  setcookie('user', $user , time() + (86400*30));

  $user2 = unserialize($_COOKIE['user']);

  echo $user2['name'];

