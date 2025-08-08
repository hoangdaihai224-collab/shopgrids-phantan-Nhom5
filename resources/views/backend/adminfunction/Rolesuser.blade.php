@extends('backend.linkconec.linkadmin')
@section('linkadmin')
@include('backend.layout.nav')
<div class="container-fluid page-body-wrapper">
    @include('backend.layout.rightmenu')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Phân quyèn</h4>
                        <p class="card-description">
                            
                        </p>
                        <form class="forms-sample" action="{{route('admin.save.rolesuser',$user->id)}}" method="POST" role="from">
                           @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Tên quản trị</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$user->user_name}}"
                                     disabled>
                            </div>
                            @foreach($Roles as $role)
                            <div class="form-check form-check-primary">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="role[]" value="{{ $role->id}}">
                                    {{ $role->name}}
                                    <i class="input-helper"></i></label>
                            </div>
                            @endforeach

                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop()