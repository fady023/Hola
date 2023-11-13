<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Str;
use App\Models\Contact;

class IndexController extends Controller
{
    public function index(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        
        return view('frontend.index', compact('phone','email','address'));
    }
    

    public function contact(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');

        return view('frontend.contact', compact('phone','email','address'));
    }

    public function postcontact(request $request)
    {
        Contact::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        
        return back()->with('message', 'Thank you, we will respond to you soon');
    }
}
