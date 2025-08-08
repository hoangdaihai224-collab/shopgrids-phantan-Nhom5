<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\coupon;
use App\Models\product;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function addcoupon()
    {
        return view('backend/adminfunction/Addcoupon');
    }
    public function savecoupon(Request $req)
    {
        coupon::create($req->all());
        return redirect()->back()->with('success',"Thêm Coupon thành công");
    }
    public function Listcoupon()
    {
        $data = coupon::all();
        return view('backend/adminfunction/ListCoupon',compact('data'));
    }
    public function deletecoupon($id)
    {
        coupon::find($id)->delete(); 
        return redirect()->route('admin.list.coupon')->with('delete',"Xóa Danh muc thành công"); 
    }
    public function editcoupon($id)
    {
        $coupon = coupon::find($id); 
        return view('backend/adminfunction/EditCoupon',compact('coupon'));
    }
    public function updatecoupon($id, Request $req)
    { 
        coupon::find($id)->update($req->all());
        return redirect()->route('admin.list.coupon')->with('update',"Sửa thành công"); 
    }
}
