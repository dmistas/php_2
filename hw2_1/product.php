<?php

class Product
{
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setDescription($description) {
        $this->description = $description;
    }
}

class Germetik extends Product
{
    // добавлен срок хранения(годности) для герметика и объем
    public function __construct($name, $price, $description, $expiry_date) {
        parent::__construct($name, $price, $description);
        $this->expiry_date = $expiry_date;

    }

    private $expiry_date;
    private $volume;

    public function getExpiryDate() {
        return $this->expiry_date;
    }

    public function setExpiryDate($expiry_date) {
        $this->expiry_date = $expiry_date;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function setVolume($volume) {
        $this->volume = $volume;
    }
}

class Smesi extends Product
{ // у смесей есть вес, но нет объема
    public function __construct($name, $price, $description) {
        parent::__construct($name, $price, $description);
    }

    private $weight;

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }
}

