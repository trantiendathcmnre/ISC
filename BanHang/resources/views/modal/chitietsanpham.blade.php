
  <!-- The Modal -->
<div class="modal fade " id="PopTSKT">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="needs-validation" action="" method="POST" novalidate >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Thông số kỹ thuật chi tiết</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>      
        <!-- Modal body -->
        <div class="modal-body">
            <?php
            $chitietmd = DB::table('chitietsp')->where('IDSP',$id)->get();
            ?>
            @foreach($chitietmd as $ct)
            <p><img class="img-responsive" alt="" src="uploads/product/product{{ $ct->IDSP }}/chitiet/{{ $ct->HINH }}"></p>
            <ul class="fs-dttsktul" style="max-width : 100%;">
                <li class="fs-dttskt-tit">Bộ xử lý</li>
                    <li>
                        <span>{{ $ct->CPU }}</span>
                    </li>
                    
                <li class="fs-dttskt-tit">RAM</li>
                    <li>
                        <span>{{ $ct->RAM }}</span>
                    </li>
                <li class="fs-dttskt-tit">Ỗ cứng</li>
                    <li>
                        <span>{{ $ct->OCUNG }}</span>
                    </li>
                <li class="fs-dttskt-tit">Màn hình</li>
                    <li>
                        <span>{{ $ct->MANHINH }}</span>
                    </li>
                <li class="fs-dttskt-tit">Card đồ họa</li>
                    <li>
                        <span>{{ $ct->CARDMANHINH }}</span>
                    </li>
                <li class="fs-dttskt-tit">Âm thanh</li>
                    <li>
                        <span>{{ $ct->AMTHANH }}</span>
                    </li>
                <li class="fs-dttskt-tit">Đĩa quang</li>
                    <li>
                        <span>{{ $ct->DIAQUANG }}</span>
                    </li>
                <li class="fs-dttskt-tit">Cổng kết nối</li>
                    <li>
                        <span>{{ $ct->CONGKETNOI }}</span>
                    </li>
                <li class="fs-dttskt-tit">Hệ điều hành</li>
                    <li>
                        <span>{{ $ct->HDH }}</span>
                    </li>
                <li class="fs-dttskt-tit">Webcam</li>
                    <li>
                        <span>{{ $ct->WEBCAM }}</span>
                    </li>
                <li class="fs-dttskt-tit">Kích thước & Trọng lượng</li>
                    <li>
                        <span>{{ $ct->KTTL }}</span>
                    </li>
                <li class="fs-dttskt-tit">Pin </li>
                    <li>
                        <span>{{ $ct->PIN }}</span>
                    </li>
                <li class="fs-dttskt-tit">Bảo hành</li>
                    <li>
                        <span>{{ $ct->BAOHANH }}</span>
                    </li>

            </ul>
            @endforeach
        </div>
      </form>  
      </div>
    </div>
</div>

