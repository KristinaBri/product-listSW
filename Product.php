<?php

class Product
{
    public $id;
    public $sku;
    public $name;
    public $price;
    public $type_id;

    public function __construct($sku, $name, $price, $type_id, $id=null)
    {
        $this->sku=$sku;
        $this->name=$name;
        $this->price=$price;
        $this->type_id=$type_id;
        $this->id=$id;
    }

    // Getters
    public function getSku() {
        return $this->sku;
    }
    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getType_id() {
        return $this->type_id;
    }

    // Setters
    public function setSku($sku) {
        $this->sku = $sku;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function setType_id($type_id) {
        $this->type_id = $type_id;
    }

    //
    public static function getProducts(){
        $pdo=DB::getPDO();
        $stm=$pdo->prepare("SELECT * FROM products");
        $stm->execute([]);
        $products=[];
        foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $p){
            $products[]=new Product($p['sku'],$p['name'],$p['price'],$p['type_id']);
        }
        return $products;
    }


}