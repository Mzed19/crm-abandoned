<?php

namespace App\Entities;

class MaterialEntity {
    private $value;
    private $description;
    private $amount;
    
    public function __construct($value, $description, $amount) {
        $this->value = $value;
        $this->description = $description;
        $this->amount = $amount;
    }

    public function getValue() {
        return $this->value;
    }
    
    public function setValue($value) {
        $this->value = $value;
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
    
    public function getAmount() {
        return $this->amount;
    }
    
    public function setAmount($amount) {
        $this->amount = $amount;
    }
}