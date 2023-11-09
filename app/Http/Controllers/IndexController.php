<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Setting;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function index(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        
        return view('frontend.index', compact('phone','email','address'));
    }
    
}
