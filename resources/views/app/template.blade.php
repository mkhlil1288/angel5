<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="/favicon.ico" />

	@yield('meta')
	<meta property="og:title" content="@yield('title')">
	<meta property="og:url" content="{{ Request::url() }}">

	<title>@yield('title')</title>

	<link href="{{ elixir("css/app.css") }}" rel="stylesheet">
	@yield('css')
</head>
<body>
	@include('app.header')
	@include('app.messages')
	@yield('content')
	<script src="{{ elixir("js/app.js") }}"></script>
	@yield('js')
</body>
</html>
