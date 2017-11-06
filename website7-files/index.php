<?php
  $path = '/dir0/dir1/myfile.php';

  // return filename with extension
  echo basename($path);
  echo '<br>';

  // return filename without extension
  echo basename($path, '.php');
  echo '<br>';

  // retorna la ruta para llegar al archivo (el path)
  echo dirname($path);
  echo '<br>';

  // chequear si existe un archivo | podrias usarlo en if statements
  $fileName = 'file1.txt';
  echo file_exists($fileName); // ! puedes usarlo con carpetas
  echo '<br>';  

  // conseguir la ruta absoluta
  echo realpath($fileName);
  echo '<br>';  

  // chequea si hay archivo (?) | no puedes usarlo con carpetas, solo archivos
  echo is_file($fileName); 

  // chequear si a un archivo se puede escribir
  echo is_writable($fileName);
  echo is_readable($fileName);

  // file size
  echo filesize($fileName);

  echo '<hr>';

  //crear una carpeta
    //mkdir('testing');

  //borrar una carpeta ( se necesita que no haya archivos dentro )
    //rmdir('testing');

  // copiar hacia otro archivo
    //echo copy($fileName,'file2.txt');

  // rename a file
    //rename('file2.txt', 'myNewFile.txt');

  // delete a file
    //unlink('myNewFile.txt');

  // leer lo que está en el archivo y mostrarlo
    //echo file_get_contents($fileName);
    //echo '<br>';

  // escribir un string al archivo
    //echo file_put_contents($fileName,'Hi there'); // nota : lo reemplaza en lugar de agregarlo

    // para agregar en lugar de reemplazar
    /*$current = file_get_contents($fileName);
    
    $current .= ' GoodBye World';
    
    file_put_contents($fileName,$current);*/

  /* ---------------- */ 

  // abrir un archivo para leerlo con fopen y fread

  $handle = fopen($fileName,'r'); // r significa que leera el archivo
  $data = fread($handle, filesize($fileName));
  echo $data;
  echo '<br>';

  // abrir un archivo para escribir con fopen y fread

  $handle = fopen('file2.txt','w');
  $txt = "John doe\n";
  fwrite($handle, $txt);
  $txt = "Steve Smith\n";
  fwrite($handle, $txt);
  fclose($handle);

