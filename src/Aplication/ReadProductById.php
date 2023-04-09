<?php

declare(strict_types=1);

namespace Aplication;

use Domain\ProductRepository;

require_once("/xampp/htdocs/covers-for-cell/src/Domain/ProductRepository.php");

class ReadProductById
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProductById($id): array
    {
        return $this->productRepository->getProductById($id);
    }
}
