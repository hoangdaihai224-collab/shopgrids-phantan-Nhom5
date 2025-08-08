<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\product;
use App\Models\procolor;
use App\Models\customer;
use App\Models\type;
use App\Models\protype;
use Auth;

class CartController extends Controller
{  
    public function Cart( cart $cart)
    {
        $data1= product::homeproduct()->get();
        $total = $cart->quantall();
        $data = $cart->cartall();
        // $qtt = 0 ;
        // foreach($data as $pr){
        //     $qtt +=  (($pr['price_sale'] ? $pr['price_sale']:$pr['price']));
        //     dd($qtt);
        // }
        $toll= 0;
        foreach($data as $pr){
            $toll += ($pr['price_sale']?$pr['price_sale']:$pr['price']) * $pr['Quantity'];
        }
        $saveyou= 0;
        foreach($data as $pr){
            $saveyou += ($pr['price_sale']?$pr['price'] - $pr['price_sale']:"0")  * $pr['Quantity'];
        }
     
      
        return view('fontend/page/Cart', compact('data','data1','total','toll','saveyou'));
    }
    function addCart($id , Request $req) {
   
        $pro = product::find($id);
        $check = Auth::guard('cus')->user();
        $quantity = 1;
        if($req['Quantity']){
            $quantity = $req['Quantity'];
        }
        if($check){
            $sp = cart::where('pro_id',$id)->first();
            // dd($sp);
            if($sp){
                $qtt = $sp['Quantity'] + $quantity;
                cart::where('pro_id',$id)->update(['Quantity'=>$qtt]);
                return  redirect()->route('view.cart');
            }else{
                $color = procolor::where('pro_id',$id)->first();
                $type = protype::where('pro_id',$id)->first();
                $cls = null;
                $tps = null;
                if($type){
                    $tps = $type->type_id;
                }
                if($color){
                    $cls = $color->color_id;
                }
                 $insert = cart::create([
                    'pro_id' =>$id,
                    'classify' => isset($req['classify']) ? $req['classify'] : $cls,
                    'type_id' => isset($req['type']) ? $req['type'] : $tps,
                    'price'=>$pro->price,
                    'price_sale'=>$pro->price_sale,
                    'Quantity'=>  $quantity,
                    'cus_id' => $check['id']
                 
                 ]);
              
                 return  redirect()->route('view.cart');
            }
            
        }else{
            return redirect()->route('login')->with('err','đăng nhập trc đê');
        }
    }
    public function updatecart(Request $req , $id)
    {
         $cart = $req->all();
         $cls = null;
         $tps = null;
         
        cart::find($id)->update(['classify'=> isset($req['classify']) ? $req['classify'] : $cls ,'type_id'=>isset($req['type']) ? $req['type'] : $tps,'Quantity'=>$cart['Quantity']]);
        return redirect()->back();
    }
public function remove($id)
{
    cart::where('pro_id',$id)->delete(); 
    return redirect()->route('view.cart'); 
}
public function clearall()
{
     $check = Auth::guard('cus')->user();
        cart::where('cus_id',$check['id'])->delete();
        return redirect()->route('view.cart'); 
}
}
