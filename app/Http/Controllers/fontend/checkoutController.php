<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\order;
use App\Models\orderdetail;
use App\Models\customer;
use App\Models\coupon;
use Auth;

class checkoutController extends Controller
{
  
    public function checkout(Request $request )
    {
        $rules = [
            'coupon'=>'required'
        ];
        $messages = [
            'coupon.required'=>'zui lòng nhập mã trước ;',
        ];
        $val=0; 
        $code="";
        $total = cart::count();
        $accoun = Auth::guard('cus')->user();
        $carts = cart::where('cus_id',$accoun->id)->get();
        $totall = 0;
        $totalsp=0;
        foreach($carts as $pr){
            $totalsp = ($pr['price_sale']?$pr['price_sale']:$pr['price']) * $pr['Quantity'];
                $totall+=$totalsp;
            }
            $err= "";
            $cperr ="";
            $total2=$totall;
            $coupon = $request->all();
            if($request->isMethod('post')){
                if( $request->coupon!=null){
                    $cperr =$request->coupon;
                    $check = coupon::where('code',$coupon['coupon'])->first();
                    if($check){
                        $val = $check->value;
                        if($check->status==1){
                            if($check->for <= $coupon['totall']){
                              
                                if($check->quantity>0){
                                    $checked = order::where('customer_id',$accoun->id)->where('coupon',$coupon['coupon'])->first();
                                    if($checked==null){
                                    $code = $coupon['coupon'];
                                    $total2-=$val;
                                    if($total2<0) { 
                                        $total2=0;
                                    }


                                }else{
                                    $err = 'bạn đã sử dụng mã này rồi . vui lòng nhập mã khác !';
                                }
                            }else{
                                $err = 'mã này đã được sử dụng hết !';
                            }
                        }else{
                            $err ='đơn hàng của bạn chưa đủ điều kiện dùng mã này !';
                        }
                    }else{
                        $err ='mã của bạn đã hết hạn sử dụng !';
                    }
                }else{
                    $err ='mã của bạn không đúng !';
                }
            }
         }
        return view('fontend/page/Checkout', compact('accoun','total','totall','total2','val','code','err','cperr'));
    }
    public function post_checkout(Request $request ,Cart $cart)
    {
       
        $data= $request->only('customer_id','order_name','order_email','order_phone','City','district','commune','Address','order_note','total_price','coupon');
        $id = Auth::guard('cus')->user()->id;
        $data['customer_id'] = $id;
        $carts = cart::where('cus_id',$id)->get();
        if($order = order::create($data)){
            foreach($carts as $item){
               orderdetail::create([
                    'order_id' => $order->id,
                    'product_id' => $item->pro_id,
                    'price' =>  $item->price_sale > 0 ? $item->price_sale : $item->price ,
                    'Quantity' => $item->Quantity,
                    'classfy' => $item->classify,
                    'type_id' => $item->type_id,

                ]);
               
            }

            cart::where('cus_id', $data['customer_id'])->delete();
            if($request->coupon){
                $check = coupon::where('code',$request->coupon)->first();
                if($check->quantity>0){
                    coupon::where('code',$request->coupon)->first()->update(['quantity'=>$check->quantity - 1]);
                }
            }
            return redirect()->route('view.cart');
        }else{
            return redirect()->back()->with('erre','đặt hàng no thành công');
        }
     
    }
}