<?php 

class Products {
    public $name;
    public $description;
    public $price;

    function __construct($name, $description, $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}

class Vip_product extends Products {
    public $vip_price;
    public $available;

    function __construct($name, $description, $price) {
        parent::__construct($name, $description, $price);
    }

    public function get_vip_price() {
            return $this->vip_price = $this->price - ($this->price * 20 / 100);
    }
}

$product1 = new Vip_product('Sedia', 'Oggetto per sedersi', 20);
$product2 = new Vip_product('Tavolo', 'Oggetto per Mangiare', 75);
$product3 = new Vip_product('Divano', 'Oggetto per sdraiarsi', 150);

?>