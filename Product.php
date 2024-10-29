<?php

class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name=$name;
        $this->price=$price;
    }
}



// Usage example

/*
$product =new Product("Laptop",1000);

$serializeProduct=serialize($product);

// echo $serializeProduct;

$unserializedProduct=unserialize($serializeProduct);

echo $unserializedProduct->price;
*/ 
