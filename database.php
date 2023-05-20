<?php
// Categories
$cat_category = new Category("cat", "fa-solid fa-cat");
$dog_category = new Category("dog", "fa-solid fa-dog");

// Products
$food_bones = new Food("Bones", $dog_category, 8.50, "none", "2025-06-21");
$food_pellets = new Food("Pellets", $cat_category, 4.40, "none", "2024-09-19");
$toy_ball = new Toy("Ball", $cat_category, 3.70, "none", "black", "rubber");
$toy_gummybone = new Toy("Gummy bone", $dog_category, 3.50, "none", "light yellow", "rubber");

$products = [
    $toy_ball,
    $toy_gummybone,
    $food_pellets,
    $food_bones
];
?>