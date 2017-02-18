@include('lessons.partials.bootstrap')

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28-csp/vue.min.js"></script>

<div class="container" id="module">
	<h1>VueJS v1</h1>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
				<label for="">Text</label>
				<input type="text" name="input1" class="form-control" v-model="input1">
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			@{{input1}}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
				<label for="">Select Option</label>
				<select name="input2" id="input" class="form-control" v-model="input2">
					<option value="" disabled>Select one of options</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
				
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			@{{input2}}
		</div>
	</div>	
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<button type="button" class="btn btn-success" v-on:click="onClick">Click</button>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			@{{msg}}
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function() {
		var vm = new Vue({
			el:'#module',
			data:{
				input1:'',
				input2:'',
				msg:'',
				count:0,
			},
			methods:{
				onClick: function () {
					this.count += 1;
					this.msg = "You have clicked " + this.count + " times.";
				}
			},
		});
	});
</script>
