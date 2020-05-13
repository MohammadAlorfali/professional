<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function showUserName()
    {
        return 'Mohammad Alorfali';
    }
    public function getIndex()
    {
        /* $data=[];
        $data['age'] = 21;
        $data['name'] = 'Mohammad AlOrfali';
        return view('welcome',$data);
         */
        $obj = new \stdClass();
        $obj->fullName = 'Mohammad Alorfali';
        return view('welcome', compact('obj'));
    }
}
