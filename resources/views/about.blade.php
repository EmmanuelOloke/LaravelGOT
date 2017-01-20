@extends('layouts.app')

@section('content')
<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-success">
		<div class="panel-heading">
			<div style="text-align: center;">About People I Like</div>
		</div>

		@if (count($people))
			<div class="panel-body">
				<!-- <ul> -->
					@foreach ($people as $person)
						<li class="list-group-item">{{ $person }}</li>
					@endforeach
				<!-- </ul> -->
		@endif
			</div>
	</div>
</div>
@endsection