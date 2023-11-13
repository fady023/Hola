<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Service;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

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
            'description'=>'required',
        ]);
        $formInput=$request->all();

        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($request['image'],"-").'.'.$image->getClientOriginalExtension();
                $small_image_path=public_path('services/'.$fileName);
    
                //Resize Image
                Image::make($image)->resize(411,452)->save($small_image_path);
                $formInput['image']=$fileName;
            }
        }

        if($request->file('icon')){
            $image=$request->file('icon');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($request['icon'],"-").'.'.$image->getClientOriginalExtension();
                $small_image_path=public_path('services/'.$fileName);
    
                //Resize Image
                Image::make($image)->resize(24,24)->save($small_image_path);
                $formInput['icon']=$fileName;
            }
        }


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
            'description'=>'required',
        ]);
        $formInput=$request->all();

        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($request['image'],"-").'.'.$image->getClientOriginalExtension();
                $small_image_path=public_path('services/'.$fileName);
    
                //Resize Image
                Image::make($image)->resize(411,452)->save($small_image_path);
                $formInput['image']=$fileName;
            }
        }

        if($request->file('icon')){
            $image=$request->file('icon');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($request['icon'],"-").'.'.$image->getClientOriginalExtension();
                $small_image_path=public_path('services/'.$fileName);
    
                //Resize Image
                Image::make($image)->resize(24,24)->save($small_image_path);
                $formInput['icon']=$fileName;
            }
        }
        Service::where('id',$request->id)->update($formInput);

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
