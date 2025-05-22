<?php

namespace App\Basic;

class Product {

    private string $name;
    private string $description;
    private float $price;

    public function __construct(string $name, string $desc, float $price) {
        $this->name = $name;
        $this->description = $desc;
        $this->price = $price;

    }

    public function getName() {
        $name = $this->name;
        return $name;
    }

    public function getDescription(){
        $desc = $this->description;
        return $desc;
    }

    public function getPrice() {
        $price = $this->price;
        return $price;
    }

    public function productDisplay() {
        echo " <article>
                    <img src='PLACEHOLDER' />
                    <div class='productDetails'>
                        <h2>".$this->getName()."</h2>
                        <p>".$this->getDescription()."</p>
                        <p>".$this->getPrice()."€</p>
                        <form method='post'>
                                <input class = '.btn .bg-primary' type='submit' name=".$this->getName()." value=".$this->getName().">
                            </form>
                            </div>
                        </article>";
    }
}