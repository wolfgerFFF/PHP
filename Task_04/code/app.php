<?php

require_once('vendor/autoload.php');

$book1 = new PaperBook("Похождения Иванова Ивана", "Иванов Иван", 2000, "Библиотека рядом с домом");

echo $book1->info();

$book1->getByUser("Миша");

echo $book1->info();

$book1->returnToLibrary();

echo $book1->info();

$book2 = new ElectronicBook("Мемуары Петра Петрова", "Петров Петр", 2001, "www.library.ru");

echo $book2->info();

$book2->download();

echo $book2->info();
