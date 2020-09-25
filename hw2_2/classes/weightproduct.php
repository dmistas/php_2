<?php
include_once "product.php";
class WeightProduct extends Product {
    private $weight;
    public function __construct($name, $price, $description, $weight) {
        parent::__construct($name, $price, $description);
        $this->weight = $weight;
    }
    public function setWeight($weight) {
        $this->weight = $weight;
    }
    public function getWeight(){
        return $this->weight;
    }
    public function getProfit() {
        return round($this->getTotalPrice()*0.2,2);
    }
    public function getTotalPrice() {
        return round($this->getWeight()*$this->getPrice());
    }
}

