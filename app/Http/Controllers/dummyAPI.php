<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    function getData()
    {
        return ['name'=>'javed','email'=>'test@gmail.com','Address'=>'one O one'];
    }
}
