<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Brand;
use App\Models\order;
use App\Models\orderdetail;
use App\Models\product;
use Auth;

class OrderController extends Controller
{
    public function Listorder()    
    {
        $data =  order::orderBy('created_at', 'DESC')->paginate(50);
        // $users = product::search()->paginate(20);
    
        return view('backend/adminfunction/Listorder',compact('data'));
    }
    public function order2( $statu )
    { 
        $data =  order::orderBy('created_at', 'ASC')->where('status',$statu)->paginate(50);
        return view('backend/adminfunction/Listorder' ,compact('data'));
        
    }
    public function Editorder(order $id)
    {
        $order = $id;
        $use = new order();
        
        $status =  $use->detail($order->id);
        // dd($status);
        return view('backend/adminfunction/order_detail',compact('status','order'));
    }
    public function updateorder(order $order,Request $req){
        $or = $req->status;
        if($or==4){
            $use = new order();
            // dd($order->id);
            $status =  $use->detail($order->id);
            // dd($status);
            foreach($status as $stt){
                $sold = 0;
                $warehouse = 0;
                $id = $stt->product_id;
                
                $pro = product::find($id);
                // dd($pro);
                $sold = $pro->sold + $stt->Quantity;
                $warehouse = $pro->warehouse - $stt->Quantity;
                // dd($warehouse);
                // $pro = $stt->Quantity;
                product::where('id',$id)->update(['sold'=>$sold,'warehouse'=>$warehouse]);
                // dd($req->status);
            }
        }
        $order->update($req->only('status'));
        return redirect()->back();
    }
}