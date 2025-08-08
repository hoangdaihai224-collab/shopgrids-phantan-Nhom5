<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class protype extends Model
{
    use HasFactory;
    protected $table = 'tbl_protype';
    protected $fillable = ['pro_id','type_id'];
    public function tps() {
        return $this->hasOne(type::class,'id','type_id');
    }
}
