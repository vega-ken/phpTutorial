<?php
  class Person{
    // aqui se usa las funciones para afectar las propiedades privadas de la clase
    private $name; 
    private $email; 

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
      
  }

  // $person1 = new Person('John Doe' , 'test@test.com'); // instanciando el objeto
  
  // $person1->setName('John Doe 2'); // la idea de los constructores es evitarte esta linea | setear los atributos en el constructor todos a la vez en lugar de linea por linea

  // echo $person1->getName();
  // echo $person1->getEmail();

  /* INHERIT */

  class Customer extends Person{
    private $balance;

    public function __construct($name, $email, $balance){
      parent::__construct($name,$email); // llamar al parent constructor, les asignara el nombre y email | parece que $balance no es necesario enviarlo en el constructor
      $this->balance = $balance;
      echo 'A new '.__CLASS__.' has been created<br>';
    }

    public function getBalance(){
      return $this->balance.'<br>';
    }

    public function setBalance($balance){
      $this->balance = $balance;
    }
  }

  $customer1 = new Customer('Maximiliam', 'test2@gmail.com', 3000);

  echo $customer1->getBalance();
