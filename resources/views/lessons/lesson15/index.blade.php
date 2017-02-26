@include('lessons.partials.bootstrap')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28-csp/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.1.17/vue-resource.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/nestedSortable/2.0.0/jquery.mjs.nestedSortable.min.js"></script>


<div class="container" id="module">
	<input type="text" name="randomtext" class="form-control" v-on:keyup.enter="onSubmit" v-model="randomtext">
	<br>
	<button type="button" class="btn btn-xs btn-danger" v-on:click="onSave">Save</button>
	<br>
	<br>
	<ol class="sortable">
		@foreach($records as $row)
			@include('lessons.lesson15.partial', $row)
		@endforeach
	</ol>
</div>
<style type="text/css">
.pointer {
	cursor: pointer;
}
</style>
<script type="text/javascript">
	$(function() {
		//CSRF Token
		Vue.http.headers.common['X-CSRF-TOKEN'] = '{{csrf_token()}}';
		var vm = new Vue({
			el:'#module',
			data:{
				randomtext:'',
			},
			methods:{
				onSubmit: function () {
					this.$http.post('{{ route("lesson15.store") }}',{randomtext:this.randomtext}, function(results) {
				    	if(results.success) {
				    		location.reload();
				    	}
				    }).error(function(data) {
				    	console.log(data);
				    });
				},
				onSave: function () {
					var data = $('.sortable').nestedSortable('toHierarchy');
					this.$http.post('{{ route("lesson15.storelevel") }}',{data:data}, function(results) {
				    	if(results.success) {
				    		location.reload();
				    	}
				    }).error(function(data) {
				    	console.log(data);
				    });
				}
			},
		});
		$('.sortable').nestedSortable({
            handle: 'div',
            items: 'li',
            toleranceElement: '> div'
        });
	});
</script>