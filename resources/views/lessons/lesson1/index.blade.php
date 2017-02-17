@include('lessons.partials.bootstrap')
<div class="container">
	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			@foreach($records as $row)
			<tr>
				<td>{{$row->name}}</td>
				<td>{{$row->description}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>