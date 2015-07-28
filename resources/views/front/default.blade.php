@extends('layout.base')

@section('body')
	<!-- diri ibutang ang header codes. -->
	@include('front.partials.nav')
	@yield('middle')
	<!-- diri ibutang ang footer codes. -->
	@include('front.partials.footer')
@endsection 