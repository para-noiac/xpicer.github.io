@include('lessons.partials.bootstrap')

<div class="container">
	<form action="{{route('lesson2.store')}}" method="POST" role="form">
		{{ csrf_field() }}
		<legend>Form title</legend>
	
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" name="name">
		</div>

		<div class="form-group">
			<label for="">Description</label>
			<input type="text" class="form-control" name="description">
		</div>
	
		<a class="btn btn-default" href="{{route('lesson2.index')}}" role="button">Back</a>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>