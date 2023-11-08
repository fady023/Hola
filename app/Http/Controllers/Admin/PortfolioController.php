<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use DB;
class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $portfolio = Portfolio::orderBy('id', 'DESC')->get();
        return view('admin.portfolio.index', compact('portfolio'));
    }

    public function create()
    {
        return view('admin.Portfolio.create');
    }

    public function store(request $request)
    {

        if($request->file('image')){
            $images=$request->file('image');
            foreach ($images as $image){
                if($image->isValid()){
                    $extension=$image->getClientOriginalExtension();
                    $filename=rand(100,999999).time().'.'.$extension;
                    $small_image_path=public_path('Portfolio/'.$filename);
                    
                    //// Resize Images
                    Image::make($image)->resize(525,328)->save($small_image_path);
                    $inputData['image']=$filename;
                    
                    DB::insert('insert into portfolio (image) 
                    values (?)', [$inputData['image']]);
                    
                }
            }
        }
      
        return redirect()->route('portfolioIndex',['admin','portfolio' ,'index']);
    }

    public function edit(request $request)
    {
        $edit_portfolio=Portfolio::findOrFail($request->id);

        return view('admin.portfolio.edit', compact('edit_portfolio'));
    }

    public function update(request $request)
    {
       
        $input_data=$request->all();        

        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($request['image'],"-").'.'.$image->getClientOriginalExtension();
                $small_image_path=public_path('portfolio/'.$fileName);
    
                //Resize Image
                Image::make($image)->resize(525,328)->save($small_image_path);
                $input_data['image']=$fileName;
            }
        }
        portfolio::where('id',$request->id)->update($input_data);


        return redirect()->route('portfolioIndex',['admin','portfolio' ,'index']);
    }

    public function show($id)
    {
        //return view('admin.blogs.show');
    }

    
    public function destroy(request $request,$id)
    {
        portfolio::where('id',$request->id)->delete();
        return back();
    }

    public function del(request $request,$id)
    {
        portfolio::where('id',$request->id)->delete();
        return back();
    }

    
}
