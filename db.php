<?php
// Requirements
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toy.php";

// Categories
$cat_category = new Category("cat", "fa-solid fa-cat" ,"bg-info");
$dog_category = new Category("dog", "fa-solid fa-dog", "bg-primary");

$food_category = new Category("food", "fa-solid fa-plate-wheat", "food-badge");
$toy_category = new Category("toy", "fa-solid fa-baseball", "toy-badge");

// Products
$food_bones = new Food("Bones", $dog_category, $food_category, 8.50, "none", "2025-06-21");
$food_pellets = new Food("Pellets", $cat_category, $food_category, 4.40, "none", "2024-09-19");
$toy_ball = new Toy("Ball",$cat_category, $toy_category, 3.70, "none", "black", "rubber");
$toy_gummybone = new Toy("Gummy bone",$dog_category, $toy_category, 3.50, "none", "light yellow", "rubber");

$products = [
    $toy_ball,
    $toy_gummybone,
    $food_pellets,
    $food_bones
];

$categories = [
    $cat_category,
    $dog_category,
    $food_category,
    $toy_category
];