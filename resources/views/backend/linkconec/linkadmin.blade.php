<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ URL::asset('assets/backend/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/backend/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="shortcut icon" href="{{ URL::asset('assets/backend/images/favicon.png') }}" />

  <link rel="stylesheet" href="{{ URL::asset('assets/backend/css/style.css') }}"> 
  <link rel="stylesheet" href="{{ URL::asset('summernote/summernote-bs4.min.css') }}"></script>
  <link rel="stylesheet" href="{{ URL::asset('summernote/summernote.min.css') }}"></script>
  <!-- endinject -->
  <style>
      .row{
          display:flex;
      }
       .form-control:focus{
       border:1px solid #94c5b1;
      }
      </style>

</head>
<body>

  <div class="container-scroller">
   
      @yield('linkadmin')
      
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
 
  <script src="https://code.jquery.com/jquery.min.js"></script>
  <script src="{{ URL::asset('assets/backend/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ URL::asset('assets/backend/vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ URL::asset('assets/backend/js/off-canvas.js') }}"></script>
  <script src="{{ URL::asset('assets/backend/js/misc.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ URL::asset('assets/backend/js/dashboard.js') }}"></script>
  <script src="{{ URL::asset('summernote/summernote.min.js') }}"></script>
  <script src="{{ URL::asset('summernote/summernote-bs4.js') }}"></script>
  <!-- End jsrolor js for this page-->
      @yield('jsrolor')
  <!-- End custom js for this page-->
  <script>
  function get_type(a) {
    // alert(a);
    $.ajax({
        url:"http://localhost:8080/electronice/api/ajax-category/"+a,
        type:"GET",

        success: function(res){
          // console.log(res);
          let html = "";   
          html+='<label for="exampleTextarea1">Chọn kiểu</label><div class="form-group" style="display:flex; ">';
          for(var types of res){
           
              html +='<div class="form-check"  style="margin-left:20px;">';
              html +='<label class="form-check-label" style="margin-left:18px;"><input type="checkbox" class="form-check-input" name="type_id[]" value="'+types.id+'" >'+types.type+'<i class="input-helper"></i></label>';
              html +='</div>';
            
              
          }
          html +='</div>';
          $('#type').html(html);
        }
    });
  }
</script>

  <script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
  </script>
  <script>
    $(document).ready(function() {
  $('#summernote2').summernote();
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
 <script>
  $('#other_img').change(function(){
  var other_file = $(this);
  var img_input = other_file[0];//truy cậm vào phàn tử input ="file"
  $('#show_other_img').html('')
 for(let i = 0 ; i < img_input.files.length ; i++ ){
   let  orther_file = img_input.files[i];
   var reader = new FileReader()
   reader.onload = function(ev){
    var _img = '<div class="col-md-2" style="height:200px; overflow:hidden;">';
        _img += '<img src="'+ ev.target.result +'" style="width:100%;">';
        _img += '</div>';
        $('#show_other_img').append(_img)
  }
  reader.readAsDataURL(orther_file);
 }
});
 </script>
 

</body>

</html>
