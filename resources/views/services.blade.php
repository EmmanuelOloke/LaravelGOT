@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row" style="padding-top: 20px;">
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<div style="text-align: center;">Our Top Clients</div>
					</div>
					@if (count($clients))
						<div class="panel-body" style="text-align: center;">
							@foreach ($clients as $client)
								<li class="list-group-item"> {{ $client }}</li>
							@endforeach
						</div>
					@endif
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<div style="text-align: center;">Different Services offered</div>
					</div>
					@if (count($events))
					<div class="panel-body" style="text-align: center;">
						@foreach($events as $event)
							<li class="list-group-item"> {{ $event }}</li>
						@endforeach
					</div>
					@endif
				</div>
			</div>
		</div>

		<div class="row" style="padding-top: 20px;">
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<div style="text-align: center;">Our Top Clients</div>
					</div>
					@if (count($clients))
						<div class="panel-body" style="text-align: center;">
							@foreach ($clients as $client)
								<li class="list-group-item"> {{ $client }}</li>
							@endforeach
						</div>
					@endif
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<div style="text-align: center;">Different Services offered</div>
					</div>
					@if (count($events))
					<div class="panel-body" style="text-align: center;">
						@foreach($events as $event)
							<li class="list-group-item"> {{ $event }}</li>
						@endforeach
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection