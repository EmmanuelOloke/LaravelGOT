@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
	<div class="container">
		<div class="row" style="padding-top: 20px;">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-success">
					<div class="panel-heading" style="text-align: center;">
						CONTENT
					</div>

					<div class="panel-body">
						<h1>This is the contact page!</h1>
					</div>
				</div>
			</div>
		</div>
		<div>
			&nbsp;
		</div>
		<div>
			&nbsp;
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						First
					</div>

					<div class="panel-body">
						<h3>First paragraph</h3>
						<button class="btn btn-default">First</button>
					</div>
				</div>
			</div>

			<div class="col-md-4" style="text-align: center;">
				<div class="panel panel-danger">
					<div class="panel-heading">
						Second
					</div>

					<div class="panel-body">
						<h3>Second paragraph</h3>
						<button class="btn btn-default">Second</button>
					</div>
				</div>
			</div>

			<div class="col-md-4" style="text-align: right;">
				<div class="panel panel-info">
					<div class="panel-heading">
						Third
					</div>

					<div class="panel-body">
						<h3>Third paragraph</h3>
						<button class="btn btn-default">Third</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection