<?php
  // TODO : conseguir esto de un DB
  $people[] = "Steve";
  $people[] = "John";
  $people[] = "Kathy";
  $people[] = "Evan";
  $people[] = "Anthony";
  $people[] = "Tom";
  $people[] = "Rhonda";
  $people[] = "Hal";
  $people[] = "Ernie";
  $people[] = "Johanna";
  $people[] = "Farrah";
  $people[] = "Linda";
  $people[] = "Shawn";
  $people[] = "Olivia";
  $people[] = "Derek";
  $people[] = "Amanda";
  $people[] = "Rachel";
  $people[] = "Katie";
  $people[] = "Jillian";
  $people[] = "Jose";
  $people[] = "Malcom";
  $people[] = "Greg";
  $people[] = "Mary";
  $people[] = "Brad";
  $people[] = "Mike";

  //get query string

  $q = $_REQUEST['q'];

  $suggestion = ""; // inicialización de variable

  //get suggestoins

  if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);

    foreach($people as $person){
      if(stristr($q, substr($person, 0 , $len))){ // stristr encuentra la primera ocurriencia de q en el substring person
        if($suggestion === ""){
          $suggestion = $person;
        }
        else{
          $suggestion .= ", $person";
        }
      }
    }
  }

  echo $suggestion === "" ? "No Suggestion" : $suggestion;