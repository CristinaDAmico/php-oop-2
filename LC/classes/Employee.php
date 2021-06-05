<?php
require_once __DIR__ . '/User.php';

/**
 * EMPLOYEE
 * 
 * classe figlia
*/

class Employee extends User {
    // proprietà
    private $level;

    // Costruttore 
    function __construct($_name, $_lastname, $_age, $_level = 1) {
        parent::__construct($_name, $_lastname, $_age);

        $this->level = $_level;
    }

    // Metodi 
    protected function calcSconto() {
        if($this->age > 60) {
            $this->sale = 30;
        } elseif($this->level > 3) {
            $this->sale = 20;
        } else {
            $this->sale = 0;
        }
    }
}