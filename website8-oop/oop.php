<?php
  class Person{
    // puedes tener propiedades y metodos
    public $name; // access modifier (public, private or protected)
    public $email; // private - solo se puede acceder desde esta clase
      // protected - solo se puede acceder desde esta clase y otras que la extiendan
  }

  $person1 = new Person; // instanciando el objeto
  
  $person1->name = 'John Doe'; // para acceder a las propiedades se usa la flecha

  echo $person1->name;
