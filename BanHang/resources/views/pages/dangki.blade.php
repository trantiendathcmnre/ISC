@extends('layouts.index')

@section('title','Đăng kí')
@section('css')
<style type="text/css" media="screen">
    body{
        background: #F3F3F3;
    }
</style>
@endsection

@section('content')
<!-- Page Content -->
<div class="container">
	<div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
			  	<div class="panel-heading" style="background-color: red; color: #FFF">Đăng ký tài khoản</div>
			  	<div class="panel-body">
			  		@if(count($errors) > 0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{ $err }}<br>
							@endforeach
						</div>
						@endif

					@if(session('thongbao'))
					<div class="alert alert-success">
						{{ session('thongbao') }}
					</div>
					@endif	

			    	<form action="dangki" method="POST">
			    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			    		<div>
			    			<label>Họ tên</label>
						  	<input type="text" class="form-control" placeholder="Họ tên" name="name" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
			    			<label>Email</label>
						  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
						  	>
						</div>
						<br>	
						<div>
			    			<label>Mật khẩu</label>
						  	<input type="password" class="form-control" name="password" aria-describedby="basic-addon1" placeholder="Mật khẩu">
						</div>
						<br>
						<div>
			    			<label>Nhập lại mật khẩu</label>
						  	<input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1" placeholder="Nhập lại mật khẩu">
						</div>
						<br>
						<button type="submit" class="btn btn-danger">Đăng ký
						</button>

			    	</form>
			  	</div>
			</div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <!-- end slide -->
</div>
<!-- end Page Content -->
@endsection