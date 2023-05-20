<?php
require_once __DIR__ . "/Category.php";

class Product {
    public $name;
    public $category;
    public $price;
    public $image;

    function __construct(String $_name, Category $_category, Float $_price, String $_image)
    {
        $this->name = $_name;
        $this->category = $_category;
        $this->price = $_price;
        $this->image = $_image;
    }
}

?>