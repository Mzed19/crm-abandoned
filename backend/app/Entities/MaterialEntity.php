<?php

namespace App\Entities;

class MaterialEntity {
    private $id;
    private $value;
    private $description;
    private $amount;
    private $name;
    
    public function __construct(?float $value, ?string $description, ?int $amount, ?string $name) {
        $this->value        = $value;
        $this->description  = $description;
        $this->amount       = $amount;
        $this->name         = $name;
    }

    public function getId(): int|null
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }
    
    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function getDataWithoutId(): array
    {
        return [
            "name"          =>  $this->getName(),
            "value"         =>  $this->getValue(),
            "description"   =>  $this->getDescription(),
            "amount"        =>  $this->getAmount()
        ];
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }
}