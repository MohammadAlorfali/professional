<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;

class CrudController extends Controller
{
    //When You Write this function :
    //All function in the class will
    //be in Middleware
    //without putting middleware in the routes .
    public function __construct()
    {
         $this->middleware('auth');//->except(''); if you want except functoin from the class you can write that .
    }

    public function show(){
        $offers = Offer::select('id','price',
        'name_'.LaravelLocalization::getCurrentLocale().' as name',
        'details_'.LaravelLocalization::getCurrentLocale(). ' as details'
        )->get();
        return view('offers.show',compact('offers'));
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

    public function store2(OfferRequest $req)
    {
        /* $rules = $this->get_rules();
        $messages = $this->get_messages();
        //validate data befor insert to database .
        $valid = Validator::make($req->all(), $rules, $messages);
        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInputs($req->all());
        } */
            Offer::create([
            'name_ar' => $req->name_ar,
            'name_en' => $req->name_en,
            'price' => $req->price,
            'details_ar' => $req->details_ar,
            'details_en' => $req->details_en,
        ]);
        return redirect()->back()->with(['success'=>'تم إضاف العرض بنجاح']);
    }

    /* protected function get_rules()
    {
        return [
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required',
        ];
    }
    protected function get_messages()
    {
        return [
            'name.required' => __('messages.offer name required'),
            'name.unique' =>  __('messages.offer name must be unique'),
            'price.numeric' =>  __('messages.offer price must be numeric'),
            'price.required' => __('messages.offer price required'),
            'details.required' => __('messages.offer details required'),
        ];
    } */

}
