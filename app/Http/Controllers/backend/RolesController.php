<?php

namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Route;


class RolesController extends Controller
{
   public function index()
   {
    $data= Role::paginate(10);
      return view('backend/adminfunction/listRoles', compact('data'));
   }
   public function create()
   {
       $routes = [];
       $all = Route::getRoutes();
       foreach($all as $r){
           $name = $r->getName();
           $pos = strpos($name ,'admin');
           if($pos !== false && !in_array($name,$routes)){
            array_push($routes,$name);
           }
         
       }
     
       
      return view('backend/adminfunction/AddRole', compact('routes'));
   }
   function saverole(Request  $request)
   {
       $route = json_encode($request->route);
      
      Role::create([
          'name'=>$request->name,
          'permissions'=>$route
      ]);
      return redirect()->route('admin.list.roles')->with('delete',"Xóa Thương hiệu  thành công"); 
   }
   public function editrole($id)
   {
    $data = Role::find($id);
    $permissions = json_decode( $data->permissions);

    $routes = [];
    $all = Route::getRoutes();
    foreach($all as $r){
        $name = $r->getName();
        $pos = strpos($name ,'admin');
        if($pos !== false && !in_array($name,$routes)){
         array_push($routes,$name);
        }
      
    }
    
   return view('backend/adminfunction/EditRoles', compact('routes','data','permissions'));
}
public function updateroles($id ,Request  $request , Role $role)
{
    $routes = json_encode($request->route);
    
    
   $a =  Role::find($id)->update([
        'name'=>$request->name,
        'permissions'=>$routes
    ]);
    return redirect()->route('admin.list.roles')->with('delete',"Xóa Thương hiệu  thành công"); 
  

}
   }