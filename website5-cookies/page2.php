<?php

  setcookie('username', 'Frank', time()+(86400*30)); // update al cookie de nombre username hasta el día siguiente 

  //delete cookie
  setcookie('username', 'Frank', time()-3600);  // si esta seteada a un tiempo que ya expiró se borra

  if(count($_COOKIE) > 0){
    echo 'There are '.count($_COOKIE).' cookies saved<br>';
  }
  else{
    echo 'There are no cookies saved<br>';
  }

  if (isset($_COOKIE['username'])){
    echo 'User '.$_COOKIE['username'].' is set<br>';
  }
  else{
    echo 'User is not set';
  }
?>