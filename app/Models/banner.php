<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    use HasFactory;
    protected $table = 'tbl_banner';
    protected $fillable = ['title','image','url','target','description','type','position','status'];
}
