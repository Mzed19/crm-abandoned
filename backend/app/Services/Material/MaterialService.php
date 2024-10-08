<?php

namespace App\Services\Material;

use App\Entities\MaterialEntity;
use App\Repositories\MaterialRepository;

class MaterialService
{
    private $materialRepository;
    
    public function __construct()
    {
        $this->materialRepository = new MaterialRepository;
    }

    public function create(MaterialEntity $material): array
    {
        return $this->materialRepository->create([
            "name"          =>  $material->getName(),
            "value"         =>  $material->getValue(),
            "amount"        =>  $material->getAmount(),
            "description"   =>  $material->getDescription()
        ]);
    }

    public function index(): array
    {
        $material = $this->materialRepository->getAll();

        return $material->toArray();
    }

    public function delete(int $id): bool
    {
        return $this->materialRepository->delete(id: $id);
    }

    public function update(MaterialEntity $material): bool
    {
        return $this->materialRepository->update(
            id: $material->getId(),
            material: $material->getDataWithoutId()
        );
    }
}