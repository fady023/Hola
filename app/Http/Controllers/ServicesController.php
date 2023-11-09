<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Str;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $Services  = Service::orderBy('id', 'ASC')->get();

        return view('frontend.services', compact('phone','email','address','Services'));
    }    
}
