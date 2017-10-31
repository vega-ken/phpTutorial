<?php
  # substr()

  $output = substr('hello world',2,5); 
  echo $output;
  echo "<br>";

  // from the back
  $output = substr('hello world', -3 ); 
  echo $output;
  echo "<br>";

  # strlen()

  echo strlen('hello world');
  echo "<br>";

  # strpos() , index del primer match del parametro string

  # strrposr() , index del ultimo match del parametro string

  # trim(), le quita los espacios de más al string

    $text = '   hello world   ';
    var_dump($text);
    echo "<br>";

    $trimmed = trim($text);
    var_dump($trimmed);
    echo "<br>";

  # strtoupper() , string a mayusculas
  # strtolower(), string a minusculas

  # ucwords(), mayuscula a la primera letra

  # str_replace()

    $text = 'Hello world world';
    $output = str_replace('world', 'everyone', $text); // remplazara los 2 world por everyone
    echo $output;
    echo "<br>";

  ## is_string() , retorna 1 si el parametro es string, nada si no lo es
  
    $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0 , '0');

    foreach($values as $value){
      if(is_string($value)){
        echo "{$value} is a string<br>";
      }
    }

  ## gzcompress() , comprime el string

  $string = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, dolor! Sint incidunt corporis, deleniti quisquam cupiditate laborum rem, praesentium officiis distinctio dolorem optio aliquid molestiae autem totam sit accusamus magnam eius. Alias necessitatibus harum in exercitationem, iure rem praesentium molestiae deleniti esse doloremque. Voluptatem sed suscipit quibusdam minima magni asperiores?";

  $compressed = gzcompress($string);

  echo $compressed;
  echo "<br>";

  $original = gzuncompress($compressed);

  echo $original;
  echo "<br>";



