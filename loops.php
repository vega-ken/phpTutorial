<?php
  #LOOPS

  /*
    for
    while
    do..will
    will..do
  */

  # FOR loop
  for($i = 0 ; $i <10 ; $i++){
    echo "Number $i";
    echo "<br>";
  }

  #While
  $i = 0;
  while($i < 10){
    echo $i;
    echo "<br>";
    $i++;
  }

  #for each
  $people = array('Kevin', 'Jeremy', 'Sara');
  foreach($people as $person){
    echo $person;
    echo "<br>";
  }

  $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
  foreach ($people as $person => $age){
    echo "$person is $age";
    echo "<br>";
  }
?>