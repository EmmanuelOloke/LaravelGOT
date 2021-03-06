@extends('layouts.app')

@section('content')

<div class="block">

	<div id="mycarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#mycarousel" data-slide-to="0"></li>
			<li data-target="#mycarousel" data-slide-to="1"></li>
			<li data-target="#mycarousel" data-slide-to="2"></li>
			<li data-target="#mycarousel" data-slide-to="3"></li>
			<li data-target="#mycarousel" data-slide-to="4"></li>
			<li data-target="#mycarousel" data-slide-to="5"></li>
		</ol>

		<!-- Wrapper for slides -->

		<div class="carousel-inner" role="listbox">
			<div class="item">
				<img src="{{asset('assets/img/shiffi0.jpg')}}" data-color="lightblue" alt="First Image">
				<div class="carousel-caption">
					<h3>First Image</h3>
				</div>
			</div>

			<div class="item">
				<img src="{{asset('assets/img/shiffi1.jpg')}}" data-color="firebrick" alt="Second Image">
				<div class="carousel-caption">
					<h3>Second Image</h3>
				</div>
			</div>

			<div class="item">
				<img src="{{asset('assets/img/shiffi2.jpg')}}" data-color="violet" alt="Third Image">
				<div class="carousel-caption">
					<h3>Third Image</h3>
				</div>
			</div>

			<div class="item">
				<img src="{{asset('assets/img/shiffi3.jpg')}}" data-color="lightgreen" alt="Fourth Image">
				<div class="carousel-caption">
					<h3>Fourth Image</h3>
				</div>
			</div>

			<div class="item">
				<img src="{{asset('assets/img/shiffi4.jpg')}}" data-color="tomato" alt="Fifth Image">
				<div class="carousel-caption">
					<h3>Fifth Image</h3>
				</div>
			</div>

			<div class="item">
				<img src="{{asset('assets/img/shiffi5.jpg')}}" data-color="salmon" alt="Sixth Image">
				<div class="carousel-caption">
					<h3>Sixth God!</h3>
				</div>
			</div>
		</div>

		 <!-- Controls  -->
		<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
@endsection