<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\procolor;

class product extends Model
{
    use HasFactory;
    protected $table = 'tbl_product';
    protected $fillable = ['pro_name','cat_id','images','price','price_sale','id_brands','sold','warehouse','favorite','description','status'];
    public function lisproduct()
    {
        return $data  = product::orderBy('pro_name', 'ASC')->paginate(50);
    }
    function cat(){
        return $this->hasOne(category::class,'id','cat_id');
    }
    function brand(){
        return $this->hasOne(brand::class,'id','id_brands');
    }
  
    public function color() 
    {
        return $this->hasMany(procolor::class,'pro_id','id');
    }
    public function types() 
    {
        return $this->hasMany(protype::class,'pro_id','id');
    }
   
    public function proImages() 
    {
        return $this->hasMany(productimages::class,'product_id','id');
    }
    public function scopeHomeproduct($query , $limit = 8)
    {
        $query = $query->orderBy('sold','DESC')->limit($limit);
        return $query;
    }
    public function scopeByprice($query , $limit = 8)
    {
        $query = $query->orderBy('price','DESC')->limit($limit);
        return $query;
    }
    public function scopeSearch($query)
    {
        if(request('key')){
            $key = request('key');
            $query = $query->where('pro_name','like','%'.$key.'%');
        }
        if(request('brande')){
            $query = $query->where('id_brands',request('brande'));
        }
        if(request('brandcat')){
            $query = $query->where('id_brands',request('brandcat'));
        }
        if(request('min') && request('max')){
            $min=request('min');
            $max=request('max');
            $query = $query->whereBetween('price', [$min,$max])->orwhereBetween('price_sale', [$min,$max]);;
        }
        if(request('category')){
            $query = $query->where('cat_id',request('category'));
        }
        return $query;
    }
    public function scopeProductshop($query )
    {
        return  $query->inRandomOrder();
    }
    public function scopeProductshop2($query )
    {
        // $pri =price_sale > 0  ?price_sale :price ;;
        return  $query->orderBy('sold','DESC');
                     
    }
    public function scopePronew($query )
    {
      
        return  $query->orderBy('created_at','DESC');
                     
    }
}
