<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Service;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\SubService;

class SubServiceController extends Controller
{
    public function index(Request $request)
    {
        $SubServices = SubService::orderBy('id', 'DESC')->get();
        return view('admin.subservices.index', compact('SubServices'));
    }

    public function create()
    {
        $Services = Service::orderBy('id', 'DESC')->get();
        return view('admin.subservices.create', compact('Services'));
    }

    public function store(request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'image'=>'required',
            'prices'=>'required',
            'service_id'=>'required',
        ]);
        $formInput=$request->all();
        
        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($request['image'],"-").'.'.$image->getClientOriginalExtension();
                $small_image_path=public_path('subservices/'.$fileName);
    
                //Resize Image
                Image::make($image)->resize(808,590)->save($small_image_path);
                $formInput['image']=$fileName;
            }
        }

        SubService::create($formInput);
      
        return redirect()->route('subservicesIndex',['admin','subservices' ,'index']);
    }

    public function edit(request $request)
    {

        $edit_subservice=SubService::findOrFail($request->id);
        $Services = Service::orderBy('id', 'DESC')->get();
        return view('admin.subservices.edit', compact('edit_subservice','Services'));
    }

    public function update(request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'prices'=>'required',
            'service_id'=>'required',
        ]);
        $input_data=$request->all();
       
        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($request['image'],"-").'.'.$image->getClientOriginalExtension();
                $small_image_path=public_path('subservices/'.$fileName);
    
                //Resize Image
                Image::make($image)->resize(808,590)->save($small_image_path);
                $input_data['image']=$fileName;
            }
        }

        SubService::where('id',$request->id)->update($input_data);

        return redirect()->route('subservicesIndex',['admin','subservices' ,'index']);
       
    }

    public function show(Slider $slider)
    {
       
    }

    
    public function destroy(request $request,$id)
    {        
        SubService::where('id',$request->id)->delete();
        return back();
    }
}
