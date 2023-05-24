<?php

namespace App\Services\Material;

interface MaterialInterface {
    public function create($material): array;
}