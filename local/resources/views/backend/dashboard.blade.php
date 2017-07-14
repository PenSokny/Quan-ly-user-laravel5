@extends('backend/master')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main ">
        <div class="text-justify jumbotron">
          @include('errors/alert')
          <h1>Xin chào!</h1>
          <p>Chào mừng bạn đến với trang quản trị của Kh Website. Đây là sản phẩm phục vụ mục đích học tập của các học viên khóa học lập trình PHP nâng cao tại Học viện công nghệ Vietpro. Kh Website được viết trên nền framework Laravel 5.3 (mới nhất ở thời điểm hiện tại).</p>
          <p><a class="btn btn-primary btn-lg" href="http://hocthietkeweb.net.vn/" role="button" target="_blank">Learn more &raquo;</a></p>
        </div>
</div>
@stop