<?php

include_once "Product.php";
include_once "lib/BladeOne.php";
include_once "DB.php";
use  eftec\bladeone\BladeOne;

$products=Product::getProducts();
$blade=new BladeOne();
echo $blade->run("products", ["title"=>"Product List", "products"=>$products]);


