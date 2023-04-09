<?php

declare(strict_types=1);

namespace Infrastructure\Repository;

use Domain\Product;
use Domain\ProductRepository;
use Infrastructure\Connections\Mysql\Connection;

require_once("/xampp/htdocs/covers-for-cell/src/Domain/Product.php");
require_once("/xampp/htdocs/covers-for-cell/src/Domain/ProductRepository.php");
require_once("/xampp/htdocs/covers-for-cell/src/Infrastructure/Connections/Mysql/Connection.php");

class PDOProductRepository implements ProductRepository
{
    private $PDO;

    public function __construct()
    {
        $con = new Connection;
        $this->PDO = $con->connection();
    }

    public function getAllProducts(): array
    {
        $sql = "SELECT * FROM product";
        $stmt = $this->PDO->query($sql);
        $productsFound = $stmt->fetchAll();

        $products = [];
        foreach ($productsFound as $product) {
            $products[] = new Product(
                $product["id"],
                $product["name"],
                $product["price"],
                $product["active"],
            );
        }
        return $products;
    }

    public function deleteProductById($id): void
    {
        $sql = "DELETE FROM product WHERE id = $id";
        $this->PDO->query($sql);
    }

    public function getProductById($id): array
    {
        $sql = "SELECT * FROM product WHERE id = $id";
        $stmt = $this->PDO->query($sql);
        $productFound = $stmt->fetchAll();
        return $productFound;
    }
}
