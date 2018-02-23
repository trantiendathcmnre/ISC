<!-- slider -->
	<div class="row carousel-holder">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">

                    <?php $i=0; ?>
                    @foreach($slide as $s)

                    @if($i == 0)
                        <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}" class="active">
                    </li>
                    @else
                        <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}">
                    </li>
                    @endif
                    <?php $i++; ?>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    <?php $i= 0; ?>
                    @foreach($slide as $s)
                     
                    @if($i == 0)
                        <div class="item active">
                    @else 
                        <div class="item"> 
                    @endif
                    
                    <?php $i++; ?>
                        <a href="{{ $s->LINKSL }}"><img class="slide-image" src="uploads/slides/{{ $s->HINHSL }}" alt="{{ $s->NOIDUNGSL }}" title="{{ $s->TENSL }}"></a>
                    </div>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- end slide -->