<!DOCTYPE html>
<html lang="id">

<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!--====== Title ======-->
	<title>@yield('title')</title>

    @include('partials.home.head')

    @yield('head')

</head>

<body>

    @include("partials.home.preloader")

    @include("partials.home.header")

    @yield('content')

	@include('partials.home.footer')

    @include('partials.home.scripts')
    @yield('scripts')
</body>
</html>