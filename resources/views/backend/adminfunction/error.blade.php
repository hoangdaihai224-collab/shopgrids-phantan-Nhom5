@extends('backend.linkconec.linkadmin')
@section('linkadmin')
@include('backend.layout.nav')
<div class="container-fluid page-body-wrapper">
    @include('backend.layout.rightmenu')
    <div class="main-panel">
    <div class="content-wrapper">
      <h1>Bạn deck có quyền vào đây</h1>
    </div>
    @include('backend.layout.footer')
</div>
</div>   
@stop()