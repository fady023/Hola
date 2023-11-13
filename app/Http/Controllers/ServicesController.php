<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Str;
use App\Models\Service;
use App\Models\SubService;

class ServicesController extends Controller
{
    public function index(){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $Services  = Service::orderBy('id', 'ASC')->get();

        return view('frontend.services', compact('phone','email','address','Services'));
    }    

    public function subservice($id){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $Services = Service::orderBy('id', 'ASC')->get();
        $SubServices  = SubService::where('service_id',$id)->get();
        $Service_name  = Service::where('id',$id)->value('name');
        $Service_description  = Service::where('id',$id)->value('description');
        $Service_image  = Service::where('id',$id)->value('image');
        $Service_icon  = Service::where('id',$id)->value('icon');


        return view('frontend.subservices', compact('phone','email','address','Services','SubServices','Service_name','Service_description','Service_image','Service_icon'));
    }    


    
}
