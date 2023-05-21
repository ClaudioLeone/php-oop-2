<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product {
    public $color;
    public $material;

    function __construct(String $_name, Category $_primaryCategory, Category $_secondaryCategory, Float $_price, String $_image, String $_color, String $_material)
    {
        parent:: __construct($_name, $_primaryCategory, $_secondaryCategory, $_price, $_image);
        $this->color = $_color;
        $this->material = $_material;
    }
}

?>