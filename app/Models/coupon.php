<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coupon extends Model
{
    use HasFactory;
    protected $table = 'tbl_coupon';
    protected $fillable = ['code','for','quantity','value','expiration','status'];

}
