<?php 

class User {
    public $name;
    public $lastName;
    public $age;
    public $email;

    function __construct($name, $lastName, $age, $email) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->email = $email;
    }
}

class Vips extends User {
    public $vip_member;

    function __construct($name, $lastName, $age, $email) {
        parent::__construct($name, $lastName, $age, $email);
    } 

    public function get_vips() {
        return $this->vip_member = $this->age > 30 ? 'Yes' : 'No';
    }
}

$user1 = new Vips('Prisco', 'Coppola', 25, 'priscocoppola7@gmail.com');
$user2 = new Vips('Nicola', 'Verdi', 54, 'verdinic@gmail.com');
$user3 = new Vips('Francesco', 'Rossi', 33, 'frross@gmail.com');

?>