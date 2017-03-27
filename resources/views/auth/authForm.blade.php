<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        </script>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Verdana:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap/css/bootstrap.css') }}" />

		<link rel="stylesheet" href="{{ asset('backend//vendor/font-awesome/css/font-awesome.css') }}" />
		<link rel="stylesheet" href="{{ asset('backend/vendor/magnific-popup/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('backend/stylesheets/theme.css') }}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('backend/stylesheets/skins/default.css') }}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('backend/stylesheets/theme-custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('backend/vendor/modernizr/modernizr.js') }}"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="{{ asset('backend/images/logo.png') }}" height="54" alt="Porto Admin" />
				</a>

                @yield('content')

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2017. All Rights Reserved. v.1.0.1</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="{{ asset('backend/vendor/jquery/jquery.js') }}"></script>
		<script src="{{ asset('backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ asset('backend/vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ asset('backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('backend/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
		<script src="{{ asset('backend/vendor/jquery-placeholder/jquery-placeholder.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('backend/javascripts/theme.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('backend/javascripts/theme.custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('backend/javascripts/theme.init.js') }}"></script>

	</body>
</html>