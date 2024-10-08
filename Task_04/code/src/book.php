<?php

abstract class Book {

    protected string $title;
    protected string $author;
    protected int $year;
    private int $usingCount;
    
    public function __construct(string $title, string $author, int $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->usingCount = 0;
    }

    public function info() : string {
        return "\n\rНазвание: " . $this->title . "\n\rАвтор: " . $this->author . "\n\rГод издания: " . $this->year . "\n\rКоличество запросов: " . $this->usingCount; 
    }

    protected function incrementUsingCount() {
        $this->usingCount += 1;
    }

}
