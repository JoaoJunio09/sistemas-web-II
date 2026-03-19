<?php

class Product {
    public $name;
    public $price;
    public $category;
    public $validity;

    public function __construct($name, $price, $category) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->validity = false;
    }

    public function verifyValidity() {
        if ($this->validity == true) {
            return ['Validity' => true, 'Product name' => $this->name ];
        }
    }

    public function incrementPrice($value) {
        if (!is_float(value) || !is_int($value)) {
            return ['Error' => 'O valor precisa ser numérico'];
        }
        $this->price += $value;
    }
}

$product = new Product('Geladeira', 2000, 'Cozinha');

print_r($product);
echo "<br>";
echo $product->validity;

$product->validity = true;

echo "<br>";
print_r($product->verifyValidity());