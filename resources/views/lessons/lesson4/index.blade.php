@include('lessons.partials.bootstrap')

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<form action="{{route('lesson4.store')}}" method="POST" role="form">
				{{csrf_field()}}
				<legend>Form title</legend>
			
				<div class="form-group">
					<label for="">Text</label>
					<input type="text" class="form-control" name="text" placeholder="Text">
				</div>

				<div class="form-group">
					<label for="">Select-Option</label>
					<select name="selectoption" class="form-control">
						<option value="" disabled selected>Please select one of the option</option>
						<option value="option1">Option 1</option>
						<option value="option2">Option 2</option>
					</select>
				</div>

				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="">Radio</label>
							<div class="radio">
								<label>
									<input type="radio" name="radio" value="radio1" checked="checked">
									Radio 1
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="radio" value="radio2">
									Radio 2
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="radio" value="radio3">
									Radio 3
								</label>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="">Check Box</label>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="checkbox[]" value="checkbox1">
									Checkbox 1
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="checkbox[]" value="checkbox2">
									Checkbox 2
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="checkbox[]" value="checkbox3">
									Checkbox 3
								</label>
							</div>
						</div>
					</div>
				</div>
				

				<div class="form-group">
					<label for="">Text Area</label>
					<textarea name="textarea" class="form-control" rows="3"></textarea>
				</div>
			
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<table class="table table-condensed table-hover">
				<thead>
					<tr>
						<th>Text</th>
						<th>SelectOption</th>
						<th>Radio</th>
						<th>CheckBox</th>
						<th>TextArea</th>
					</tr>
				</thead>
				<tbody>
					@foreach($records as $row)
					<tr>
						<td>{{$row->text}}</td>
						<td>{{$row->selectoption}}</td>
						<td>{{$row->radio}}</td>
						<td>{{json_encode($row->checkbox)}}</td>
						<td>{{$row->textarea}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>