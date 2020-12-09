<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CrudController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function getOffers()
    {
        return Offer::get();
    }

    // public function store()
    // {
    //     Offer::create([
    //         'name' => 'offer2',
    //         'price' => '200',
    //         'details' => 'offer2 details',
    //     ]);
    // }

    public function create()
    {
        return view('offers.create');
    }

    public function store(Request $request)
    {
        // return $request;  //>> $request is opject

        // validate data before insert to DB
        $rulles = [
            'name_ar' => 'required|max:100|unique:offers,name_ar',
            'name_en' => 'required|max:100|unique:offers,name_en',
            'price' => 'required|numeric',
            'details_ar' => 'required',
            'details_en' => 'required'
        ];

        $messages = [
            'name_ar.required' => __('messages.offerNameRequired'),
            'name_ar.unique' => __('messages.offerNameUnique'),
            'name_ar.max' => __('messages.offerNameMax'),
            'name_en.required' => __('messages.offerNameRequired'),
            'name_en.unique' => __('messages.offerNameUnique'),
            'price.required' => __('messages.offerPriceRequired'),
            'price.numeric' => __('messages.offerPriceNumeric'),
            'details_ar.required' => __('messages.offerDetailsRequired'),
            'details_en.required' => __('messages.offerDetailsRequired'),
        ];

        $validator = Validator::make($request->all(), $rulles, $messages);

        if ($validator->fails()) {
            // return $validator->errors();
            return redirect()->back()->withErrors($validator)->withInput($request->all());  //   يرجع للخلف مع الاخطاء وجميع الحقول
        }


        Offer::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'price' => $request->price,
            'details_ar' => $request->details_ar,
            'details_en' => $request->details_en
        ]);
        return redirect()->back()->with(["Success" => "تم اضافة المنتج بنجاح"]);

        // return 'Added Seccessfuly';
        // return redirect()->to('http://127.0.0.1:8000/offers/create');  // يودين على الرابط
    }

    public function index()
    {
        // $offers = Offer::select('id', 'name_ar', 'name_en', 'price', 'details_ar', 'details_en')->get();

        // بتجيب البايانات حسب اللغة
        // LaravelLocalization::getCurrentLocale() .. return ar or en
        $offers = Offer::select(
            'id',
            'price',
            'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
            'details_' . LaravelLocalization::getCurrentLocale() . ' as details'
        )->get();
        return view('offers.index', compact('offers'));
    }
}
