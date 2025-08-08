@extends('backend.linkconec.linkadmin')
@section('linkadmin')
@include('backend.layout.nav')
<div class="container-fluid page-body-wrapper">
    @include('backend.layout.rightmenu')
    <div class="content-wrapper">
        @if(Session::has('delete'))
        <div class="alert alert-success mx-auto" style="width:400px; text:center;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('delete')}}
        </div>
        @endif
        <div class="page-header">
            <h3 class="page-title">
                Basic Tables
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh Sách Danh Mục</h4>
                        <p class="card-description">
                        danh sách danh mục <code>của sản phẩm</code>
                        </p>

                        <table class="table table-striped">
                            <thead>

                                <tr>

                                    <th>ID</th>
                                    <th>Tên danh mục</th>
                                    <th>số lượng</th>
                                    <th>Tình trạng</th>
                                    <th>Loại danh mục</th>
                                    <th>ngày tạo</th>
                                    <th>cập nhật lần cuối</th>
                                    <th>Thao tác</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php Tablecategory($Cat); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="text-center">
            {{$Cat->appends(request()->all())->links()}}
        </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh Sách Danh Mục</h4>
                        <p class="card-description">
                            danh sách danh mục  <code>của Blog</code>
                        </p>

                        <table class="table table-striped">
                            <thead>

                                <tr>

                                    <th>ID</th>
                                    <th>Tên danh mục</th>
                                    <th>số lượng</th>
                                    <th>Tình trạng</th>
                                    <th>Loại danh mục</th>
                                    <th>ngày tạo</th>
                                    <th>cập nhật lần cuối</th>
                                    <th>Thao tác</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach( $Catbloh as $catlog)
                                <tr>
                                    <th>{{$catlog->id}}</th>
                                    <td>{{$catlog->cat_name}}</td>
                                    <td>{{$catlog->catlo->count()}}</td>
                                    <td>{{$catlog->status== "1" ? 'Hoạt động' : 'NO HĐ'}}</td>
                                    <td>{{$catlog->typecat== "2" ? 'danh mục sản phẩm':'sanh mục blog'}}</td>
                                    <td>{{$catlog->created_at->format('d-m-Y')}}</td>
                                    <td>{{$catlog->updated_at->format('d-m-Y')}}</td>
                                    <td> <form action="{{route('admin.delete.category',$catlog->id )}}" method="POST"> 
                                      @method('DELETE') @csrf 
                                    
                                          <a href="{{ route('admin.edit.category', $catlog->id) }}"
                                                class="text-dark" style="text-decoration: none"><i
                                                    class="mdi mdi-table-edit"
                                                    style="font-size:20px; color:#9a55ff;"></i> Sửa </a>
                                            <button class="border-0 btn-link text-dark"
                                                style="text-decoration: none"
                                                onclick="return confirm('Bạn chắc chắn muốn xóa category này không?');">
                                                <i class="mdi mdi-delete-forever"
                                                    style="font-size:20px; color:#9a55ff;"></i>Xóa </button>

                                            </form></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="text-center">
            {{$Catbloh->appends(request()->all())->links()}}
        </div>
        </div>
        
    </div>
</div>
@stop()

<?php 

function Tablecategory($categories, $pa = 0, $char = ''){
   
  foreach($categories  as $key => $data){
   
      
    if($data->parden_id == $pa){
      echo '<tr>';
        echo '<th>' .$data->id. '</th>';
        echo '<td>' .$char.$data->cat_name.'</td>';
        echo '<td>' . $data->catpr->count().'</td>';?>
<td class="py-1"><?php echo ($data["status"]==1)?"Hiển thị":"Ẩn"; ?></td>
<td class="py-1"><?php echo ($data["typecat"]==2)?"danh mục sản phẩm":"sanh mục blog"; ?></td>
<?php       echo '<td>'.$data->created_at->format('d-m-Y'). '</td>';
        echo '<td>'. $data->updated_at->format('d-m-Y'). '</td>';
        echo '<td>';
          echo  '<form action="'.route('admin.delete.category',$data->id ).'" method="POST"> '  ;
          echo   ' <input type="hidden" name="_method" value="DELETE"> '.csrf_field();
                 echo '<a href="'.route('admin.edit.category', $data->id ).'" class="text-dark" style="text-decoration: none"><i 
                  class="mdi mdi-table-edit"
                  style="font-size:20px; color:#9a55ff;"></i> Sửa </a>';
                 echo '<button class="border-0 btn-link text-dark" style="text-decoration: none"
                  onclick="return confirm(\'Bạn chắc chắn muốn xóa category này không?\');">
                  <i class="mdi mdi-delete-forever"
                      style="font-size:20px; color:#9a55ff;"></i>Xóa </button>';
               
                      echo '<a href="'.route('admin.add.subcat', $data->id).'" class="text-dark" style="text-decoration: none"><i
                      class="mdi mdi-apple-keyboard-shift" style="font-size:20px; color:#9a55ff;"></i> Thêm DM con </a>';
                     
           echo '</form>';
        echo '</td>';
    echo '</tr>';
    //  unset($categories[$key]);

    Tablecategory($categories, $data->id, $char.'  --  ');
  

    }
  }
}
?>