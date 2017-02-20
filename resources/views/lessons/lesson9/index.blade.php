@include('lessons.partials.bootstrap')

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28-csp/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.1.17/vue-resource.min.js"></script>

<div class="container" id="module">
	<h1>VueJS v1</h1>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" name="name" class="form-control" v-model="postdata.name">
			</div>
			<div class="form-group">
				<label for="">Description</label>
				<input type="text" name="description" class="form-control" v-model="postdata.description">
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			@{{postdata | json}}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<button type="button" class="btn btn-success" v-on:click.prevent="onSubmit">Submit</button>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
	</div>
</div>

<script type="text/javascript">
	$(function() {
		//CSRF Token
		Vue.http.headers.common['X-CSRF-TOKEN'] = '{{csrf_token()}}';
		var vm = new Vue({
			el:'#module',
			data:{
				postdata:{
					name:'',
					description:'',
				},
			},
			methods:{
				onSubmit: function () {
					if(!this.postdata.name) {
						alert('Empty Name');
						return;
					}
					if(!this.postdata.description) {
						alert('Empty Description');
						return;
					}

				    this.$http.post('{{ route("lesson9.store") }}',this.postdata, function(results) {
				    	if(results.success) {
				    		location.reload();
				    	}
				    }).error(function(data) {
				    	console.log(data);
				    });
				}
			},
		});
	});
</script>
