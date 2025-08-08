<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addcategory()
    {
        return view('backend/adminfunction/AddCategory');
    }
    public function savecategory( CategoryRequest $request )
    {
        Category::create($request->all());
        return redirect()->back()->with('success',"Thêm Category thành công");
    }
    public function Listcategory(Category $Cats)
    {
        $Cat = $Cats->ListCategory();
        $Catbloh = $Cats->ListCatblog();
        return view('backend/adminfunction/ListCategory',compact('Cat','Catbloh'));
    }
    public function deletecategory($id)
    {
        Category::where('id',$id)->delete(); 
        return redirect()->route('admin.list.category')->with('delete',"Xóa Danh muc thành công"); 
    }
    public function editcategory($id)
    {
        $Catedit = Category::find($id); 
        $Catsub = Category::where('parden_id',0)->get(); 
        
        return view('backend/adminfunction/EditCategory',compact('Catedit','Catsub'));
    }
    public function updatecategory($id, CategoryRequest $request)
    {
        
        Category::find($id)->update($request->only('cat_name','status','typecat'));
        return redirect()->route('admin.list.category')->with('update',"Sửa thành công"); 
    }
    public function addsubcat($id)
    {
        $Catsub = Category::find($id);
         return view('backend/adminfunction/Addsubcategory',compact('Catsub'));
    }
    public function savesubcat($id ,Request $request)
    {
        $Catsub =  Category::create([
            'cat_name'=> $request->cat_name,
            'status'=> $request->status,
            'parden_id'=> $request->id,
            'typecat'=> $request->typecat,
        ]);
        return redirect()->route('admin.list.category')->with('add',"Thêm thành công"); 
    }
    // public function editcatsub($id)
    // {
    //     $Catedit = Category::find($id); 
    //     return view('backend/adminfunction/Editsubcat',compact('Catedit'));
    // }
    // public function updatesub($id, CategoryRequest $request)
    // {
    //     Category::find($id)->update($request->only('cat_name','status'));
    //     return redirect()->route('admin.list.category')->with('update',"Sửa thành công"); 
    // }
}
