<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orderdetail ;

class order extends Model
{
    use HasFactory;
    protected $table = 'tbl_order';
    protected $fillable = ['customer_id','order_name','order_email','order_phone','City','district','commune','Address','order_note','total_price','status','coupon'];
    
    function detail($id){
        return $a = orderdetail::where('order_id',$id)->get();
    }
    public function ordes()
    {
        return $this->hasMany(orderdetail::class,'order_id','id');
    }
    public function total()
    {

       $tol = 0;
       foreach($this->ordes as $item){
           $tol += $item->price * $item->Quantity;
       }
       return $tol;
    }
    public function quanti()
    {
        
       $qatt = 0;
       foreach($this->ordes as $item){
           $qatt += $item->Quantity;
       }
       return $qatt;
    }

}
