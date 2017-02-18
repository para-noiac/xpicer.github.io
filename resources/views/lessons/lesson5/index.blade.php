@include('lessons.partials.bootstrap')

{{-- Select2 --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

{{-- Bootstrap Multi Select --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>

<div class="container">
	<form action="{{route('lesson5.store')}}" method="POST" role="form">
		{{csrf_field()}}
		<legend>Form title</legend>
	
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="">Select2 - Single Select</label>
					<select name="selection1" class="form-control select2">
						@foreach(["a1","a2","a3","a4","a5","a6","a7","a8","a9","a10"] as $row)
							<option value="{{$row}}">{{$row}}</option>
						@endforeach
					</select>
				</div>		
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="">Select2 - Multiple Select</label>
					<select name="selection2[]" class="form-control select2" multiple="multiple">
						@foreach(["b1","b2","b3","b4","b5","b6","b7","b8","b9","b10"] as $row)
							<option value="{{$row}}">{{$row}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="">BS Select - Single Select</label>
					<select name="selection3" class="form-control multiselect">
						@foreach(["c1","c2","c3","c4","c5","c6","c7","c8","c9","c10"] as $row)
							<option value="{{$row}}">{{$row}}</option>
						@endforeach
					</select>
				</div>		
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="">BS Select - Multiple Select</label>
					<select name="selection4[]" class="form-control multiselect" multiple="multiple">
						@foreach(["d1","d2","d3","d4","d5","d6","d7","d8","d9","d10"] as $row)
							<option value="{{$row}}">{{$row}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
		
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th>Selection1</th>
				<th>Selection2</th>
				<th>Selection3</th>
				<th>Selection4</th>
			</tr>
		</thead>
		<tbody>
			@foreach($records as $row)
			<tr>
				<td>{{$row->selection1}}</td>
				<td>{{json_encode($row->selection2)}}</td>
				<td>{{$row->selection3}}</td>
				<td>{{json_encode($row->selection4)}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>



<script type="text/javascript">
	$(function() {
		$('.select2').select2();

		$('.multiselect').multiselect({
            enableFiltering: true,
            includeSelectAllOption: true,
            filterBehavior: 'both',
            enableCaseInsensitiveFiltering: true,
            numberDisplayed: 0,
            onChange: function(option, checked, select) {
            	console.log('Changed');
            },
            onSelectAll: function(option, checked, select) {
            	console.log('Selected All');
            }
        });
	});
</script>