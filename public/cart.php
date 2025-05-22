<?php

require_once __DIR__."/../vendor/autoload.php";

use App\Basic\Head;
use App\Basic\Header;
use App\Basic\Footer;
use App\Basic\Cart;

session_start();

$head = new head("CartE-Commerce");
$header = new Header("E-shop", "Home", "Products");
$cart = new Cart();
$footer = new Footer();



$head->headDisplay();
$header->headerDisplay();

$cart->cartDisplay();

$footer->footerDisplay();