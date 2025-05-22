<?php

namespace App\Basic;

class Shop extends Product{
    
    private array $shopContents;

    public function __construct() {
        $this->shopContents = [];
    }

    public function createProduct(string $name, string $desc, float $price) {
        $product = new Product($name, $desc, $price);
        $this->shopContents[]=$product;
        $_SESSION["shopList"]=$this->shopContents;

    }

    public function getShopContent() {
        $content = $this->shopContents;
        return $content;
    }

    public function shopDisplay() {
        
        echo "<div class='container'><div class='row'>";
        foreach ($this->shopContents as $product) {
            echo "  
                        <article class='col'>
                            <img src='./assets/images/300x300.png' />
                            <div class='product-details'>
                            
                                <h2>".$product->getName()."</h2>
                                <p>".$product->getDescription()."</p>
                                <p>".$product->getPrice()."€</p>
                                <form method='post'>
                                    <input class = '.btn .bg-primary' type='hidden' name='addToCart' value='".$product->getName()."'>
                                    <button>Add to Cart</button>
                                </form>
                            </div>
                        </article>
                    ";              
        }
        echo "</div></div>";
    }
}
?> <img src="" alt="">