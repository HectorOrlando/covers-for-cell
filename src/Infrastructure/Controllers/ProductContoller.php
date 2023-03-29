<?php

declare(strict_types=1);

namespace Infrastructure\Controllers;

use Infrastructure\Repository\PDOProductRepository;
use Application\ReadAllProducts;

require_once("/xampp/htdocs/covers-for-cell/src/Infrastructure/Repositories/PDOProductRepository.php");
require_once("/xampp/htdocs/covers-for-cell/src/Application/ReadAllProducts.php");

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
}