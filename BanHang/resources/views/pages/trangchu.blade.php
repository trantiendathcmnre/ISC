@extends('layouts.index')
@section('title','Trang chủ')
@section('css')
<style type="text/css" media="screen">
	body{
		background: #F3F3F3;
	}
	#thuonghieu{
		margin-top: 15px;
		margin-right: 15px;
		margin-bottom: 15px;
	}
	#thuonghieu ul li{
		display: inline-block;
		width: 150px;
		height: 50px;
		
	}
	#ts-item{
		max-height: 252px;
		border-top: solid #ebebeb 1px;
		padding-top: 10px;
		line-height: 2;
	}
	#ts-item ul li{
		font-size: 12px;
		color: #7e7e7e;
	}
	#sanpham:hover{
		box-shadow: 1px 2px 7px 0 rgba(0,0,0,.21);
		
	}
</style>
@endsection	
@section('content')
<!-- Page Content -->
<div class="container">
	@include('layouts.slide')

    <div class="space20"></div>

	<div class="row" id="thuonghieu">
		<div class="col-md-12" style="background-color: white; margin-left: 15px;padding-right: 30px;">
			<h3 class="text-center text-muted">THƯƠNG HIỆU LAPTOP</h3>
			@include('layouts.menu')
		</div>
	</div>
    <div class="row ">
    	
        <div class="col-md-12">
        	@foreach($theloaitc as $tl)
	        	@if(count($tl->sanphamTL) > 0)
	            	<div class="panel " style="border: #F3F3F3 1px">            
		            	<div class="panel-heading" style="background-color:#F3F3F3; color:black; padding-bottom: 25px" >
		            		<h3 style="margin-top:0px; margin-bottom:0px;">{{ $tl->theloai }}</h3>
		            	</div>

		            	<div class="panel-body">		
		            		<!-- item -->
						    <div class="row-item ">
			      
								<?php 
									$sanpham = DB::table('sanpham')->where('IDTL',$tl->id)->get();
								?>
								@foreach($sanpham as $product)
			                	<div class="col-md-3 border-right" id="sanpham">
			                		<div class="col-md-12 border-bottom">
				                        <a href="chitiet/{{ $product->id }}">
				                            <img class="img-responsive" src="uploads/product/product{{ $product->id }}/{{ $product->HINHANH }}" alt="{{ $product->TENSP }}" title="{{ $product->TENSP }}">
				                        </a>
				                    </div>

				                    <div class="col-md-12">
				                        <span>
				                        	<a href="chitiet/{{ $product->id }}"><h5> {{ catchuoi($product->TENSP,28) }} </h5></a>
				                        </span>
				                        <span class="text-danger"><strong>{{ number_format($product->GIASP) }} đ</strong></span>
				                        
				                        <div id="ts-item">
				                        	<ul class="list-unstyled">
												<?php 
													$ct = DB::table('chitietsp')->where('IDSP',$product->id)->get();

												?>
												@foreach($ct as $cttc)
				                        		<li>
				                        			<label>Màn hình:</label>
				                        			<span>{{ catchuoi($cttc->MANHINH,25) }}</span>
				                        		</li>
				                        		<li>
				                        			<label>CPU:</label>
				                        			<span>{{ catchuoi($cttc->CPU,30) }}</span>
				                        		</li>
				                        		<li>
				                        			<label>RAM:</label>
				                        			<span>{{ catchuoi($cttc->RAM,28) }}</span>
				                        		</li>
				                        		<li>
				                        			<label>VGA: </label>
				                        			<span>
														@if($cttc->CARDMANHINH =="")
														{{ "Đang cập nhật" }}
														@else
				                        				{{ catchuoi($cttc->CARDMANHINH,28) }}
				                        				@endif
				                        			</span>
				                        		</li>
				                        		<li>
				                        			<label>Kích thước:</label>
				                        			<span>{{ catchuoi($cttc->KTTL,20) }}</span>
				                        		</li>
				                        		@endforeach
				                        	</ul>
				                        </div>
				                        
									</div>

			                	</div>
			                 
								@endforeach
								<div class="break"></div>
								
			                </div>
			                <!-- end item -->       
						</div>
            		</div>
            	@endif
            @endforeach
    	</div>
    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->
@endsection