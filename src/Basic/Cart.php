<?php

namespace App\Basic;


class Cart {

    private float $value;
    private $toCart;

    public function __construct() {
        $this->value = 0;
        $this->toCart = $_SESSION["cart"];
    }

    public function getCart () {
        $kart = $this->toCart;
        return $kart;
    }

    public function cartDisplay (){
        echo"<h1>My cart</h1><ul>";
        foreach($this->toCart as $tab) {
        ?>
            <li>
                <article>
                    <img src="" alt="">
                    <div>
                        <h2>
                            <?=$tab->getName()?>
                        </h2>
                        <p>
                            <?=$tab->getPrice()?>
                        </p>
                    </div>
                </article>
            </li>
            
            <?php
            }
        echo"</ul>";

        foreach ($this->toCart as $cart) {
            $this->value += $cart->getPrice();
        }
        echo "<p>Total : $this->value</p>";
    }
}