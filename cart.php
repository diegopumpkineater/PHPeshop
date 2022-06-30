<?php
require_once("config/init.php");

$products = new Product;
$cart = new Cart;
$template = new Template("templates/cartpage.php");

if (isset($_GET["userid"])) {
    if ($cart->fetchcart($_GET["userid"])) {
        $items = $cart->fetchcart($_GET["userid"]);
        $itemarray = array();
        foreach ($items as $item) {
            $fetcheditem = $products->fetchone($item->item_id);
            if ($fetcheditem) {
                array_push($itemarray, $fetcheditem);
            }
        }
        $template->cartitems = $itemarray;
    } else {
        $template->cartitems = array();
    };
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deleteid"])) {
    if ($cart->deletefromcart($_POST["deleteid"])) {
        //do nothing
        unset($_POST);
        header("Location: cart.php?userid=1");
    } else {
        unset($_POST);
        header("Location: cart.php");
    }
}




echo $template;
