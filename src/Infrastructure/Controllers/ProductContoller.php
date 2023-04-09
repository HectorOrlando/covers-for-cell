<?php

declare(strict_types=1);

namespace Infrastructure\Controllers;

use Infrastructure\Repository\PDOProductRepository;
use Aplication\ReadAllProducts;
use Aplication\DeleteProductById;
use Aplication\ReadProductById;

require_once("/xampp/htdocs/covers-for-cell/src/Infrastructure/Repositories/PDOProductRepository.php");
require_once("/xampp/htdocs/covers-for-cell/src/Aplication/ReadAllProducts.php");
require_once("/xampp/htdocs/covers-for-cell/src/Aplication/DeleteProductById.php");
require_once("/xampp/htdocs/covers-for-cell/src/Aplication/ReadProductById.php");

class ProductContoller
{
    private $productRepository;

    public function __construct()
    {
        $this->productRepository = new PDOProductRepository();
    }

    public function readAllProducts()
    {
        $readService = new ReadAllProducts($this->productRepository);
        return $readService->getAllProducts();
    }

    public function getProductById($id): array
    {
        $readService = new ReadProductById($this->productRepository);
        return $readService->getProductById($id);
    }

    public function deleteProductById($id): void
    {
        $readService = new DeleteProductById($this->productRepository);
        $readService->deleteProductById($id);
    }
}
