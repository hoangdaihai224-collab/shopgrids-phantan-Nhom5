<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\productRequest;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Color;
use App\Models\procolor;
use App\Models\product;
use App\Models\favorite;
use App\Models\productimages;
use Illuminate\Http\Request;
use App\Models\type;
use App\Models\protype;

class ProductController extends Controller
{
    public function addproduct(Category $cats, Brand $bran, Color $color)
    {
        $data = $cats->ListCategory();
        $colo  = $color->Colorlist();
        $data2= $bran->brandlist();
        return view('backend/adminfunction/AddProduct',compact('data','data2','colo'));
    }
    public function saveproduct(productRequest $request)
    {
        $file =  $request->images;
        $ex= $file->extension();
        $base_name = strtoupper(\Str::random(10));
        $filename = time().'-'.date('d-m-Y').'-'.$base_name.'.'.$ex;
        $file->move(public_path('uploads'), $filename );
        $data=  $request->only('pro_name','cat_id','images','price','price_sale','id_brands','warehouse','description','status');
        $data['images'] =  $filename;
        
        if($produc = product::create($data)){
            if( $request->colors_id && count( $request->colors_id) > 0){
                foreach( $request->colors_id as $key => $colorid){
                    procolor::create([
                        'color_id' =>$colorid,
                        'pro_id' =>$produc->id,
                    ]);
                }
            }
            if( $request->type_id && count( $request->type_id) > 0){
                foreach( $request->type_id as $key => $type){
                    protype::create([
                        'pro_id' =>$produc->id,
                        'type_id' =>$type,
                    ]);
                }
            }

            if( $request->other_img && count( $request->other_img) > 0){
            foreach( $request->other_img as $key => $oimg){
               $ex = $oimg->extension();
               $base_name = strtoupper(\Str::random(10));
               $filename = time().'-'.$key.'-'.date('d-m-Y').'-'.$base_name.'.'.$ex;
               $oimg->move(public_path('uploads'), $filename );
               productimages::create([
                       'name_img' =>$filename,
                       'product_id' =>$produc->id
                   ]);
               }
            }
          return redirect()->back()->with('success','thêm mới sản phẩm thành công');
        }
        return redirect()->back()->with('error','thêm mới No thành công');
    }
    public function listproduct(Category $category ,Color $color)
    {
       $colr = $color->Colorlist();
        $cats = $category->ListCategory();
        $data = product::search()->paginate(20);
        return view('backend/adminfunction/Listproduct', compact('data','cats','colr'));
    }
    public function deleteproduct($id)
    {
        product::find($id)->delete(); 
        return redirect()->route('admin.list.product')->with('delete',"Xóa sản phẩn thành công"); 
    }
    public function editproduct($id, Category $cats, Brand $bran, Color $color)
    {
        $data3 = $cats->ListCategory();
        $colo  = $color->Colorlist();
        $data2= $bran->brandlist();
        $data = product::find($id); 
        $proco =  procolor::where('pro_id',$id)->get();
        $type = type::where('cat_id',$data->cat_id)->get();
        $protype =  protype::where('pro_id',$id)->get();
        
        return view('backend/adminfunction/Editproduct',compact('data','data2','data3','colo','proco','type','protype' ));
    }
    
 public function updateproduct($id,Request $request){
   
    $pro =  product::where('id',$id)->first();
   procolor::where('pro_id',$id)->delete();
   protype::where('pro_id',$id)->delete();

    $data=$request->only('pro_name','cat_id','images','price','price_sale','id_brands','warehouse','description','status');
    $datacolor = $request->only('colors_id');
    $datatype = $request->only('type_id');
    if(!$request['images']){
        $request['images'] = $pro->images;
    }else{
        $file = $request->images;
        $ex= $file->extension();
         $base_name = strtoupper(\Str::random(10));
         $filename = time().'-'.date('d-m-Y').'-'.$base_name.'.'.$ex;
         $file->move(public_path('uploads'), $filename );
         $data['images'] =  $filename;
    }
    if($datacolor){
        $count=0;
        foreach($datacolor as $cl){
            $count = count($cl);
        }
        for($i=0 ; $i<$count;$i++){
            procolor::create(['pro_id'=>$id,'color_id'=>$cl[$i]]);
        }
    }
    if($datatype){
        $count=0;
        foreach($datatype as $tp){
            $count = count($tp);
        }
        for($i=0 ; $i<$count;$i++){
            protype::create(['pro_id'=>$id,'type_id'=>$tp[$i]]);
        }
    }
    if($request->other_img && count($request->other_img) > 0){
        foreach($request->other_img as $key => $oimg){
           $ex = $oimg->extension();
           $base_name = strtoupper(\Str::random(10));
           $file_name = time().'-'.$key.'-'.date('d-m-Y').'-'.$base_name.'.'.$ex;
           $oimg->move(public_path('uploads'), $file_name );
           productimages::create([
                   'name_img' =>$file_name,
                   'product_id' => $pro->id
               ]);
           }
        }
        
    $productimg = product::where('id',$id)->update($data);
     return redirect()->route('admin.list.product'); // chuyển hướng về danh sách
 }
 public function deleteproimages(productimages $productimages)
 {
     $img_path= public_path('uploads').'/'.$productimages->name_img; 
     if($productimages->delete()){
         if(file_exists($img_path)){
                unlink($img_path);
         }
    return redirect()->back();
     }
 }
 public function editimg($id)
 {
    
    $imgs =  productimages::find($id);
    return view('backend/adminfunction/Editimages', compact('imgs'));
  
 }
 public function updateimg($id ,Request $request)
 {
    $img_pro =   productimages::find($id);
    $data=$request->only('name_img');
    if(!$request['name_img']){
        $request['name_img'] = $img_pro->name_img;
    }else{
        $file = $request->name_img;
        $ex= $file->extension();
         $base_name = strtoupper(\Str::random(10));
         $filename_img = time().'-'.date('d-m-Y').'-'.$base_name.'.'.$ex;
         $file->move(public_path('uploads'),  $filename_img);
         $data['name_img'] =  $filename_img;
    }
    $product_img = productimages::find($id)->update($data);
    return redirect()->route('admin.list.product'); 
 }
 public function Prodetail($id)
 {
    $fv = favorite::where('pro_id',$id)->get();
    $count = count($fv);
    $product = product::where('id',$id)->first();
    $typ = protype::where('pro_id',$id)->get();
   
    
    /** Gửi dữ liệu qua form edit.blade.php*/
    return view('backend/adminfunction/prodetail',compact('product','count','typ'));
 }
 public function ajaxcategory($id)
 {
    $data = type::where('cat_id',$id)->get();
    // $data = "vaicalon";
    // dd($data);
    return $data;
 }
}