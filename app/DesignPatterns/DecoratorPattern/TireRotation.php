<?php
namespace App\DesignPatterns\DecoratorPattern;

class TireRotation implements CarServiceInterface
{
    protected $carService;

    function __construct(CarServiceInterface $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 15 + $this->carService->getCost();
    }
}