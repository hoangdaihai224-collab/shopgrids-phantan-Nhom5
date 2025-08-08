@extends('backend.linkconec.linkadmin')
@section('linkadmin')
@include('backend.layout.nav')
<div class="container-fluid page-body-wrapper">
    @include('backend.layout.rightmenu')
    <div class="main-panel">
        <div class="content-wrapper">
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
                            <h4 class="card-title">Striped Table</h4>
                            <p class="card-description">
                                Add class <code>.table-striped</code>
                            </p>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>code</th>
                                        <th>for order price form</th>
                                        <th>quantity</th>
                                        <th>value</th>
                                        <th>status</th>
                                        <th>created at</th>
                                        <th>Deadline</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $data as $coupon )
                                    <tr>
                                        <th>{{$coupon->id}}</th>
                                        <td>{{$coupon->code}}₫</td>
                                        <td>{{$coupon->for}}₫</td>
                                        <td>{{$coupon->quantity}}</td>
                                        <td>{{number_format($coupon->value)}} </td>
                                        <td class="py-1">{{ $coupon->status== "1" ? 'đang áp dụng' : 'đang ẩn'}}</td>
                                        <td>{{$coupon->created_at}}</td>
                                        <td>
                                            <form action="{{route('admin.delete.coupon',$coupon->id)}}" method="POST">
                                                 @method('DELETE') @csrf 
                                                <a href="{{route('admin.edit.coupon',$coupon->id)}}" class="text-dark" style="text-decoration: none"><i
                                                        class="mdi mdi-table-edit"
                                                        style="font-size:20px; color:#9a55ff;"></i> Edit </a>
                                                <button class="border-0 btn-link text-dark"
                                                    style="text-decoration: none"
                                                    onclick="return confirm('Bạn chắc chắn muốn xóa mã này không?');">
                                                    <i class="mdi mdi-delete-forever"
                                                        style="font-size:20px; color:#9a55ff;"></i>Delete </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
             
          </div>
        </div>
        @include('backend.layout.footer')
    </div>
</div>
@stop()