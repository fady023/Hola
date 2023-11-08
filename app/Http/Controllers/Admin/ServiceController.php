<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Service;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::orderBy('id', 'DESC')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(request $request)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);
        
        $services = Service::create($request->all());
      
        return redirect()->route('servicesIndex',['admin','services' ,'index']);
    }

    public function edit(request $request)
    {
        $edit_service=Service::findOrFail($request->id);
        return view('admin.services.edit', compact('edit_service'));
    }

    public function update(request $request)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);
        $input_data=$request->all();

        Service::where('id',$request->id)->update($input_data);

        return redirect()->route('servicesIndex',['admin','services' ,'index']);
    }

    public function show(Slider $slider)
    {
    }

    
    public function destroy(request $request,$id)
    {
        Service::where('id',$request->id)->delete();
        return back();
    }
}
