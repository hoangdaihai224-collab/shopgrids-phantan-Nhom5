<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class procolor extends Model
{
    use HasFactory;
    protected $table = 'tbl_procolor';
    protected $fillable = ['pro_id','color_id'];
    function colors(){
        return $this->hasOne(Color::class,'id','color_id');
    }
    public function scopeSearch($query)
    {
       
        if(request('colors')){
            $query = $query->where('color_id',request('colors'));
        }
        return $query;
    }
}
