<?php
include "Product.php";
class ProductCollection implements Iterator
{
    private $products = [];
    private $position = 0;

    public function __construct($products = [])
    {
        $this->products = $products;
    }

    public function current(): mixed {
        return $this->products[$this->position];
    }
    public function key(): mixed {
        return $this->position;
    }
    public function next(): void {
        $this->position++;
    }
    public function rewind(): void {
        $this->position=0;
    }
    public function valid(): bool {
        return isset($this->products[$this->position]);
    }

    public function addProduct($product)
    {
        $this->products[]=$product;
    }

    public function removeProduct($position)
    {
        if(isset($this->products[$position])){
            unset($this->products[$position]);
            $this->products=array_values($this->products);
        }
    }

    public function count(){
        return count($this->products);
    }

    public function getAllProducts(){
        return $this->products;
    }

}


$products= [
    new Product("Laptop",1200),
    new Product("Tablet",500),
    new Product("SmartPhone",800)
];

$productCollection =new ProductCollection($products);



$product4= new Product("Desktop",1000);

$productCollection->addProduct($product4);


foreach ($productCollection as $product) {
    echo "Product: {$product->name}, Price: {$product->price} \n";
}


echo " \n xxxxxxxxxxxxx \n";
echo $productCollection->count();

print_r($productCollection->getAllProducts());







