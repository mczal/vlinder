<!DOCTYPE html>
<html data-ng-app="vlinderModule">
<head>
	<title>Vlinder Creative | @yield('title')</title>
	<!-- favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/custom.css') }}"/>

  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="{{ asset('/bower_components/adminLTE/bootstrap/css/bootstrap.min.css') }}">
	<!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
