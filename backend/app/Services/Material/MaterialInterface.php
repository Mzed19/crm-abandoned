<?php

namespace App\Services\Material;

use App\Entities\MaterialEntity;

interface MaterialInterface {
    public function create(array $material): array;
}