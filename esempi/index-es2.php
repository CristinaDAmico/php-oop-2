<?php
/**
 * VISIBILITA'
 * 
 * - public
 * - protected (evita sovrascrittura, non è accesibile all'infuori)
 * - private (evita sovrascrittura, non è accesibile all'infuori)
 * 
*/
class Person {
    public $first_name = 'Paolo';
    private $last_name = 'Duzioni';

    // Metodo
    public function printHello() {
        echo 'Hello I am a public method<br>';

        $this->printFullName();
    }

    protected function printFullName() {
        echo $this->first_name . ' ' . $this->last_name;
    }
}

class Developer extends Person {
    public function printDevName() {
        parent::printFullName();
    }
}

// ISTANZA PERSON
$person1 = new Person();
echo $person1->first_name . '<br>';
$person1->printHello();

// ISTANZA DEVELOPER
$developer = new Developer();
$developer->printDevName();



