<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Service;
use App\Models\SubService;
use App\Models\Portfolio;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role_id == 1){
            $Service = Service::count();
            $SubService = SubService::count();
            $Portfolio = Portfolio::count();
            return view('dashboard',compact('Service','SubService','Portfolio'));
        }else{
            return view('auth.login');
        }
        
    }
}
