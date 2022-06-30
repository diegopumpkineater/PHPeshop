<?php
require_once("config/init.php");

$cart = new Cart;
$product = new Product;
$template = new Template("templates/productpage.php");

if (isset($_GET["id"])) {
    $template->item = $product->fetchone($_GET["id"]);
} else {
    header("Location: index.php");
}



echo $template;
