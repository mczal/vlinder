<!DOCTYPE html>
<html data-ng-app="vlinderModule">
<head>
	<title>Vlinder Creative | Beta</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/custom.css') }}"/>
</head>
<body>

  <div id="@yield('id-view')">
    @yield('content')
  </div>


	<div class="bottom">
		<div class="higher-bottom-navbar">
			<a href="{{ url('/spirit') }}"><span class="our">our </span>spirit</a>
			<a href="{{ url('/features') }}"><span class="our">our </span>feature</a>
			<a href="{{ url('/provisions') }}"><span class="our">our </span>provisions</a>
			<a href="{{ url('/clients') }}"><span class="our">our </span>clients</a>
			<a href="{{ url('/galleries') }}"><span class="our">our </span>gallery</a>
			<a href="{{ url('/contact') }}"><span class="our">our </span>contact</a>

		</div>
		<div class="lower-bottom-navbar">
			<a href="{{ url('/') }}">HOME</a>
		</div>
		<div id="copyright">
			&copy; 2015 Vlinder Corp. All rights reserved.
		</div>
	</div>



	<script src="{{ asset('/assets/js/jquery.js') }}"></script>

	<script src="{{ asset('/assets/js/bootstrap/bootstrap.js') }}"></script>

	<script src="{{ asset('/assets/js/app.js') }}"></script>
	<script src="{{ asset('assets/js/controller.js') }}"></script>

</body>
</html>
