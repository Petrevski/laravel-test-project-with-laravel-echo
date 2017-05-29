<?php
namespace App\DesignPatterns\AdapterPattern;

interface BookInterface {
    public function open();

    public function turnPage();
}