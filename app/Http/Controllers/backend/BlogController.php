<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class BlogController extends Controller
{
    public function Blog()
    {
        $data= category::all();
       return view('backend/adminfunction/AddBlog',compact('data'));
    }
   
    public function saveBlog(Request $request)
    {
        $file =  $request->images;
        $ex= $file->extension();
        $base_name = strtoupper(\Str::random(10));
        $filename = time().'-'.date('d-m-Y').'-'.$base_name.'.'.$ex;
        $file->move(public_path('bog'), $filename );

        $data=  $request->only('blog_title','blog_image','blog_conten','blog_summary','category','status');
        $data['blog_image'] =  $filename;
         Blog::create($data);
        return redirect()->back()->with('error','thêm mới No thành công');
        
    }
    public function listblog()
    {
        $data = Blog::all();
        return view('backend/adminfunction/ListBlog', compact('data'));
    }
    public function editbog($id , Category $cats)
    {
        $data3 = $cats->ListCategory();
        $data =  Blog::find($id);
        
        return view('backend/adminfunction/EditBlog', compact('data','data3'));
    
    }
    public function updatebog($id,Request $request)
    {
        $blog=  Blog::where('id',$id)->first();
      
     
         $data = $request->only('blog_title','blog_image','blog_conten','blog_summary','category','status');
    
         if(!$request['images']){
             $request['images'] = $blog->blog_image;
         }else{
             $file = $request->images;
            
             $ex= $file->extension();
              $base_name = strtoupper(\Str::random(10));
              $filename = time().'-'.date('d-m-Y').'-'.$base_name.'.'.$ex;
              $file->move(public_path('bog'), $filename );
              $data['blog_image'] =  $filename;
         }
      
         Blog::where('id',$id)->update($data);
          return redirect()->route('admin.list.blog'); // chuyển hướng về danh sách
    }
    public function deleteblog($id)
    {
        Blog::find($id)->delete(); 
        return redirect()->route('admin.list.blog')->with('delete',"Xóa Blog thành công"); 
    }
}
