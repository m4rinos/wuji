@extends('layouts.app')

@section('content')
<div class="container page m-auto py-10 px-5 ">
	<div class="text-center m-auto w-2/3 flex justify-center">
		@include('icons.yin')
		@include('icons.taiji')
		@include('icons.yang')
		@include('icons.yang', ['test'=>'data'])
	</div>
	<p>We are trying</p>
</div>
@endsection
