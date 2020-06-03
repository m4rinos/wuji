<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="m4rinos">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Transitlounge') }} @yield('title', '| Empty title')</title>
	<script src="{{ asset('js/app.js') }}" defer></script>
	@stack('scripts')
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	@section('links')
	@show
</head>
<body class="light bg-page text-default font-mono h-full w-full">
	<div id="app" class="flex h-screen flex-col z-0">
		<header id="header" class="flex h-10 z-10">
			<div class="flex justify-start items-center w-1/3"></div>
			<div class="flex justify-center w-1/3">
				<a href="/" class="flex items-center">wuji</a>
			</div>
			<div class="flex justify-end items-center w-1/3"></div>
		</header>
		<main role="main" class="flex-col flex-1 relative z-0">
			@yield('content')
		</main>
		<footer class="flex flex-col text-center text-sm h-10">
		</footer>
	</div>
	@yield('scripts')
</body>
</html>
