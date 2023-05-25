<?php

namespace App\Entities;

class MaterialEntity {
    private $value;
    private $description;
    private $amount;
    private $name;
    
    public function __construct(?float $value, ?string $description, ?int $amount, ?string $name) {
        $this->value = $value;
        $this->description = $description;
        $this->amount = $amount;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }
    
    public function getDescription(): string
    {
        return $this->description;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setValue($value): void
    {
        $this->value = $value;
    }
    
    public function setDescription($description): void
    {
        $this->description = $description;
    }
    
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }
}