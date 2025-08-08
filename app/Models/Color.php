<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Color extends Model
{
    use HasFactory;
    protected $table = 'tbl_color';
    protected $fillable = ['color_name','status'];

    function Colorlist(){
        return $data =  Color::orderBy('color_name', 'ASC')->get();
    }
    
     
}
