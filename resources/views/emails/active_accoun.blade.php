<div style="width:600px; margin:0 auto;">
    <div style="text-align:center;">
    <h2>Xin chào bạn {{$customer->cus_name}}</h2>
    <p>Bạn đã đăng ký tài khoản tại hệ thống của shop</p>
    <p>Để có thể thể tiếp tục mua sắm lại  shop Girb vui lòng nhấn vào nút bên dưới để kích hoạt tài khoản</p>
    <p><a href="{{route('active.accoun',['customer' => $customer->id,'token'=> $customer->token])}}"
        style="display:inline-block; background:green; color:#fff; padding:7px 25px; font-weight:bold">Kích hoạt tài khoản</a></p>
    </div>
</div>