<?php
namespace App\DesignPatterns\AdapterPattern;
class Person {
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}