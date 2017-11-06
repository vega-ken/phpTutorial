<?php
  class Person{
    // aqui se usa las funciones para afectar las propiedades privadas de la clase
    private $name; 
    private $email; 

    public function getName(){
      return $this->name;
    }

    public function setName($newName){
      $this->name = $newName;
    }

    public function getEmail(){
      return $this->email;
    }

    public function setEmail($newEmail){
      $this->email = $newEmail;
    }
      
  }

  $person1 = new Person; // instanciando el objeto
  
  $person1->setName('John Doe');

  echo $person1->getName();
