<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>@yield('title', 'CRESER')</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">

		<!-- Select2 CSS-->
        <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

		<!-- Owl carousel CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/owl.carousel.min.css') }}">

		<!-- Daterangepicker CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style>
            .dataTables_filter {
                float: right !important;
                padding-top: 10px !important;
                padding-right: 25px !important;
            }
        </style>

	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<!-- Header -->
			<div class="header">

				<!-- Logo -->
				<div class="header-left">
					<a href="" class="logo">
						<img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
					</a>
					<a href="" class="logo logo-small">
						<img src="{{ asset('assets/img/logo-small.png') }}" alt="Logo" width="30" height="30">
					</a>
					<a href="javascript:void(0);" id="toggle_btn">
						<i class="feather-chevrons-left"></i>
					</a>
				</div>
				<!-- /Logo -->

				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fas fa-bars"></i>
				</a>
				<!-- /Header Menu -->

                <!-- Header Menu -->
				<ul class="nav nav-tabs user-menu">
					<!-- Flag -->
					<li class="nav-item">
						<a href="#" id="dark-mode-toggle" class="dark-mode-toggle">
							<i class="feather-sun light-mode"></i><i class="feather-moon dark-mode"></i>
						</a>
					</li>
					<!-- /Flag -->

					<!-- User Menu -->
					<li class="nav-item dropdown main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<span class="user-img">
								<img src="{{ asset('assets/img/avatar-01.jpg') }}" alt="">
								<span class="status online"></span>
							</span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="{{ asset('assets/img/avatar-01.jpg') }}" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>Robert Haddin</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.html"><i class="feather-user me-1"></i> My Profile</a>
							<a class="dropdown-item" href="profile.html"><i class="feather-edit me-1"></i> Edit Profile</a>
							<a class="dropdown-item" href="account-settings.html"><i class="feather-sliders me-1"></i> Account Settings</a>
							<hr class="my-0 ms-2 me-2">
							<a class="dropdown-item" href="login.html"><i class="feather-log-out me-1"></i> Logout</a>
						</div>
					</li>
					<!-- /User Menu -->

				</ul>
				<!-- /Header Menu -->

			</div>
			<!-- /Header -->

			<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"><span> Principal </span></li>
							<li @if(Route::is('contract.index') || Route::is('contract.create')) class='active' @endif>
								<a href="{{ route('contract.index') }}"><i class="feather-file"></i> <span>Contratos</span></a>
							</li>
                            <li @if(Route::is('product.index')) class='active' @endif>
								<a href="{{ route('product.index') }}"><i class="feather-box"></i> <span> Productos </span></a>
							</li>
                            <li @if(Route::is('user.index')) class='active' @endif>
								<a href="{{ route('user.index') }}"><i class="feather-user"></i> <span> Usuarios </span></a>
							</li>
                            {{-- <li @if(Route::is('report.index')) class='active' @endif>
								<a href="{{ route('report.index') }}"><i class="feather-file-text"></i> <span> Reportes </span></a>
							</li> --}}
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"><i class="feather-log-out me-1"></i> <span> Salir </span></a>
                                </form>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Sidebar -->

			<!-- Page Wrapper -->
			<div class="page-wrapper">
				@yield('content')
			</div>
			<!-- /Page Wrapper -->

            {{-- Modals --}}
            @yield('modals')

		</div>
		<!-- /Main Wrapper -->


        <!-- jQuery -->
		<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

        <script src="{{ asset('assets/js/form-validation.js') }}"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

		<!-- Feather Icon JS -->
		<script src="{{ asset('assets/js/feather.min.js') }}"></script>

		<!-- Select2 JS -->
		<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

		<!-- Slimscroll JS -->
		<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <!-- Mask JS -->
        <script src="{{ asset('assets/js/jquery.maskedinput.min.js') }}"></script>
        <script src="{{ asset('assets/js/mask.js') }}"></script>

		<!-- Owl Carousel JS -->
		{{-- <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script> --}}

		<!-- Chart JS -->
		<script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>

		<!-- Daterangepicker JS -->
		<script src="{{ asset('assets/js/moment.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>

        {{-- sweetalert2 --}}
        <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

        <!-- Datatables JS -->
		<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>

        <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>

		<!-- Custom JS -->
		<script src="{{ asset('assets/js/script.js') }}"></script>

        <!-- TOOLTIP -->
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });
        </script>

        @stack('js')
        @include('layouts.errors')
	</body>
</html>
