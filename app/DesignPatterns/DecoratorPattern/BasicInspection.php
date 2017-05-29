<?php
namespace App\DesignPatterns\DecoratorPattern;


//Core Service
class BasicInspection implements CarServiceInterface
{
    public function getCost()
    {
        return 19;
    }
}