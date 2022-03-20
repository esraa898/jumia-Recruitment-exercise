<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\HomeInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{

     protected $homeInterface;
     public function __construct(HomeInterface $homeInterface)
     {
      $this->homeInterface=$homeInterface;   
     }
    public function customer()
    {
        return $this->homeInterface->customer();
    }
}
