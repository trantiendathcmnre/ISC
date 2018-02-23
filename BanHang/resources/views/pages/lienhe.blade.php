@extends('layouts.index')
@section('title','Liên hệ')
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
    <div class="space20"></div>


    <div class="row main-left">
        

        <div class="col-md-12">
            <div class="panel panel-default">            
            	<div class="panel-heading bg-danger" style="background-color:red; color:white;" >
            		<h2 style="margin-top:0px; margin-bottom:0px;">Liên hệ</h2>
            	</div>

            	<div class="panel-body">
            		<!-- item -->
                    <h3><span class="glyphicon glyphicon-align-left"></span> Thông tin liên hệ</h3>
				    
                    <div class="break"></div>
				   	<h4><span class= "glyphicon glyphicon-home "></span> Địa chỉ : </h4>
                    <p>Tòa nhà SaigonTech, Lô 14, Đường số 5, Công viên Phần mềm Quang Trung, Q. 12, Tp. HCM, Việt Nam </p>

                    <h4><span class="glyphicon glyphicon-envelope"></span> Email : </h4>
                    <p>info@iscquangtrung.edu.vn </p>

                    <h4><span class="glyphicon glyphicon-phone-alt"></span> Điện thoại : </h4>
                    <p>0903 76 71 88  </p>



                    <br><br>
                    <h3><span class="glyphicon glyphicon-globe"></span> Bản đồ</h3>
                    <div class="break"></div><br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15673.26140485309!2d106.63417941962713!3d10.863601976197321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752a20250d13cf%3A0x2731dde61e3ddf1a!2sSaigonTech+-+American+University+in+Vietnam!5e0!3m2!1sen!2s!4v1519264078620" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>
            </div>
    	</div>
    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->
@endsection