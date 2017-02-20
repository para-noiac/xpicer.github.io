@include('lessons.partials.bootstrap')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">

<div class="container" id="module">
	<form action="{{route('lesson12.store')}}" class="dropzone" id="upload">
		{{csrf_field()}}
		<div class="fallback">
			<input name="file" type="file" multiple />
		</div>
	</form>

	<hr>
	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Path</th>
				<th>Created At</th>
				<th>Updated At</th>
				<th>View</th>
			</tr>
		</thead>
		<tbody>
			@foreach($records as $row)
			<tr>
				<td>{{$row->name}}</td>
				<td>{{$row->path}}</td>
				<td>{{$row->created_at}}</td>
				<td>{{$row->updated_at}}</td>
				<td><a type="button" class="btn btn-default" href="{{route('lesson12.show',$row->id)}}" target="_blank">View</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<script type="text/javascript">
	window.Dropzone.options.upload = {
	        parallelUploads: 1,
	        init: function() {
	        	console.log('yes');
				this.on("queuecomplete", function(file) { console.log('yes'); location.reload(); });
			}
	};
</script>