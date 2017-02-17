<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<div class="container">
	<h4>Table <a class="btn btn-success pull-right" href="{{route('lesson2.create')}}" role="button">New</a></h4>
	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Created At</th>
				<th>Updated At</th>
			</tr>
		</thead>
		<tbody>
			@foreach($records as $row)
			<tr>
				<td>{{$row->name}}</td>
				<td>{{$row->description}}</td>
				<td>{{$row->created_at}}</td>
				<td>{{$row->updated_at}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>