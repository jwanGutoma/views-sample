@extends('layout.base')

@section('header')
	@include('front.partials.header')
@endsection

@section('body')
	<!-- diri ibutang ang header codes. -->
	@include('front.partials.nav')
	@yield('middle')
	<!-- diri ibutang ang footer codes. -->
	@include('front.partials.footer')
@endsection 