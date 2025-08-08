<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    
    use HasFactory;
    protected $table = 'tbl_reply';
    protected $fillable = ['comment_id','cus_id','reply'];
    function commenreply(){
        return $this->hasOne(customer::class,'id','cus_id');//kiểu như join
    }
}
