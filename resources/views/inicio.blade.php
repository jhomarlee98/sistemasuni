@extends('layouts.app')
@section('content')
	@include('widgets.header')
	@include('widgets.footer')

	@if (!empty($banners))
		@foreach($banners as $banner)
		<p>{{$banner->BanNom}}</p>
		@endforeach
	@endif

@endsection