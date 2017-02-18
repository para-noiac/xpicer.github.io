@include('lessons.partials.bootstrap')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<div class="container">
	{!! $html->table() !!}
	{!! $html->scripts() !!}	
</div>
