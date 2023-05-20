<?php
require_once __DIR__ . "/Category.php";

class Product {
    public $name;
    public $category;
    public $price;

    function __construct(String $_name, Category $_category, Float $_price)
    {
        $this->name = $_name;
        $this->category = $_category;
        $this->price = $_price;
    }
}

?>