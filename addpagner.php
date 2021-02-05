<?php
require '_header.php';
$json = array('error' => true);

if (isset($_GET['id'])) {
    $product = $DB->query('SELECT id FROM products WHERE id=:id', array('id' => $_GET['id']));
    if (empty($product)) {
        $json['message'] = 'The product does not existe';
    }

    $pagner->add($product[0]->id);
    header('Location: index.php');
    $json['error'] = false;
    $json['message'] = 'Product added';
} else {
    $json['message'] = 'You didn\'t select product';
}
echo json_encode($json);
