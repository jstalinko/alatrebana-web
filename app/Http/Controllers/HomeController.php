<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function lang(Request $request): \Illuminate\Http\RedirectResponse
    {
        session()->put('locale', $request->locale);
        App::setLocale(session()->get('locale'));
        return redirect('/?lang='.session()->get('locale'));
    
    }

    
    
    public function index(): View
    {
        $data['product5'] = \App\Models\Product::where('active',true)->limit(5)->get();
        $data['cat5'] = \App\Models\Category::where('active',true)->limit(5)->get();
        $data['product8'] = \App\Models\Product::where('active',true)->limit(8)->orderBy('created_at','desc')->get();
        $data['testimonials'] = \App\Models\Testimonial::all();
        $data['banners'] = \App\Models\Banner::limit(4)->get();
        $data['socialmedia'] = \App\Models\SocialMedia::all();
        return view('home',$data);
    }

    public function about(): View
    {
        $data['title'] = trans('about_us');
        return view('about',$data);
    }

    public function contact(): View
    {
        $data['title'] = trans('contact_us');
        return view('contact',$data);
    }

    public function submitContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $contact = new \App\Models\Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('success','Pesan anda telah terkirim');
    
    }



}
