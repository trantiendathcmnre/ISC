@section('css')
<style type="text/css" media="screen">
.row{
    background: white;
}
</style>
@endsection
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('trangchu') }}">LaptopCity</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="{{ url('lienhe') }}">Liên hệ</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search" method="POST" action="timkiem">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			        <div class="form-group">
			          <input type="text" name="tukhoa" class="form-control" placeholder="Nhập tên laptop cần tìm">
			        </div>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-search"></i></button>
			        <a class="btn btn-danger" href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart "></i> Giỏ hàng ({{ Cart::count() }})</a>
			    </form>
                <!-- <span id="cart" class="nav navbar-nav">
                    <ul class="btn-group list-unstyled" style="padding: 0">
                        <li class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top: 8px; float: left ">
                        <a class="btn btn-danger" href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart "></i> Giỏ hàng (trống)</a>
                        </li>
                        <li class="dropdown-menu dropdown-menu-right " style="background-color: inherit;box-shadow: none; border: none; width: 300px">
                            <div class="dropdown-item" style="border-bottom: solid #F3F3F3 1px">
                                <div class="row" style="background-color: white">
                                    <div class="col-md-4">
                                        <img class="img-responsive" src="uploads/product/product11/HP-ENVY-13-AD076TU.jpg" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h6><strong>HP-ENVY-13-AD076TU</strong></h6>
            
                                        <h6 style="color: red"><span>1*</span>15000000 đ</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="dropdown-item" style="border-bottom: solid #F3F3F3 1px">
                                <div class="row" style="background-color: white">
                                    <div class="col-md-4">
                                        <img class="img-responsive" src="uploads/product/product11/HP-ENVY-13-AD076TU.jpg" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h6><strong>HP-ENVY-13-AD076TU</strong></h6>
            
                                        <h6 style="color: red"><span>1*</span>15000000 đ</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item" style="border-bottom: solid #F3F3F3 1px">
                                <div class="row" style="background-color: white">
                                    <div class="col-md-4">
                                        <img class="img-responsive" src="uploads/product/product11/HP-ENVY-13-AD076TU.jpg" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h6><strong>HP-ENVY-13-AD076TU</strong></h6>
            
                                        <h6 style="color: red"><span>1*</span>15000000 đ</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="background-color: white; padding-top: 15px; padding-bottom: 15px">
                                <div class="col-md-4">Tổng tiền:
                                </div>
                                <div class="col-md-8">45000000 đ
                                </div>
                            </div>
                            
                            <div class="row" style="background-color: white; padding-bottom: 15px">
                                <div class="col-md-12">
                                    <a class="btn btn-sm btn-danger" style="">Đặt hàng <i class="fa fa-chevron-right "></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </span> -->

			    <ul class="nav navbar-nav pull-right">
                    @if(Auth::guest())
                    <li>
                        <a href="dangki">Đăng ký</a>
                    </li>
                    <li>
                        <a href="dangnhap">Đăng nhập</a>
                    </li>
                    @else
                    <li>
                    	<a href="nguoidung">
                    		<span class ="glyphicon glyphicon-user" ></span>
                    		 {{ Auth::user()->name }}
                    	</a>
                    </li>

                    <li>
                    	<a href="dangxuat">Đăng xuất</a>
                    </li>
                    @endif
                </ul>
            </div>


            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
