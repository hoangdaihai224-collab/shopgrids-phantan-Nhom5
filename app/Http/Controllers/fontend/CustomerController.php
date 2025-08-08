<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;
use Auth;



class CustomerController extends Controller
{
    public function Login()
    {
        return view('fontend/page/Signin');
    }
    function post_login(Request $request){
   
        $login_data =  $request->only('cus_name','password');
        $check_login = Auth::guard('cus')->attempt($login_data, $request->has('remember'));
    
        if($check_login){
            if(Auth::guard('cus')->user()->status == 0){
                Auth::guard('cus')->logout();
                return redirect()->route('cus.Login')->with('no','Tài khoản của bạn chưa được kích hoạt');
            }
            return redirect()->route('Home');
        }
        return redirect()->back()->with('error','Mật khẩu hoặc tên tài khoản không đúng');
}

    public function register()
    {
        return view('fontend/page/Register');
    }
    public function post_register(Request $request)
    {
        $request->validate([
            'cus_name' => 'required',
            'cus_email' => 'required|email|unique:tbl_customer',
            'password' => 'required',
            'Confirm_Password' => 'required|same:password'
    
        ]);
 
        $token = strtoupper(\Str::random(10)); 
        $file = $request->image;
        $ex= $file->extension();
         $base_name = strtoupper(\Str::random(10));
         $filename = time().'-'.date('d-m-Y').'-'.$base_name.'.'.$ex;
         $file->move(public_path('avatarcus'), $filename );
         $data = $request->all();
         $data['avatar'] =  $filename;
         $data['token'] =  $token;
        $data['password']= bcrypt($request['password']);
      
        
        if($customer = customer::create($data)){
            \Mail::send('emails.active_accoun', compact('customer'),function($email) use($customer){
                $email->subject('Shop Girb - Xác nhận tài khoản');
                $email->to($customer->cus_email, $customer->cus_name);
            });
            return redirect()->route('cus.Login')->with('yes','đăng kí tài khản thành công vui lòng xác nhận email để kích hoạt tài khoản');
        }
        return redirect()->back()->with('error','Dăng ký No thành công');
    }
    public function logout()
    {
        Auth::guard('cus')->logout();
        return redirect()->route('Home');
    }
    public function account()
    {
        $accoun = Auth::guard('cus')->user();
        return view('fontend/page/profile' ,compact('accoun'));
    }
    public function up_account(Request $request)
    {
        $accoun = Auth::guard('cus')->user();
        $data = $request->only('cus_name','cus_email','cus_phone','avatar');
        if(!$request['image']){
            $request['image'] =$accoun->avatar;
        }else{
            $file = $request->image;
            $ex= $file->extension();
             $base_name = strtoupper(\Str::random(10));
             $filename = time().'-'.date('d-m-Y').'-'.$base_name.'.'.$ex;
             $file->move(public_path('avatarcus'), $filename );
             $data['avatar'] =  $filename;
             
        }
        $rules = [
            'cus_name' =>'required',
            'cus_phone' => 'required|numeric|unique:tbl_customer,cus_phone,'.$accoun->id,
            'cus_email'=>'required|email|unique:tbl_customer,cus_email,'.$accoun->id,
        
        ];
        $messages = [
            'cus_name.required' => 'Họ tên không được để trống',
            'cus_phone.required' => 'Số điện thoại ko đc để trống',
            'cus_phone.numeric' => 'Số điện thoại ko đúng',
            'cus_phone.unique' => 'số điện thoại đã dược dủ dụng',
            'cus_email.required' => 'Email tên không được để trống',
            'cus_email.email' => 'Email không đúng định dạng',
            'cus_email.unique' => 'Email này đã được sử dụng',
         
        ];
        $request->validate($rules,$messages);
        if($request->newpassword ){
            $request->validate([
                'passwordold' =>'required|checks_passwordold',
                'newpassword' =>'required',
                'confirm_password' => 'required|same:newpassword',
            ],[
                'passwordold.required'=> 'Vui loong Nhập lại mật khẩu cũ',
                'passwordold.checks_passwordold'=>'mk cũ no cx',
                'confirm_password.required'=> 'Vui loong Nhập lại mật khẩu',
                'confirm_password.same' => 'mật khẩu No khớp',
            ]);
            $new_pass= bcrypt($request->newpassword);
            $accoun->update(['password'=>$new_pass]);
        }
 
        
        Auth::guard('cus')->user()->update($data);
        Auth::guard('cus')->logout();
        return redirect()->route('Home');
    }
    public function forgetpassword()
    {
        return view('fontend/page/emailchanpas');
    }
    public function postpassword(Request $request)
    {
        $request->validate([
            'cus_email' => 'required|email|exists:tbl_customer'
        ]);
        $customer = customer::where('cus_email',$request->cus_email)->first();
        $token = strtolower(\Str::random(10));
        try{
            \Mail::send('emails.forget-password', ['token' => $token,'customer'=>$customer] , function($mail) use($customer){
                $mail->to($customer->cus_email , $customer->cus_name)->subject('lấy lại mật khảu');
        });
        customer::where('cus_email',$request->cus_email)->update(['token' => $token]);
        return redirect()->back()->with('success','vui long xem lại email'. $customer->cus_email.'để thực hiện bước kế tiép' );
    }catch (\Throwable $th){
        return redirect()->back()->with('erro','gặp sự cố');
    }
    }
    public function newgetpassword()
    {
        return view('fontend/page/newpassword');
    }
    public function postgetpassword($email , $token ,Request $request)
    {
        $customer = customer::where(['token' => $token,'cus_email'=>$email])->first();
        if($customer){
            $pas_has = bcrypt($request->newpassword);
            $check_update =  customer::where('cus_email',$email)->update(['token' => NULL,'password'=>$pas_has ]);
            if($check_update){
                return redirect()->back()->with('success','vui long xem lại email'. $customer->cus_email.'để thực hiện bước kế tiép' );    
            }
        }
        return redirect()->back()->with('erro','gặp sự cố');
    }
    public function actived(customer $customer ,$token)
    {
        if($customer->token === $token){
            $customer->update(['status'=> 1,'token'=>null]);
            return redirect()->route('cus.Login')->with('yes','Đã xác nhận tài khoản bạn có thể đăng nhập');
        }else{
            return redirect()->route('cus.Login')->with('no','Mã xác nhận bạn gửi không hợp lệ hoặc bạn đã kick hoạt rồi');
        }
    }
}