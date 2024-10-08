<?php

class ElectronicBook extends Book {

    private string $url;

    public function __construct(string $title, string $author, int $year, string $url)
    {
        parent::__construct($title, $author, $year);
        $this->url = $url;
    }

    public function info() : string {
        return parent::info() . "\n\rСсылка на скачивание: " . $this->url;        
    }

    public function download() {
        parent::incrementUsingCount();
    }
}
