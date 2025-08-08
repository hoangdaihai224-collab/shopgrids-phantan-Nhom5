<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class cart extends Model
{
    use HasFactory;
    protected $table = 'tbl_cart';
    public $timestamps= false ; 
    protected $fillable = ['pro_id','classify','type_id','price','price_sale','Quantity','cus_id'];
    
    function cartall(){
        $check = Auth::guard('cus')->user();
        return $data = cart::where('cus_id',$check->id)->get();
    }
    function quantall(){
        if($check = Auth::guard('cus')->user()){
        return $data = cart::where('cus_id',$check['id'])->count();
        }else{
            return $a = 0 ;
        }
    }
    

    public function product()
    {
        return $this->hasOne(product::class,'id','pro_id');
    }
    public function cols() 
    {
        return $this->hasMany(procolor::class,'pro_id','pro_id');
    }
    public function typecar() 
    {
        return $this->hasMany(protype::class,'pro_id','pro_id');
    }



   
}
