<?php

class PaperBook extends Book {

    private string $library;
    private string $currentUser;

    public function __construct(string $title, string $author, int $year, string $library)
    {
        parent::__construct($title, $author, $year);
        $this->library = $library;
        $this->currentUser = "В библиотеке";
    }

    public function info() : string {
        return parent::info() . "\n\rНаходится в бибилиотеке: " . $this->library . "\n\rТекущий пользователь: " . $this->currentUser;        
    }

    public function getByUser(string $userName) {
        $this->currentUser = $userName;
        parent::incrementUsingCount();
    }

    public function returnToLibrary() {
        $this->currentUser = "В библиотеке";
    }
}
