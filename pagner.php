<?php require 'header.php'; ?>
<?php
// if (isset($_GET['del'])) {
//     $pagner->del($_GET['del']);
// }
?>
<div class="container mt-5">
    <div class="row">

        <div class="col-md-9">

            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Price Tax</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    $ids = array_keys($_SESSION['pagner']);
                    if (empty($ids)) {
                        $products =  array();
                    } else {
                        $products = $DB->query('SELECT * FROM products WHERE id IN (' . implode(',', $ids) . ')');
                    }
                    foreach ($products as $product) :

                    ?>

                        <tr>
                            <td><a href=""><img src="img/<?= $product->id; ?>.jpg" width=30 height=30 class="img-thumbnail m-0"></a></td>
                            <td class="name"><?= $product->name; ?></td>
                            <td class="price">$ <?= number_format($product->price, 2, '.', ' '); ?></td>
                            <td class="quantity"><?= $_SESSION['pagner'][$product->id]; ?></td>
                            <td class="subtotal">$ <?= number_format($product->price * 1.196, 2, '.', ' '); ?></td>
                            <td> <a href="pagner.php?delPagner=<?= $product->id; ?>" class="text-danger">Remove</a> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-3 text-center">
            <div class="wrap">
                <hr class="mt-0 p-0">
                <h4 class="first p-0 m-0">Total With Tax</h4>
                <hr>
                <h5>$ <?= number_format($pagner->total() * 1.196, 2, '.', ' '); ?> </h5>
                <hr>
                <a href="checkout.php" class="btn btn-secondary">Proceed to checkout</a>
            </div>
            <br><br><br><br><br><br>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>