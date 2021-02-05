<?php
class pagner
{
    private $DB;

    public function __construct($DB)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['pagner'])) {
            $_SESSION['pagner'] = array();
        }
        $this->DB = $DB;
        if (isset($_GET['delPagner'])) {
            $this->del($_GET['delPagner']);
        }
    }
    public function count()
    {
        return array_sum($_SESSION['pagner']);
    }
    public function total()
    {
        $total = 0;
        $ids = array_keys($_SESSION['pagner']);
        if (empty($ids)) {
            $products = array();
        } else {
            $products = $this->DB->query('SELECT id, price FROM products WHERE id IN(' . implode(',', $ids) . ')');
        }
        foreach ($products as $product) {
            $total += $product->price * $_SESSION['pagner'][$product->id];
        }
        return $total;
    }
    public function add($product_id)
    {
        if (isset($_SESSION['pagner'][$product_id])) {
            $_SESSION['pagner'][$product_id]++;
        } else {
            $_SESSION['pagner'][$product_id] = 1;
        }
    }
    public function del($prodcut_id)
    {
        unset($_SESSION['pagner'][$prodcut_id]);
    }
}
