<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'tbl_blog';
    protected $fillable = ['blog_title','blog_image','blog_conten','blog_summary','category','status'];
    function cat(){
        return $this->hasOne(category::class,'id','category');//kiểu như join
    }
}
