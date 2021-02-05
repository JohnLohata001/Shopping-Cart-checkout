<?php require 'header.php'; ?>

<br>
<div class="col-md-12">
    <div class="row">
        <?php $products = $DB->query("SELECT * FROM products"); ?>
        <?php foreach ($products as $product) : ?>
            <div class="col-md-3">
                <div class="item m-1 border rounded">
                    <div class="product font-rale p-2">
                        <a href="#"><img src="img/<?= $product->id; ?>.jpg" class="img-thumbnail d-block w100"></a>
                        <div class="text-center">
                            <hr>
                            <h6><?= $product->name; ?></h6>
                            <div class="rating text-warning font-size-12">
                            </div>
                            <div class="price py-1">
                                <h2 class="text-danger p-0 m-0"><b>$ <?= number_format($product->price, 2, '.', ' '); ?></b></h2>
                            </div>
                            <hr>
                            <a href="index.php?detail_id" class="btn btn-outline-info btn-sm">Detail product</a>
                            <a href="addpagner.php?id=<?= $product->id; ?>" class="btn btn-outline-secondary btn-sm addPagner">Add to Cart</a>
                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>






<?php require 'footer.php'; ?>