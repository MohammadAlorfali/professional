<?php

namespace App\Http\Controllers\Front;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstCon extends Controller
{
    //When You Write this function :
    //All function in the class will
    //be in Middleware
    //without putting middleware in the routes .
    public function __construct()
    {
        $this->middleware('auth');//->except(''); if you want except functoin from the class you can write that .
    }


    public function showName()
    {
        return 'Hi Everuone';
    }

    public function getOffers(){
       // return Offer::get(); //select all cols
        return Offer::select('id','name')->get();
    }
}
