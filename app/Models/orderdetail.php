<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    use HasFactory;
    protected $table = 'tbl_orderdetail';
    protected $fillable = ['order_id','product_id','price','Quantity','classfy','type_id'];
    function colors(){
        return $this->hasOne(color::class,'id','classfy');
    }
    function typs(){
        return $this->hasOne(type::class,'id','type_id');
    }
    function product(){
        return $this->hasOne(product::class,'id','product_id');
    }
}
