<?php

namespace App\Basic;

class Head {

    private string $title;

    public function __construct($title) {
        $this->title = $title;

    }

    public function headDisplay() {
        echo "  <!DOCTYPE html>
                <html lang='fr'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css' 
                            rel='stylesheet' integrity='sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT' 
                            crossorigin='anonymous'>
                        <link href='./assets/styles.css' rel='stylesheet'>
                        <title>$this->title</title>
                    </head>
                    <body>";
    }

}
