<?php
include_once "DB.php";
include_once "Product.php";
include_once "lib/BladeOne.php";
use eftec\bladeone\BladeOne;

$addProduct= Product::getProducts();
$blade2=new BladeOne();
echo $blade2->run("addProduct", ["addProduct"=>$addProduct]);

if (isset($_POST['action']) && $_POST['action']=='insert') {
    $addProduct = new Product(
        $_POST['sku'],
        $_POST['name'],
        $_POST['price'],
        $_POST['attribute']);

    $addProduct->add();
    header("location:index.php");
    die();
}
