@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
	<div class="container">
		<div class="row" style="padding-top: 20px;">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-success">
					<div class="panel-heading">
						<div style="text-align: center;">About People I Like</div>
					</div>

					@if (count($people))
						<div class="panel-body" style="text-align: center;">
							@foreach ($people as $person)
								<li class="list-group-item">{{ $person }}</li>
							@endforeach
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection