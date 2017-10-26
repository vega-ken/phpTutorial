<?php

  //set time zone
  date_default_timezone_set('America/Lima');

  #dia
  echo date('d');
  echo "<br>";
  echo date('m');
  echo "<br>";
  echo date('y');  
  echo "<br>";
  echo date('Y');
  echo "<br>";
  echo date('l');
  echo "<br>";

  // formato completo
  echo date('l, d/m/Y');
  echo "<br>";

  #tiempo 
  echo date('h');
  echo "<br>";
  echo date('i');
  echo "<br>";
  echo date('s');
  echo "<br>";
  echo date('a'); // or A
  echo "<br>";

  // formato completo
  echo date('h:i:s A');
  echo "<br><br>";

  #timestamps

  $timestamp = mktime(10,14,54,9,10,1981); // Brad' birthday ... horas, minutos, segundos, mes, dia , año
  echo date('d/m/Y h:i:s a', $timestamp);
  echo "<br>";

  $timestamp2 = strtotime('7:00pm March 22 2016');
  $timestamp3 = strtotime('tomorrow');
  $timestamp4 = strtotime('next Sunday');
  $timestamp5 = strtotime('+2 days'); // or 2 months

  echo date('d/m/Y h:i:s a', $timestamp5);


?>