<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Str;
use App\Models\Portfolio;
use App\Models\Service;

class GalleryController extends Controller
{
    public function index(){
        $id = 1;
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $Services  = Service::orderBy('id', 'ASC')->get();
        $gallerys  = Portfolio::where('service_id',$id)->orderBy('id', 'ASC')->get();

        return view('frontend.gallerys', compact('phone','email','address','Services','gallerys','id'));
    }    


    public function getId($id){
        $phone  = Setting::where('key','site.phone')->value('value');
        $email  = Setting::where('key','site.email')->value('value');
        $address  = Setting::where('key','site.address')->value('value');
        $Services  = Service::orderBy('id', 'ASC')->get();

        $gallerys  = Portfolio::where('service_id',$id)->orderBy('id', 'ASC')->get();

        return view('frontend.gallerys', compact('phone','email','address','Services','gallerys','id'));

    }    

    
    
}
