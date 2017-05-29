<?php
namespace App\DesignPatterns\DecoratorPattern;

//Decorator
class OilChange implements CarServiceInterface
{
    protected $carService;
    function __construct(CarServiceInterface $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 29 + $this->carService->getCost();
    }
}