<?php
  class Person{
    // aqui se usa las funciones para afectar las propiedades privadas de la clase
    private $name; 
    private $email; 

    public function __construct($name, $email){
      echo __CLASS__.' created<br>'; // nos da el nombre de la clase
      $this->name = $name;
      $this->email = $email;
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
      
  }

  $person1 = new Person('John Doe' , 'test@test.com'); // instanciando el objeto
  
  $person1->setName('John Doe 2'); // la idea de los constructores es evitarte esta linea | setear los atributos en el constructor todos a la vez en lugar de linea por linea

  echo $person1->getName();
  echo $person1->getEmail();
