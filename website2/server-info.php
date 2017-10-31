<?php 
  # $_SERVER SUPERGLOBAL
    # http://php.net/manual/en/language.variables.superglobals.php
    # almost everything is commented because the outputs are used in index.php

  //create server array
  $server = [
    'Host server name' => $_SERVER['SERVER_NAME'],
    'Server software' => $_SERVER['SERVER_SOFTWARE'],
    'Document root' => $_SERVER['DOCUMENT_ROOT'],
    'Current page' => $_SERVER['PHP_SELF'], // example : to submit to the same page
    'Script name' => $_SERVER['SCRIPT_NAME'],
    'Absoulte path' => $_SERVER['SCRIPT_FILENAME'] 
  ];
/*
  echo "<pre>"; // wrapping this in pre tags makes it more readable
  echo print_r($server);
  echo "</pre>";
*/
  /*
  echo $server['Host server name'];
  echo "<br>";
  echo $server['Server software'];
  echo "<br>";
  echo $server['Document root'];
  echo "<br>";
  */

  //create client array

  $client = [
    'Client system info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote port' => $_SERVER['REMOTE_PORT']
  ];
/*
  echo "<pre>"; // wrapping this in pre tags makes it more readable
  echo print_r($client);
  echo "</pre>";
*/
?>