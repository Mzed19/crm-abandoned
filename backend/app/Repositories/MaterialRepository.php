<?php

namespace App\Repositories;

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

    public function delete(int $id): bool
    {
        return Material::find($id)->delete();
    }

    public function update(int $id, array $material): bool
    {
        return Material::find($id)->update($material);
    }
}