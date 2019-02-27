<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/vendor/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/vendor/linearicons/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/demo.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('public/img/favicon.png') }}">
  <title>Login</title>
</head>
<body>
		<div id="wrapper" style="margin-top: 6%">
				<div class="vertical-align-wrap">
					<div class="vertical-align-middle">
						<div class="auth-box ">
							<div class="left">
								<div class="content">
									<div class="header">
										<h2>OLEH2IN</h2>
									</div>
									<form class="form-auth-small" action="{{ route('login') }}" method="POST" aria-label="{{ __('Login') }}">
										@csrf
										{{-- @if (session()->has('login_error'))
												<div class="alert alert-danger">
													{{session()->get('login_error')}}
												</div>
										@endif --}}
										<div class="input-group">
											<label for="signin-email" class="control-label sr-only">Email</label>
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="signin-email" value="{{ old('email') }}" placeholder="Email" name="email" required>
										</div>
										@if ($errors->has('email'))
												<span class="invalid-feedback alert alert-danger" role="alert">
														<strong>{{ $errors->first('email') }}</strong>
												</span>
										@endif
										<br>
										<br>
										<div class="input-group">
											<label for="signin-password" class="control-label sr-only">Password</label>
											<span class="input-group-addon"><i class="fa fa-lock"></i></span>
											<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="signin-password" placeholder="Password" name="password" value="" required>
										</div>
										@if ($errors->has('password'))
												<span class="invalid-feedback alert alert-danger" role="alert">
														<strong>{{ $errors->first('password') }}</strong>
												</span>
										@endif
										<span class="text-danger"></span>
										<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
									</form>
								</div>
							</div>
							<div class="right">
								<div class="overlay"></div>
								<div class="content text">
									<h1 class="heading">SEHATIN</h1>
									<p>by Popeye Team</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- END WRAPPER -->
</body>
</html>