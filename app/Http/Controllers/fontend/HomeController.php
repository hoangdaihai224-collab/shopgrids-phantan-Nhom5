<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\order ;
use Auth;
use App\Models\product;
use App\Models\category;
use App\Models\banner ;
use App\Models\Brand ;
use App\Models\Blog ;
use App\Models\cart ;
use App\Models\comment ;
use App\Models\reply ;
use App\Models\orderdetail ;
use App\Models\favorite;

class HomeController extends Controller
{
    public function Home(cart $cart)
    {
    
        $total = $cart->quantall();
        $banner =  banner::where('type',1)->get();
        $banner2 =  banner::where('type',2)->get();
        $banner3 =  banner::where('type',3)->get();
        $banner4 =  banner::where('type',4)->get();
        $banner5 =  banner::where('type',5)->get();
        $brand = Brand::all();
        $data= product::homeproduct()->get();
        return view('fontend/page/Home' ,compact('data','banner','banner2','banner3','banner4','banner5','brand','total'));

    }
    public function Shop(cart $cart)
    {
        $productshop= product::productshop()->search()->paginate(9);
        $total = $cart->quantall();
        $probrad = product::distinct()->get('id_brands');
      
        return view('fontend/page/Shop',compact('total','productshop','probrad'));
    }
    function Shopcat(category $catpro ,cart $cart, $slug){
        $total = $cart->quantall();
       $productshop = product::where('cat_id' , $catpro->id)->search()->paginate(9);

     
       return view('fontend/page/Shop', compact('total','productshop','catpro'));
    }
    // function Shopcatbrad(category $catpro ,cart $cart, ){
    //     $total = $cart->quantall();
    //    $productshop = product::distinct()->get('id_brands');
     
    //    return view('fontend/page/Shop', compact('total','productshop','catpro'));
    // }
  
    public function beseller(cart $cart,$mien)
    {
        $total = $cart->quantall();
            $productshop = product::productshop2()->paginate(9);
        return view('fontend/page/Shop' ,compact('productshop','total'));
        
    }
    public function newpro(cart $cart,$new)
    {
        $total = $cart->quantall();
            $productshop = product::pronew()->paginate(9);
        return view('fontend/page/Shop' ,compact('productshop','total'));
        
    }
    public function Productdetail($id ,cart $cart )
    {
      
        $favorite = "";
        $fv = favorite::where('pro_id',$id)->get();
        $count = count($fv);
        $total = $cart->quantall();
        $data1= product::homeproduct()->get();
        $pro = product::where('id',$id)->first();
        if($acc = Auth::guard('cus')->user()){
            if($check = favorite::where('cus_id',$acc->id)->where('pro_id',$id)->first()){
                $favorite = "-filled";
            }
        }
        
        return view('fontend/page/ProductDetail',compact('pro','data1','total','favorite','count'));
    }
    public function About()
    {
        return view('fontend/page/Aboutus');
    }
    public function Contac()
    {
        return view('fontend/page/Contac');
    }
  
    public function Blog(cart $cart)
    {
        $total = $cart->quantall();
        $data = Blog::all();
       return view('fontend/page/Blog',compact('data','total'));
    }
    public function Blogdetail($id,cart $cart)
    {
        $total = $cart->quantall();
        
        $data = Blog::where('id',$id)->first();
        $postcomen = comment::where('id_blog',$id)->get();
       
        return view('fontend/page/Blogdetail',compact('data','total','postcomen'));
    }
    public function postcomment($id ,Request  $request)
    {
        $data= $request->only('id_customer','id_blog','ND_comment');
        $data['id_customer'] = Auth::guard('cus')->user()->id;
        $data['id_blog'] =$request->id;
        comment::create($data);
        
        return redirect()->back()->with('success',"Đăng bình luận thành công");
    }
    public function reply(Request  $request)
    {
            Reply::create([
                'comment_id' => $request->input('comment_id'),
                'reply' => $request->input('reply'),
                'cus_id' => Auth::guard('cus')->user()->id,
            ]);

            return redirect()->back()->with('success','Reply added');
        }
    public function order()
    {
        $accoun =  Auth::guard('cus')->user()->id;
        $orders = order::where('customer_id',$accoun)->paginate(15);
        return view('fontend/page/Order' ,compact('orders'));
        
    }
    public function order2( $tas )
    {
        $accoun =  Auth::guard('cus')->user();
        $orders = order::all()->where('customer_id',$accoun->id)->where('status',$tas);
        return view('fontend/page/Order' ,compact('orders'));
        
    }
    public function orderpur(order $order)
    {
        
        return view('fontend/page/Orderdetail' ,compact('order'));
    }
    public function favorite($id)
    {
        $acc = Auth::guard('cus')->user();
        if(!$acc){
            return redirect()->route('login')->with('err','cần đăng nhập để thêm sp vào mục yêu thích !');
        }
        if($check = favorite::where('cus_id',$acc->id)->where('pro_id',$id)->first()){
            favorite::where('cus_id',$acc->id)->where('pro_id',$id)->delete();
        }else{
            favorite::create(['cus_id'=>$acc->id,'pro_id'=>$id]);
        }
        // dd($acc);
        return redirect()->back();
    }
    public function cus_favorite()
    {   
        $acc = Auth::guard('cus')->user();
        $data = favorite::where('cus_id',$acc->id)->get();
        
        return view('fontend/page/favorite' ,compact('data'));

    }
}
