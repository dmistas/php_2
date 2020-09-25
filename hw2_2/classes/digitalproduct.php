<?php
include_once "countproduct.php";
class DigitalProduct extends CountProduct {
    public function __construct($name, $price, $description) {
        parent::__construct($name, $price, $description, $quantity=1);
        $this->setPrice(round($price/2, 2));

    }
    public function setQuantity($quantity) {
        $this->quantity = 1; // количество цифрового продукта всегда 1шт
    }
    public function getTotalPrice() {
        // TODO: Implement getTotalPrice() method.
        return $this->getPrice();
    }
}
