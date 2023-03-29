<?php

declare(strict_types=1);

use Infrastructure\Controllers\ProductContoller;

include_once("/xampp/htdocs/covers-for-cell/src/view/layouts/header.php");
include_once("/xampp/htdocs/covers-for-cell/src/Infrastructure/Controllers/ProductContoller.php");

$controller = new ProductContoller();
$dataOfAllProducts = $controller->readAllProducts();

?>


<div class="mb-3">
    <a class="btn btn-primary" href="./create.php">ADD NEW CASE COVER</a>
</div>

<h2 class="text-center">CASE COVER DETAILS</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">PRICE</th>
            <th scope="col">STATUS</th>
            <th scope="col">ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <?php if($dataOfAllProducts): ?>
            <?php foreach ($dataOfAllProducts as $product) { ?>
                <tr>
                    <td scope="row"><?= $product->getId() ?></td>
                    <td><?= $product->getName() ?></td>
                    <td><?= $product->getPrice() ?></td>
                    <td><?= $product->getActive() ?></td>
                    <td>
                        <a class="btn btn-success">UPDATE</a>
                        <a class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
            <?php } ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center text-danger"><strong>
                    <h2>NO CASE COVER</h2>
                </strong></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php

include_once("/xampp/htdocs/covers-for-cell/src/view/layouts/footer.php");

?>