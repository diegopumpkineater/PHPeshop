<?php
require_once("config/init.php");

$cart = new Cart;
$products = new Product;
$template = new Template("templates/firstpage.php");

$template->products = $products->fetchproducts();
$template->brands = $products->fetchbrands();

if (isset($_POST["userid"]) && isset($_POST["itemid"])) {
    if ($cart->addtocart($_POST["cartid"], $_POST["userid"], $_POST["itemid"])) {
        unset($_POST);
    } else {
        unset($_POST);
        header("Location: cart.php?userid=1");
    };
}


echo $template;
