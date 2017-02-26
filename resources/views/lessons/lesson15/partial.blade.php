<li id="sub_{{ $row->id }}" class="pointer">
	<div>
		{{ $row->name }}
	</div>
	@if ($row->childs->count() > 0)
	    <ol>
		    @foreach($row->childs as $subrow)
		        @include('lessons.lesson15.partial', ['row'=>$subrow])
		    @endforeach
	    </ol>
	@endif
</li>