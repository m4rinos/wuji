@extends('layouts.app')
@section('content')
	<article>
		@if(Lang::has("pages/$type.title", 'en'))
		<header class="text-inverse text-center bg-header p-2">
			<h1 class="text-2xl">@lang("pages/$type.title")</h1>
			{{-- <h2 class="text-xl">@lang("pages/$type.description")</h2> --}}
		</header>
		<div class="content p-5">
			<p>@lang("pages/$type.intro")</p>
		</div>
		@else
		<header class="text-inverse text-center bg-header p-2">
			<h1 class="text-2xl">{{ $type }} is emptyness</h1>
		</header>
		@endif
	</article>
@endsection
