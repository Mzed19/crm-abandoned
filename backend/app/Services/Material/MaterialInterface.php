<?php

namespace App\Services\Material;

use Illuminate\Support\Collection;

interface MaterialInterface {
    public function create(array $material): array;
    public function getAll(): Collection;
    public function delete(int $id): bool;
    public function update(int $id, array $material): bool;
}