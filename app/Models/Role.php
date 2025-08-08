<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Role extends Model
{
    use HasFactory;
    protected $table = 'tbl_roles';
    protected $fillable = ['name','permissions'];

     
}
