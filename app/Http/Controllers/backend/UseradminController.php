<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequests;
use Illuminate\Http\Request;
use App\Models\Useradmin;
use App\Models\Role;
use App\Models\UserRole ;
use Auth;

class UseradminController extends Controller{
    public function Signup(){
        return view('backend/adminfunction/Signup');
    }
    public function post_Sigup(UserRequests $request){
    $filename = $request->avatar->getClientOriginalName();
    $request->avatar->move(public_path('avatars'),$filename);
    $data = $request->all();
    $data['avatar']= $filename;
    $data['password']= bcrypt($request['password']);
    if(Useradmin::create($data)){
        return redirect()->route('backend.Signin')->with('flas_ok','Bạn có thể đăng nhập');
    }
    return redirect()->back()->with('error','Dăng ký No thành công');
    }
    public function Signin() {
        return view('backend/adminfunction/Signin');
    }
    function post_Signin(Request $request){
   
        $login_data = [
            'user_name' => $request->user_name,
            'password' => $request->password,
        ];
                session(['login' => $login_data]);
        $check_login = Auth::attempt($login_data, true);
    
        if($check_login){
            return redirect()->route('admin.backend.Home');
        }
        return redirect()->back()->with('error','Mật khẩu hoặc tên tài khoản không đúng');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('backend.Signin');
    }
    public function listuser()
    {
        $data= Useradmin::paginate(10);
        return view('backend/adminfunction/Listuser', compact('data'));
    }
    public function roletuser(Useradmin $user)
    {
    $Roles = Role::orderBy('name' ,'ASC')->get();
        return view('backend/adminfunction/Rolesuser', compact('user','Roles'));
    }
    public function seveRoleuser(Request $request,Useradmin $user )
    {
        UserRole::where('user_id',$user->id)->delete();
        if(is_array($request->role)){
            foreach($request->role as $role_id){
                UserRole::create([
                    'user_id'=> $user->id,
                    'role_id'=> $role_id
                ]);
            }
        }
        return redirect()->route('admin.list.user');

    }
    public function edituser(Useradmin $user ,Role $role)
    {
        $role_assimen = $user->Roles->pluck('name','id')->toArray();
        $roles = Role::orderBy('name' ,'ASC')->get();
        return view('backend/adminfunction/Edituser',compact('user','roles','role_assimen'));
    }
    public function updateuser(Request $request,Useradmin $user ,UserRole $UserRole)
    {
        $rules = [
            'user_name' =>'required',
            'user_email'=>'required|email|unique:tbl_useradmin,user_email,'.$user->id,
        ];
        $messages = [

        ];
        if($request->password){
            $rules['confirm_password'] = 'required|same:password';
            $messages['confirm_password.required'] = 'Vui loong Nhập lại mật khẩu';
            $messages['confirm_password.same'] = 'mật khẩu No khớp';
        }
        $request->validate($rules,$messages);
        $data = [
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'user_phone' => $request->user_phone,
            'password' => $request->password ? bcrypt($request->password) :$user->password,

        ];
       

        $user->update($data);
        UserRole::where('user_id',$user->id)->delete();
        if(is_array($request->role)){
           
            foreach($request->role as $role_id){
                UserRole::create([
                    'user_id'=> $user->id,
                    'role_id'=> $role_id
                ]);
            }
        }
        return redirect()->route('admin.list.user');
    }

    public function error()
    {
       $code  = request()->code;
      
       return view('backend/adminfunction/error');
    }
    public function profile()
    {
        $accoun = Auth::user();

        return view('backend/adminfunction/Profile',compact('accoun'));
    }
    public function up_profile(Request $request )
    {
        $accoun = Auth::user();
        $data = $request->only('user_name','user_email','user_phone','avatar');
        if(!$request['image']){
            $request['image'] =$accoun->avatar;
        }else{
            $file = $request->image;
            $ex= $file->extension();
             $base_name = strtoupper(\Str::random(10));
             $filename = time().'-'.date('d-m-Y').'-'.$base_name.'.'.$ex;
             $file->move(public_path('avatars'), $filename );
             $data['avatar'] =  $filename;
             
        }
        $rules = [
            'user_name' =>'required',
            'user_phone' => 'required|numeric|unique:tbl_useradmin,user_phone,'.$accoun->id,
            'user_email'=>'required|email|unique:tbl_useradmin,user_email,'.$accoun->id,
        
        ];
        $messages = [
            'user_name.required' => 'Họ tên không được để trống',
            'user_phone.required' => 'Số điện thoại ko đc để trống',
            'user_phone.numeric' => 'Số điện thoại ko đúng',
            'user_phone.unique' => 'số điện thoại đã dược dủ dụng',
            'user_email.required' => 'Email tên không được để trống',
            'user_email.email' => 'Email không đúng định dạng',
            'user_email.unique' => 'Email này đã được sử dụng',
         
        ];
        $request->validate($rules,$messages);
        if($request->newpassword){
            $request->validate([
                'passwordold' =>'required|check_passwordold',
                'newpassword' =>'required',
                'confirm_password' => 'required|same:newpassword',
            ],[
                'passwordold.required'=> 'Vui loong Nhập lại mật khẩu cũ',
                'passwordold.check_passwordold'=>'mk cũ no cx',
                'confirm_password.required'=> 'Vui loong Nhập lại mật khẩu',
                'confirm_password.same' => 'mật khẩu No khớp',
            ]);
            $new_pass= bcrypt($request->newpassword);
            $accoun->update(['password'=>$new_pass]);
        }
 
        
        Auth::user()->update($data);
        Auth::logout();
        return redirect()->route('admin.backend.Home');
    }
    public function changepassword(Request $request)
    {
        # code...
    }

}