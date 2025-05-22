<?php

namespace App\Basic;

class Header {

    private string $navbarTitle;
    private string $navbarLink;
    private string $navbarLinkAlt;

    public function __construct(string $title, string $link, string $linkAlt) {

        $this->navbarTitle = $title;
        $this->navbarLink = $link;
        $this->navbarLinkAlt = $linkAlt;

    }

    public function headerDisplay() {

        echo "<header>  
                <nav class='navbar navbar-expand-lg bg-body-tertiary'>
                    <div class='container-fluid'>
                        <a class='navbar-brand' href='#'>$this->navbarTitle</a>
                            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' 
                            data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' 
                            aria-expanded='false' aria-label='Toggle navigation'>
                                <span class='navbar-toggler-icon'></span>
                            </button>
                            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                                <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='#'>$this->navbarLink</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='#'>$this->navbarLinkAlt</a>
                                    </li>
                                </ul>
                                <form method = 'get' class='d-flex' role='search'>
                                    <input class='form-control me-2' type='search' name='name' placeholder='Search Product' aria-label='Search'/>
                                    <button class='btn btn-outline-success' type='submit'>Search</button>
                                </form>
                            </div>
                    </div>
                </nav>
            </header>
            <main>";

    }

}

?>

