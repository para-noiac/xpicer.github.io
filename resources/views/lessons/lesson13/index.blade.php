@include('lessons.partials.bootstrap')

<div class="container" id="module">
	<a data-toggle="tooltip" title="This is Tooltip">Tooltip</a>
	<br>
	<a data-toggle="popover" data-placement="top" data-trigger="hover" data-html="true" data-content="
	@foreach(array_chunk(['AA','BB','CC','DD','EE','FF','GG','HH','II','JJ','KK','LL','MM','NN'],4) as $chunk)
		@foreach($chunk as $row)
			{{$row}}
		@endforeach
		<br>
	@endforeach
	">Popover</a>
</div>

<script type="text/javascript">
	$(function() {
		$('[data-toggle="tooltip"]').tooltip();
		$('[data-toggle="popover"]').popover();
	});
</script>