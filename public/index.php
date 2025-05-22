<?php

require_once __DIR__."/../vendor/autoload.php";

use App\Basic\Head;
use App\Basic\Header;
use App\Basic\Footer;
use App\Basic\Shop;

session_start();

if (isset($_GET["name"])) {
    header("Location: http://localhost:8000/item.php?name=".$_GET["name"]."");
}

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

if (!isset($SESSION["shopList"])) {
    $SESSION["shopList"]=[];
}

$head = new head("E-Commerce");
$header = new Header("E-shop", "Home", "Products");
$footer = new Footer();
$shop = new Shop();

$shop->createProduct("Brosse", "Objet utilisé pour aller se faire brosser", 10);
$shop->createProduct("Tapis", "Tellement timide qu'il se fait marcher dessus", 30);
$shop->createProduct("Tasse", "C'est mieux qu'une canette de bière", 12);


$head->headDisplay();
$header->headerDisplay();

$shop->shopDisplay();

$footer->footerDisplay();

if(isset($_POST["addToCart"])) {
    foreach($shop->getShopContent() as $content) {
        if($content->getName() == $_POST["addToCart"]) {
            $_SESSION["cart"][]=$content;
        }
    }
}

var_dump($_SESSION["cart"]);