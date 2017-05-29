<?php
/**
 * Created by PhpStorm.
 * User: pera
 * Date: 29.5.17.
 * Time: 12.43
 */

namespace App\DesignPatterns\TemplateMethodPattern;

class VeggieSub extends Sub
{
    public function addPrimaryToppings()
    {
        var_dump('add some veggies');

        return $this;
    }
}