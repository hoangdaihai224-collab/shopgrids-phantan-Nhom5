<h3>Xin chào bạn:{{$customer->cus_name}}</h3>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatem eaque explicabo vel nisi quidem fugiat consectetur hic, harum suscipit repudiandae voluptates reiciendis nobis, accusamus distinctio aliquid necessitatibus esse ad.
    Ut, odit nesciunt reiciendis, dolorem quibusdam nemo totam et eveniet voluptas necessitatibus fugiat expedita id ipsum aliquam nihil ullam maxime magnam inventore voluptatibus labore non iste minus asperiores? Eum, minus.
    Laborum laudantium ratione molestias nostrum itaque, aspernatur quibusdam officia ipsum doloremque. Accusantium nihil veniam debitis eos! Sed autem, error velit ullam nobis consectetur omnis molestias eveniet dignissimos quasi ea possimus.
</p>
<p>
    Vui long click vào link <a href="{{route('cus.newgetpassword',['email'=>$customer->cus_email ,'token'=>$token])}}">Tạo mật khẩu mới</a>
</p>