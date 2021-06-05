<?php
/**
 * USER CLASS
 * 
 * classe padre
*/
class User {
    // proprietà
    protected $name;
    protected $lastname;
    protected $age;
    protected $sale;

    // Costruttore
    function __construct($_name, $_lastname, $_age) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->age = $_age;
    }

    // Metodi
    public function getFullName() {
        return $this->name . ' ' . $this->lastname;
    }

    protected function calcSconto() {
        $this->sale = $this->age > 40 ? 30 : 0;
    }

    public function getSale() {
        // invocazione
        $this->calcSconto();

        return $this->sale;
    }
}