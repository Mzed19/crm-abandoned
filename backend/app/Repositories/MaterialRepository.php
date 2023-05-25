<?php

namespace App\Repositories;

use App\Entities\MaterialEntity;
use App\Models\Material;
use App\Services\Material\MaterialInterface;
use Illuminate\Support\Collection;

class MaterialRepository implements MaterialInterface
{
    public function create(array $material): array
    {
        return Material::create($material)->toArray();
    }

    public function getAll(): Collection
    {
        return Material::all();
    }
}