@extends('front.default')

@section('middle')
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-md-push-9">
				@include('front.static.partials.sidebar')
			</div>
			<div class="col-md-9 col-md-pull-3">
				@yield('content')
			</div>
		</div>
	</div>
@endsection