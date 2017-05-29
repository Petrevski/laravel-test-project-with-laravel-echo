<?php

namespace App\Http\Controllers;


use App\DesignPatterns\TemplateMethodPattern\TurkeySub;
use App\DesignPatterns\AdapterPattern\Book;
use App\DesignPatterns\AdapterPattern\Kindle;
use App\DesignPatterns\AdapterPattern\eReaderAdapter;
use App\DesignPatterns\AdapterPattern\Nook;
use App\DesignPatterns\AdapterPattern\Person;
use App\DesignPatterns\DecoratorPattern\BasicInspection;
use App\DesignPatterns\DecoratorPattern\OilChange;
use App\DesignPatterns\DecoratorPattern\TireRotation;
use App\DesignPatterns\TemplateMethodPattern\VeggieSub;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function test()
    {
        return view('home');
    }
}
