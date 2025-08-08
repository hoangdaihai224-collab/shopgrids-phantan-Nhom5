<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\banner;
use App\Http\Requests\mainRequest;

class BannerController extends Controller
{
    public function banner()
    {
       return view('backend/adminfunction/Addbanner');
    }
    public function savebanner(mainRequest $request)
    {
        $file =  $request->images;
        $ex= $file->extension();
        $base_name = strtoupper(\Str::random(10));
        $filename = time().'-'.date('d-m-Y').'-'.$base_name.'.'.$ex;
        $file->move(public_path('banner'), $filename );

        $data=  $request->only('title','image','url','target','description','type','position','status');
        $data['image'] =  $filename;
        $produc = banner::create($data);
        return redirect()->back()->with('error','thêm mới No thành công');
        
    }
    public function listbanner()
    {
        $data = banner::all();
        return view('backend/adminfunction/Listbanner', compact('data'));
    }
    public function editbaner($id)
    {
        $data =  banner::find($id);
        
        return view('backend/adminfunction/Editbanner', compact('data'));
    
    }
    public function updatebaner($id,Request $request)
    {
        $baner=  banner::where('id',$id)->first();
      
     
         $data = $request->only('title','image','url','target','description','type','position','status');
      
         if(!$request['images']){
             $request['images'] = $baner->image;
         }else{
             $file = $request->images;
             $ex= $file->extension();
              $base_name = strtoupper(\Str::random(10));
              $filename = time().'-'.date('d-m-Y').'-'.$base_name.'.'.$ex;
              $file->move(public_path('banner'), $filename );
              $data['image'] =  $filename;
         }
      
         banner::where('id',$id)->update($data);
          return redirect()->route('admin.list.banner'); // chuyển hướng về danh sách
    }
    public function deletebaner($id)
    {
        banner::find($id)->delete(); 
        return redirect()->route('admin.list.banner')->with('delete',"Xóa Blog thành công"); 
    }
}
