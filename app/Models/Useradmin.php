<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;
use App\Models\UserRole ;
// use Laravel\Sanctum\HasApiTokens;

class Useradmin extends Authenticatable
{
    use  Notifiable;

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var string[]
    //  */HasApiTokens, HasFactory,
    protected $table = 'tbl_useradmin';
    protected $fillable = [
        'user_name',
        'user_email',
        'user_phone',
        'password',
        'avatar',
    ];
    // public function permissions()
    // {
    //    return['add.category','save.category','list.category'];
    // }
    public function hasPermission($route)
    {
        $routes = $this->routes();
       
        return in_array($route,$routes)  ? true :false ;
    
    }
    public function routes(){
    //    $roles = $this->getRoles();
   
        $data = [];
        foreach($this->Roles as $role){
            $permission = json_decode($role->permissions);
            
            foreach($permission as $per){
                if(!in_array($per,$data)){
                    array_push($data, $per);
                }
            }
           
      
        }
      
        return $data;
    }
    public function Roles()
    {
        return $this->belongsToMany('App\Models\Role','tbl_user_roles','user_id','role_id');
    }
}
//     /**
//      * The attributes that should be hidden for serialization.
//      *  $table->id();
           
//      * @var array
//      */
//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     /**
//      * The attributes that should be cast.
//      *
//      * @var array
//      */
//     protected $casts = [
//         'email_verified_at' => 'datetime',
//     ];


