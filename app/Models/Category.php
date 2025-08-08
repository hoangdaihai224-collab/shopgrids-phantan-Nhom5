<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Category extends Model
{
    use HasFactory;
    protected $table = 'tbl_category';
    protected $fillable = ['cat_name','status','parden_id','typecat'];

    function ListCategory(){
        return $data =  Category::orderBy('cat_name', 'ASC')->where('typecat', '=', 2)->paginate(20);
    }
    function ListCatblog(){
        return $data =  Category::where('typecat', '=', 3)->paginate(20);
    }
    function child(){
        return $this->hasOne(Category::class,'parden_id','id');
    }
    function childcat(){
        return $this->hasMany(Category::class,'parden_id','id');
    }
    function catpr(){
        return $this->hasMany(product::class,'cat_id','id');
    }
    function catlo(){
        return $this->hasMany(Blog::class,'category','id');
    }
     
}
