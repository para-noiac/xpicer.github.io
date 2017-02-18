@include('lessons.partials.bootstrap')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>


<div class="container">
	<table id="myTable" class="table table-condensed table-hover">
		<thead>
			<tr>
				<th>Column 1</th>
				<th>Column 2</th>
				<th>Column 3</th>
				<th>Column 4</th>
			</tr>
		</thead>
		<tbody>
			@foreach($records as $row)
			<tr>
				<td>{{$row->column1}}</td>
				<td>{{$row->column2}}</td>
				<td>{{$row->column3}}</td>
				<td>{{$row->column4}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$(function() {
		$('#myTable').DataTable();
	});
</script>
