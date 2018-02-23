@extends('layouts.index')

@section('title','Giỏ hàng')
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


    <div class="row">
        

        <div class="col-md-8">
            <div class="panel panel-default">            
            	<div class="panel-heading bg-danger" style="background-color:red; color:white;" >
            		<h4 style="margin-top:0px; margin-bottom:0px;">GIỎ HÀNG</h4>
            	</div>

            	<div class="panel-body table-responsive">
					<table class="table table-hover" >
						<tbody >
						
						@foreach(Cart::content() as $row)
							<tr>
								<td>
									<?php $hinh = DB::table('sanpham')->select('HINHANH')->where('id',$row->id)->get(); ?>
									<a href="chitiet/{{ $row->id }}"><img class="img-responsive" src="uploads/product/product{{ $row->id }}/@foreach($hinh as $h){{ $h->HINHANH }}@endforeach" alt="" width="90px" height="90px"/></a>
								</td>
								<td><strong>{{ $row->name }}</strong></td>
								
								<td>{{ number_format($row->price) }} đ</td>
								<td>

								{!! Form::open(['route' => ['cart.update',$row->rowId] , 'method'=>'put']) !!}	
							
									<input class="form-control" style="width: 50px" name="qty" type="number"  value="{{ $row->qty }}" max="4" min="1" />
								</td>	
								<td width="35px">
									<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i></button>
								{!! Form::close() !!}

								</td>
								<td align="left">
									
								{!! Form::open(['route' => ['cart.destroy',$row->rowId] , 'method'=>'DELETE']) !!}	
									<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
								{!! Form::close() !!}
								</td>
							</tr>

						@endforeach
						
						</tbody>
					</table>
				</div>
            </div>
    	</div>
    	<div class="col-md-4">
            <div class="panel panel-default">            
            	<div class="panel-heading bg-danger" style="background-color:red; color:white;" >
            		<h4 style="margin-top:0px; margin-bottom:0px;">TỔNG HÓA ĐƠN</h4>
            	</div>

            	<div class="panel-body table-responsive">
					<table class="table table-hover" >
						<tbody >
						<tr>
							
							<th>Tổng:</th>
							<?php $subtotal = Cart::subtotal(); ?>
							<td>{{ $subtotal  }} đ</td>

						</tr>
						
						<tr>
							<th>Phí vận chuyển:</th>
							<td>Miễn phí</td>
						</tr>
						<tr>
							<th>Thành tiền:</th>
							<?php $total = Cart::total();?>
							<td>{{ $subtotal  }} đ</td>
						</tr>
						<tr>
							<td><a href="{{ url('/checkout') }}" class="btn btn-sm btn-danger"></a></td>
						</tr>
						</tbody>
					</table>
				</div>
            </div>
    	</div>
    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->
@endsection