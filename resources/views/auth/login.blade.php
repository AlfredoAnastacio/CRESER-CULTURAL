<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title> CRE-SER CULTURAL </title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<div class="row">

				<!-- Login Banner -->
				<div class="col-md-6 login-bg">
					<div class="login-banner"></div>
				</div>
				<!-- /Login Banner -->

				<div class="col-md-6 login-wrap-bg">

					<!-- Login -->
                    <div class="login-wrapper">
                        <div class="loginbox">
                            <div class="img-logo">
								<img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="Logo">
							</div>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group form-focus">
                                    <label class="focus-label">Email</label>
									<input id="email" type="email" class="form-control floating @error('email') is-invalid @enderror" name="email" value="alicia@gmail.com" required autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
                                <div class="form-group form-focus">
                                    <label class="focus-label">Password</label>
                                    <input id="password" type="password" class="form-control floating @error('password') is-invalid @enderror" value="A12345678" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
								<div class="d-grid">
									<button class="btn btn-primary" type="submit">Login</button>
								</div>
                            </form>
                        </div>
                    </div>
					<!-- /Login -->
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

		<!-- Bootstrap Core JS -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>

    </body>
</html>
