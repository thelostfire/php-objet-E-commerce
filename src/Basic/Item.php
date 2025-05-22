<?php

namespace App\Basic;

class Item {

    private array $itemList;

    public function __construct() {

        $this->itemList = $_SESSION["shopList"];
    }

    public function itemDisplay() {
        var_dump($this->itemList)

        ?> 
    
                            <?php foreach($this->itemList as $item) {
                                if($_GET["name"]==$item->getName()) {
                                    ?>
                                    <div class='container'><div class='row'>;  
                                        <article class='col'>
                                            <img src='./assets/images/300x300.png' />
                                            <div class='product-details'></div>
                                                <h2><?=$item->getName()?></h2>
                                                <p><?=$item->getDescription()?></p>
                                                <p><?=$item->getPrice()?>€</p>
                                                <form method='post'>
                                                    <input class = '.btn .bg-primary' type='hidden' name='addToCart' value='".$product->getName()."'>
                                                    <button>Add to Cart</button>
                                                </form>
                                            </div>
                                        </article>             
                                    </div></div>
                                    
                                    <?php
                                }
                            }
    }
}