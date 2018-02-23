@extends('layouts.index')
@section('title','Chi tiết sản phẩm')
@section('css')
<style type="text/css" media="screen">

	.fs-tsbox {
    padding: 10px;
    background-color: #f6f6f6;
    border: solid 1px #eaeaea;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    }
    ul{
    	list-style: none;
    }
    .fs-tsbox ol li {
        margin-bottom: 5px;
        position: relative;
        padding-left: 14px;
        list-style: none;
        line-height: 16px;
        font-size: 13px;
        page-break-inside: avoid;
        break-inside: avoid;
        -moz-column-break-inside: avoid;
        -o-column-break-inside: avoid;
        -ms-column-break-inside: avoid;
        column-break-inside: avoid;
        overflow: hidden;
    }
    span{
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font-weight: normal;
        vertical-align: baseline;
        background: transparent;
    }
    .fs-dttsktul li {
        display: table;
        width: 100%;
        padding: 15px 0;
        border-bottom: 1px solid #ebebeb;
    }
    .fs-dttskt-tit {
        font-weight: bold;
        color: #d0021b;
    }
</style>
@endsection
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-9">

            <!-- Blog Post -->

            <!-- Title -->
            <?php
            	$sanphamct = DB::table('sanpham')->where('id','=',$id)->get();
            ?>
            @foreach($sanphamct as $sp)
            <h1>{{ $sp->TENSP }}</h1>

            <!-- Author -->
            <p class="lead">
                <p class="text-muted small">({{ $sp->MAVACH }})</p>
            </p>

            <!-- Preview Image -->
            <div class="col-md-12" style="border-bottom: solid #f3f3f3 1px; padding-bottom: 25px">
        		<div class="col-md-5">
                    <img class="img-responsive" src="uploads/product/product<?php echo $sp->id; ?>/<?php echo $sp->HINHANH;?>" alt="">
                </div>

                <div class="col-md-7">
                    <h3>{{ number_format($sp->GIASP) }}<strong> ₫</strong></h3>
                    <div class="fs-tsbox">
						<p class="fs-tstit"><strong style="text-align: center;">Cấu hình sản phẩm:</strong></p>
						<?php
			            	$chitietct = DB::table('chitietsp')->where('IDSP','=',$sp->id)->get();
			            ?>
						@foreach($chitietct as $ct)
						<ol>
							<li><label>Màn Hình :</label> <span>{{ $ct->MANHINH }}</span></li>
							<li><label>CPU :</label><span>{{ $ct->CPU }}</span></li>
							<li><label>Ram :</label><span>{{ $ct->RAM }}</span></li>
							<li><label>VGA :</label> <span>{{ $ct->CARDMANHINH }}</span></li>
							<li><label>HĐH :</label> <span>{{ $ct->HDH }}</span></li>
							<li><label>Kích thước & trọng lượng :</label> <span>{{ $ct->KTTL }}</span></li>
						</ol>
						@endforeach
						<p class="fs-tsvm"><a href="#" data-toggle="modal" data-target="#PopTSKT" class="text-primary">Xem đầy đủ cấu hình</a></p>
					</div>
                    <a style="margin-top: 15px" class="btn btn-danger" href="{{ route('cart.edit',$sp->id) }}">THÊM VÀO GIỎ HÀNG <span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
				@include('modal.chitietsanpham')
	        </div>



            <hr>
			<h1 align="center"> Đánh giá chi tiết {{ $sp->TENSP }}</h1>
            <!-- Post Content -->
            {!! $sp->MOTA !!}

            <hr>
			@endforeach
            <!-- Blog Comments -->

            <!-- Comments Form -->
            @if(Auth::guest())
                <div class="well">
                    <h4>Bình luận <span class="glyphicon glyphicon-pencil"></span></h4>
                </div>
            @else
            <div class="well">
                <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>

                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>
                @endif
                <form role="form" action="comment/{{ $id }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <textarea name="NoiDung" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Gửi</button>
                </form>
            </div>
            
            <hr>
            @endif
            <!-- Posted Comments -->

            <!-- Comment -->
            @foreach($comment as $cmt)
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{ $cmt->nguoicomment->name }}
                        <small>{{ $cmt->created_at }}</small>
                    </h4>
                    {{ $cmt->NoiDung }}
                </div>
            </div>
            @endforeach
            

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: red; color: #fff"><b>Sản phẩm liên quan</b></div>
                <div class="panel-body">

                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="image/320x150.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>Project Five</b></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="image/320x150.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>Project Five</b></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="image/320x150.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>Project Five</b></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="image/320x150.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>Project Five</b></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><b>Tin nổi bật</b></div>
                <div class="panel-body">

                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="image/320x150.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>Project Five</b></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="image/320x150.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>Project Five</b></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="image/320x150.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>Project Five</b></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="image/320x150.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>Project Five</b></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                </div>
            </div>
            
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->
@endsection