<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Color;
use App\Models\Brand;
use App\Models\type;
use App\Models\protype;
use Auth;

class HomeadminController extends Controller
{
    public function HomeAdmin()
    {
        // dd(Auth::user()->can('route.name'));
        return view('backend/adminfunction.Home');
    }
  
    public function addBrand(Brand $brand)
    {
        $data = $brand->brandlist();
        return view('backend/adminfunction/AddBrand',compact('data'));
    }
    public function savebrand(Request $request)
    { 
        $file =  $request->img_brand;
        $ex= $file->extension();
        $base_name = strtoupper(\Str::random(10));
        $filename = time().'-'.date('d-m-Y').'-'.$base_name.'.'.$ex;
        $file->move(public_path('uploads'), $filename );
        $data=  $request->only('brand_name','img_brand','status');
        $data['img_brand'] =  $filename;

        Brand::create($data);
        return redirect()->back()->with('success',"Thêm thương hiệu thành công");
    }
    public function deletebrand($id )
    {
        Brand::find($id)->delete(); 
        return redirect()->route('admin.add.Brand')->with('delete',"Xóa Thương hiệu  thành công"); 
    }
    public function editbrand($id)
    {
        $brandedit = Brand::find($id); 
        return view('backend/adminfunction/EditBrand',compact('brandedit'));
    }
    public function updatebrand($id, Request $request)
    {
        $Brand=  Brand::where('id',$id)->first();
        $data = $request->only('brand_name','img_brand','status');
   
        if(!$request['img_brand']){
            $request['img_brand'] = $Brand->img_brand;
        }else{
            $file = $request->img_brand;
            $ex= $file->extension();
             $base_name = strtoupper(\Str::random(10));
             $filename = time().'-'.date('d-m-Y').'-'.$base_name.'.'.$ex;
             $file->move(public_path('uploads'), $filename );
             $data['img_brand'] =  $filename;
        }
        Brand::find($id)->update($data);
        return redirect()->route('admin.add.Brand')->with('update',"Sửa thành công"); 
    }

    
    public function addcolor(Color $colos)
    {
        $CoLor = $colos->Colorlist();
        return view('backend/adminfunction/AddColor',compact('CoLor'));
    }
    public function savecolor(Request $request)
    { 
        Color::create($request->all());
        return redirect()->back()->with('success',"Thêm Category thành công");
    }
  
    public function editcolor($id)
    {
        $Coloedit = Color::find($id); 
        return view('backend/adminfunction/Editcolor',compact('Coloedit'));
    }
    public function updatecolor($id, Request $request)
    {
        Color::find($id)->update($request->only('color_name','status'));
        return redirect()->route('admin.add.color')->with('update',"Sửa thành công"); 
    }
    public function deletecolor($id)
    {
        Color::find($id)->delete(); 
        return redirect()->route('admin.add.color')->with('delete',"Xóa màu thành công"); 
    }

    public function addtype(Category $cats,type $type)
    {
        $types= $type->typelist();
        $data = $cats->ListCategory();
        return view('backend/adminfunction/Addtype',compact('types','data'));
    }
    public function savetype(Request $request)
    { 
        type::create($request->all());
        return redirect()->back()->with('success',"Thêm Kiểu sản phẩm thành công");
    }
  
    public function edittype($id,Category $cats)
    {
        $data = $cats->ListCategory();
        $typedit = type::find($id); 
        return view('backend/adminfunction/Edittype',compact('typedit','data'));
    }
    public function updatetype($id, Request $request)
    {
        type::find($id)->update($request->only('cat_id','type','status'));
        return redirect()->route('admin.add.type')->with('update',"Sửa thành công"); 
    }
    public function deletetype($id)
    {
        type::find($id)->delete(); 
        return redirect()->route('admin.add.type')->with('delete',"Xóa  thành công"); 
    }
}
