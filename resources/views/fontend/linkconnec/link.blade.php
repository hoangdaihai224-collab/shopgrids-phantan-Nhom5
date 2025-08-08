<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ShopGrids | </title>
    <!-- @yield('title') -->
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="@yield('keywords')">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/fontend/images/favicon.svg') }}" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ URL::asset('assets/fontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/fontend/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/fontend/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/fontend/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/fontend/css/main.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/fontend/css/main2.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/fontend/css/main3.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/fontend/css/main4.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/fontend/css/main5.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/fontend/css/menu.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/fontend/css/checkout.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/fontend/font/css/all.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/fontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/fontend/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('summernote/summernote.min.css') }}">
  
    <style>
    .pagination {
        display: flex;
    }
   
    
        </style>

</head>

<body>
    @yield('link')
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="{{ URL::asset('assets/fontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/fontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/fontend/js/tiny-slider.js') }}"></script>
    <script src="{{ URL::asset('assets/fontend/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('assets/fontend/js/main.js') }}"></script>
    <script src="{{ URL::asset('assets/fontend/font/js/all.min.js') }}"></script>

  
    <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon="{&quot;rayId&quot;:&quot;685e8dbc2e5d45dd&quot;,&quot;version&quot;:&quot;2021.8.1&quot;,&quot;r&quot;:1,&quot;token&quot;:&quot;93dd3b16eaea413cbf84c7c6b5a1817a&quot;,&quot;si&quot;:10}">
    </script>
      <script src="{{ URL::asset('summernote/summernote.min.js') }}"></script>
    <script src="{{ URL::asset('summernote/summernote-bs4.js') }}"></script>
    <script >
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    </script>
    @yield('jschekout')
    @yield('jsshop')
    @yield('jsabout')
    @yield('blog')
   
    <script>
    const finaleDate = new Date("October 30, 2021 00:00:00").getTime();
    const timer = () => {
        const now = new Date().getTime();
        let diff = finaleDate - now;
        if (diff < 0) {
            document.querySelector('.alert').style.display = 'block';
            document.querySelector('.container').style.display = 'none';
        }

        let days = Math.floor(diff / (1000 * 60 * 60 * 24));
        let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
        let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
        let seconds = Math.floor(diff % (1000 * 60) / 1000);

        days <= 99 ? days = `0${days}` : days;
        days <= 9 ? days = `00${days}` : days;
        hours <= 9 ? hours = `0${hours}` : hours;
        minutes <= 9 ? minutes = `0${minutes}` : minutes;
        seconds <= 9 ? seconds = `0${seconds}` : seconds;

        document.querySelector('#days').textContent = days;
        document.querySelector('#hours').textContent = hours;
        document.querySelector('#minutes').textContent = minutes;
        document.querySelector('#seconds').textContent = seconds;

    }
    timer();
    setInterval(timer, 1000);
    </script>
   
    <script type="text/javascript">
    //========= Hero Slider 
    tns({
        container: '.hero-slider',
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 0,
        items: 1,
        nav: false,
        controls: true,
        controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
    });

    //======== Brand Slider
    tns({
        container: '.brands-logo-carousel',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 3,
            },
            768: {
                items: 5,
            },
            992: {
                items: 6,
            }
        }
    });
    </script>
    <script type="text/javascript">
    const current = document.getElementById("current");
    const opacity = 0.6;
    const imgs = document.querySelectorAll(".img");
    imgs.forEach(img => {
        img.addEventListener("click", (e) => {
            //reset opacity
            imgs.forEach(img => {
                img.style.opacity = 1;
            });
            current.src = e.target.src;
            //adding class 
            //current.classList.add("fade-in");
            //opacity
            e.target.style.opacity = opacity;
        });
    });
    </script>
    <script>
  $('#select_img').change(function(){
  var select_file = $(this);
  var file_input = select_file[0];//truy cậm vào phàn tử input ="file"
  var file = file_input.files[0];// truy cập vào thuộc tính file[0] để lấy dứ liệu file

  //đọc cái nội dung file thông qua fileReader
  var reader = new FileReader()
  reader.onload = function(ev){
    $('#show_img').attr('src', ev.target.result);
  }
  reader.readAsDataURL(file);
   });
 </script>
 <script>
  $('#show_img').click(function(){
    $('#select_img').click();

  });
 </script>

    @yield('jscart')

</body>

</html>