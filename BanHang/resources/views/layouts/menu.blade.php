<ul class="list-unstyled" style="padding-top: 10px">
	@foreach($nhasanxuat as $nsx)
	<li>
		<a href="{!! $nsx->URL !!}"><img class="img-responsive" src="uploads/manufactures/{{ $nsx->HINHNSX }}" title="{{ $nsx->TENNSX }}"></a>
	</li>
	@endforeach
</ul>