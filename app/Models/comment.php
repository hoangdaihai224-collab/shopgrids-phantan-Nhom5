<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table = 'tbl_comment';
    protected $fillable = ['id_customer','id_blog','ND_comment'];

    function commen(){
        return $this->hasOne(customer::class,'id','id_customer');//kiểu như join
    }
    public function replies(){
    	return $this->hasMany('App\Models\reply');
    }
}
