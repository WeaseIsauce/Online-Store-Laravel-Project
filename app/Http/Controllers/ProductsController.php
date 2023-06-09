<?php

namespace App\Http\Controllers;

use App\Category_model;
use App\Products_model;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
   
    public function index()
    {
        $menu_active=3;
        $i=0;
        $products=Products_model::orderBy('created_at','desc')->get();
        return view('backEnd.products.index',compact('menu_active','products','i'));
    }


    public function create()
    {
        $menu_active=3;
        $categories=Category_model::where('parent_id',0)->pluck('name','id')->all();
        return view('backEnd.products.create',compact('menu_active','categories'));
    }

  
    public function store(Request $request)
    {
        $this->validate($request,[
            'p_name'=>'required|min:5',
            'p_code'=>'required',
            'p_color'=>'required',
            'description'=>'required',
            'price'=>'required|numeric',
            'image'=>'required|image|mimes:png,jpg,jpeg|max:1000',
        ]);
        $formInput=$request->all();
        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.str_slug($formInput['p_name'],"-").'.'.$image->getClientOriginalExtension();
                $large_image_path=public_path('products/large/'.$fileName);
                $medium_image_path=public_path('products/medium/'.$fileName);
                $small_image_path=public_path('products/small/'.$fileName);
                Image::make($image)->save($large_image_path);
                Image::make($image)->resize(600,600)->save($medium_image_path);
                Image::make($image)->resize(300,300)->save($small_image_path);
                $formInput['image']=$fileName;
            }
        }
        Products_model::create($formInput);
        return redirect()->route('product.create')->with('message','Add Products Successfully!');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $menu_active=3;
        $categories=Category_model::where('parent_id',0)->pluck('name','id')->all();
        $edit_product=Products_model::findOrFail($id);
        $edit_category=Category_model::findOrFail($edit_product->categories_id);
        return view('backEnd.products.edit',compact('edit_product','menu_active','categories','edit_category'));
    }

    
    public function update(Request $request, $id)
    {
        $update_product=Products_model::findOrFail($id);
        $this->validate($request,[
            'p_name'=>'required|min:5',
            'p_code'=>'required',
            'p_color'=>'required',
            'description'=>'required',
            'price'=>'required|numeric',
            'image'=>'image|mimes:png,jpg,jpeg|max:1000',
        ]);
        $formInput=$request->all();
        if($update_product['image']==''){
            if($request->file('image')){
                $image=$request->file('image');
                if($image->isValid()){
                    $fileName=time().'-'.str_slug($formInput['p_name'],"-").'.'.$image->getClientOriginalExtension();
                    $large_image_path=public_path('products/large/'.$fileName);
                    $medium_image_path=public_path('products/medium/'.$fileName);
                    $small_image_path=public_path('products/small/'.$fileName);
                    Image::make($image)->save($large_image_path);
                    Image::make($image)->resize(600,600)->save($medium_image_path);
                    Image::make($image)->resize(300,300)->save($small_image_path);
                    $formInput['image']=$fileName;
                }
            }
        }else{
            $formInput['image']=$update_product['image'];
        }
        $update_product->update($formInput);
        return redirect()->route('product.index')->with('message','Update Products Successfully!');
    }

    public function destroy($id)
    {
        $delete=Products_model::findOrFail($id);
        $image_large=public_path().'/products/large/'.$delete->image;
        $image_medium=public_path().'/products/medium/'.$delete->image;
        $image_small=public_path().'/products/small/'.$delete->image;
        if($delete->delete()){
            unlink($image_large);
            unlink($image_medium);
            unlink($image_small);
        }
        return redirect()->route('product.index')->with('message','Delete Success!');
    }
    public function deleteImage($id){
        $delete_image=Products_model::findOrFail($id);
        $image_large=public_path().'/products/large/'.$delete_image->image;
        $image_medium=public_path().'/products/medium/'.$delete_image->image;
        $image_small=public_path().'/products/small/'.$delete_image->image;
        if($delete_image){
            $delete_image->image='';
            $delete_image->save();
            unlink($image_large);
            unlink($image_medium);
            unlink($image_small);
        }
        return back();
    }
}
