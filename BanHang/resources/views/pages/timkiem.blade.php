@extends('layouts.index')
@section('title','Tìm kiếm')
@section('css')
<style type="text/css" media="screen">
    body{
        background: #F3F3F3;
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
        <div class="row">
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active" style="background-color: red">
                        Menu
                    </li>

                    <li href="#" class="list-group-item menu1">
                        Level 1
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                    </ul>

                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                    </ul>


                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>

                    <ul>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                    </ul>


                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                    </ul>

                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>
                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:red; color:white;">
                        <h4><b>Tìm thấy {{ $timkiem->count() }} sản phẩm với từ khóa <em style="color: black">{{ $tukhoa }}</em></b></h4>
                    </div>
                    @foreach($timkiem as $tk)
                    <div class="row-item" id="sanpham">
                        <div class="col-md-3">

                            <a href="detail.html">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src="uploads/product/product{{ $tk->id }}/{{ $tk->HINHANH }}" alt="{{ $tk->TENSP }}">
                            </a>
                        </div>

                        <div class="col-md-9">
                            <h3>{{ $tk->TENSP }}</h3>
                            <span class="text-danger"><strong>{{ number_format($tk->GIASP) }} đ</strong></span>
                            <div id="ts-item">
                                <ul class="list-unstyled">
                                    <li>
                                        <label>Màn hình:</label>
                                        <span>{{ $tk->chitiet->MANHINH }}</span>
                                    </li>
                                    <li>
                                        <label>CPU:</label>
                                        <span>{{ $tk->chitiet->CPU }}</span>
                                    </li>
                                    <li>
                                        <label>RAM:</label>
                                        <span>{{ $tk->chitiet->RAM }}</span>
                                    </li>
                                    <li>
                                        <label>VGA: </label>
                                        <span>
                                            {{ $tk->chitiet->CARDMANHINH }}
                                        </span>
                                    </li>
                                    <li>
                                        <label>Kích thước:</label>
                                        <span>{{ $tk->chitiet->KTTL }}</span>
                                    </li>
                                </ul>
                            </div>
                            <a class="btn btn-primary" href="chitiet/{{ $tk->id }}">Chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                    </div>
                    @endforeach
                    
                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            {!! $timkiem->links() !!}
                        </div>  
                    </div>
                    <!-- /.row -->

                </div>
            </div> 

        </div>

    </div>
    <!-- end Page Content -->
@endsection