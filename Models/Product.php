<?php
require_once __DIR__ . "/Category.php";

class Product {
    public $name;
    public $primaryCategory;
    public $secondaryCategory;
    public $price;
    public $image;

    function __construct(String $_name, Category $_primaryCategory, Category $_secondaryCategory, Float $_price, String $_image)
    {
        $this->name = $_name;
        $this->primaryCategory = $_primaryCategory;
        $this->secondaryCategory = $_secondaryCategory;
        $this->price = $_price;
        $this->image = $_image;
    }
}

?>