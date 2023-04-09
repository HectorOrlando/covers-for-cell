<?php

declare(strict_types=1);

namespace Domain;

interface ProductRepository
{
    public function getAllProducts(): array;
    public function deleteProductById($id): void;
}
