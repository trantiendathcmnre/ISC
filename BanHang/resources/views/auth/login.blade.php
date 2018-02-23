
@extends('layouts.index')

@section('title','Đăng nhập')
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

	<!-- slider -->
	<div class="row carousel-holder">
		<div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-default">
			  	<div class="panel-heading" style="background-color: red; color: #fff">Đăng nhập</div>
			  	<div class="panel-body">
					@if(count($errors) > 0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{ $err }}<br>
							@endforeach
						</div>
					@endif

					@if(session('thongbao'))
					<div class="alert alert-danger">
						{{ session('thongbao') }}
					</div>
					@endif	
			    	<form action="dangnhap" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}" placeholder="">
						<div>
			    			<label>Email</label>
						  	<input type="email" class="form-control" placeholder="Email" name="email" 
						  	>
						</div>
						<br>	
						<div>
			    			<label>Mật khẩu</label>
						  	<input type="password" class="form-control" name="password">
						</div>
						<br>
						<button type="submit" class="btn btn-danger">Đăng nhập
						</button>
			    	</form>
			  	</div>
			</div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <!-- end slide -->
</div>
<!-- end Page Content -->
@endsection