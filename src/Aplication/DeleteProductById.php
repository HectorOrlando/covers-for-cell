<?php

declare(strict_types=1);

namespace Aplication;

use Domain\ProductRepository;

require_once("/xampp/htdocs/covers-for-cell/src/Domain/ProductRepository.php");

class DeleteProductById
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function deleteProductById($id): void
    {
        $this->productRepository->deleteProductById($id);
    }
}
