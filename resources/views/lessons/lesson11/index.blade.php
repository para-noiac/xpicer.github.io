@include('lessons.partials.bootstrap')

<div class="container" id="module">
	<form action="{{route('lesson11.store')}}" method="POST" role="form" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="">Image</label>
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-primary btn-file">
								Choose File&hellip; <input type="file" name="uploadedfile">
							</span>
						</span>
						<input type="text" tabindex="-1" class="form-control" readonly value="Max File Size: 5Mb">
					</div>
				</div>
				
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
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
				<td><a type="button" class="btn btn-default" href="{{route('lesson11.view',$row->id)}}" target="_blank">View</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<script>
	$(function (){

		/* btn-file Initialization
		 */
		$(document).on('change', '.btn-file :file', function() {
		  var input = $(this),
		      numFiles = input.get(0).files ? input.get(0).files.length : 1,
		      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		  input.trigger('fileselect', [numFiles, label]);
		});

		$(document).ready( function() {
		    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
		        
		        var input = $(this).parents('.input-group').find(':text'),
		            log = numFiles > 1 ? numFiles + ' files selected' : label;
		        
		        if( input.length ) {
		            input.val(log);
		        } else {
		            if( log ) alert(log);
		        }
		        
		    });
		});
	});
</script>
<style type="text/css">
.btn-file {
	position: relative;
	overflow: hidden;
}
.btn-file input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	min-width: 100%;
	min-height: 100%;
	font-size: 100px;
	text-align: right;
	filter: alpha(opacity=0);
	opacity: 0;
	background: red;
	cursor: inherit;
	display: block;
}
</style>