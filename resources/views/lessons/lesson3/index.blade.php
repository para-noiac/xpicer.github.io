@include('lessons.partials.bootstrap')
<div class="container">
	<form action="{{route('lesson3.store.local')}}" method="POST" role="form">
		{{csrf_field()}}
		<legend>Local Validation</legend>
	
		<div class="form-group">
			<label for="">Name ( Must be Unique )</label>
			<input type="text" class="form-control" name="name_local" value="{{old('name_local')}}">
		</div>

		<div class="form-group">
			<label for="">Description ( Must not be empty )</label>
			<input type="text" class="form-control" name="description_local" value="{{old('description_local')}}">
		</div>
		
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	<form action="{{route('lesson3.store.global')}}" method="POST" role="form">
		{{csrf_field()}}
		<legend>Global Validation</legend>
	
		<div class="form-group">
			<label for="">Name ( Must be Unique )</label>
			<input type="text" class="form-control" name="name_global" value="{{old('name_global')}}">
		</div>

		<div class="form-group">
			<label for="">Description ( Must not be empty )</label>
			<input type="text" class="form-control" name="description_global" value="{{old('description_global')}}">
		</div>
		
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	@foreach($errors->all() as $error)
		<div class="alert alert-danger" role="alert">{{$error}}</div>
	@endforeach
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