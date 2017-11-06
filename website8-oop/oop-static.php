<?php
  class Person{
    // No necesitas instanciar un objeto para usar sus propiedades o métodos. mientras sean estáticos se puede acceder
    private $name; 
    private $email; 

    private static $ageLimit = 40; 
    public static $ageLimit2 = 500;

    public function __construct($name, $email){
      echo __CLASS__.' created<br>'; // __CLASS__ nos da el nombre de la clase
      $this->name = $name;
      $this->email = $email;
    }

    public function __destruct(){
      echo __CLASS__.' destroyed<br>';
    }

    public function getName(){
      return $this->name.'<br>';
    }

    public function setName($newName){
      $this->name = $newName;
    }

    public function getEmail(){
      return $this->email.'<br>';
    }

    public function setEmail($newEmail){
      $this->email = $newEmail;
    }

    public static function getAgeLimit(){
      return self::$ageLimit.'<br>';
    }
      
  }

  echo Person::$ageLimit2;
  echo '<br>';
  echo Person::getAgeLimit();


