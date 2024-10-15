<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

		<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="csrf-token" content="{{ csrf_token() }}">

				<title>{{ config('app.name', 'Laravel') }}</title>

				<!-- Fonts -->
				{{-- <link rel="preconnect" href="https://fonts.bunny.net">
				<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

				<!-- Favicons -->
				<link href="{{ asset('img/favicon.png') }}" rel="icon">
				<link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

				<!-- Fonts -->
				<link href="https://fonts.googleapis.com" rel="preconnect">
				<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
				<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"rel="stylesheet">

				<!-- Vendor CSS Files -->
				<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
				<link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
				<link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
				<link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
				<link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

				<!-- Main CSS File -->
				<link href="{{ asset('css/main.css') }}" rel="stylesheet">

				<!-- Scripts -->
				@vite(['resources/css/app.css', 'resources/js/app.js'])
		</head>

		<body class="font-sans antialiased index-page">
				<div class="min-h-screen bg-gray-100">
						@include('layouts.navigation')

						<!-- Page Heading -->
						@isset($header)
								<header class="bg-white shadow">
										<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
											{{ $header }}
										</div>
								</header>
						@endisset

						<!-- Page Content -->
						<main>
							{{ $slot }}
						</main>
				</div>

      <!-- Vendor JS Files -->
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
      <script src="{{ asset('vendor/aos/aos.js') }}"></script>
      <script src="{{ asset('vendor/typed.js/typed.umd.js') }}"></script>
      <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
      <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
      <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
      <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
      <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

      <!-- Main JS File -->
      <script src="{{ asset('js/main.js') }}"></script>
		</body>

</html>
