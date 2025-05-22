<?php

require_once __DIR__."/../vendor/autoload.php";

use App\Basic\Head;
use App\Basic\Header;
use App\Basic\Footer;
use App\Basic\Item;

session_start();

$head = new head("Produit E-Commerce");
$header = new Header("E-shop", "Home", "Products");
$item = new Item();
$footer = new Footer();


$head->headDisplay();
$header->headerDisplay();

$item->itemDisplay();

$footer->footerDisplay();