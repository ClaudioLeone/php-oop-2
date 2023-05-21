<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {
private $expiration;

    function __construct(String $_name, Category $_primaryCategory, Category $_secondaryCategory, Float $_price, String $_image, String $_expiration)
    {
        parent:: __construct($_name, $_primaryCategory, $_secondaryCategory, $_price, $_image);
        $this->expiration = $_expiration;
    }
}

?>