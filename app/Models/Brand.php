<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'tbl_brand';
    protected $fillable = ['brand_name','img_brand','status'];

    function brandlist(){
        return $data =  Brand::orderBy('brand_name', 'ASC')->get();
    }
    
     
}
