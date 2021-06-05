<?php
/**
 * USER CLASS
*/

class UserSite {
    private $age;

    // Metodo
    public function setAge($_age) {
        if(is_numeric($_age) && $_age > 0 && $_age < 120) {
            $this->age = $_age;
        }elseif (!is_numeric($_age)) {
            throw new Exception($_age . ' non è un numero.');
        } else {
            throw new Exception($_age . ' non è un numero valido.');
        }
    }

    public function getAge() {
        return $this->age;
    }
}

// ISTANZA USER
$user1 = new UserSite();

// $user1->setAge(50);
// echo $user1->getAge();

try {
    // $user1->setAge(50);
    // $user1->setAge('paolo');
    // $user1->setAge(190);
    $user1->setAge(27);

    echo $user1->getAge();
} catch(Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}