<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    //When You Write this function :
    //All function in the class will
    //be in Middleware
    //without putting middleware in the routes .
    public function __construct()
    {
        // $this->middleware('auth');//->except(''); if you want except functoin from the class you can write that .
    }

    public function store()
    {
        Offer::create([
            'name' => 'Mohammad',
            'price' => '5000',
            'details' => 'this is the details',
        ]);
    }

    public function create()
    {
        return view('offers.create');
    }

    public function store2(Request $req)
    {
        $rules = $this->get_rules();
        $messages = $this->get_messages();
        //validate data befor insert to database .
        $valid = Validator::make($req->all(),$rules,$messages);
        if($valid -> fails()){
            return $valid->errors()->first();
        }
        Offer::create([
            'name' => $req->name,
            'price' => $req->price,
            'details' => $req->details,
        ]);
        return 'Saved Successfuly';
    }

    protected function get_rules(){
        return [
            'name'=>'required|max:100|unique:offers,name',
            'price'=>'required|numeric',
            'details'=>'required',
        ];
    }
    protected function get_messages(){
        return [
            'name.reaquired' => 'اسم العرض مطلوب',
            'name.unique' => 'اسم العرض موجود',
            'price.numeric' => 'سعر العرض يجب أن يكون أرقام',
            'price.required' => 'السعر مطلوب',
        ];
    }

}
