<?php
include_once "product.php";
class CountProduct extends Product {
    public function __construct($name, $price, $description, $quantity) {
        parent::__construct($name, $price, $description);
        $this->setQuantity($quantity);
    }
    public function getProfit() {
        // TODO: Implement getProfit() method.
        return round($this->getTotalPrice()*0.2, 2);
    }
    public function getTotalPrice() {
        // TODO: Implement getTotalPrice() method.
        return $this->getQuantity()*$this->getPrice();
    }

}