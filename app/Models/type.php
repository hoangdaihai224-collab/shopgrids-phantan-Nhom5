<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;
    protected $table = 'tbl_type';
    protected $fillable = ['cat_id','type','status'];
    function typelist(){
        return $data =  type::orderBy('type', 'ASC')->get();
    }
    function catty(){
        return $this->hasOne(category::class,'id','cat_id');
    }
}
