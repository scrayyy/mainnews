<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.1/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Apr 2021 15:26:54 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/admin/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/admin/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/admin/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/admin/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/admin/css/admin.css')}}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('assets/admin/icon/favicon-32x32.png')}}" sizes="32x32">
	<link rel="apple-touch-icon" href="{{ asset('assets/admin/icon/favicon-32x32.png')}}">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>NEWS - AdminPanel</title>

</head>
<body>

	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form method="POST" action="{{ route('login') }}" class="sign__form">
                            @csrf
							<h2 style="color:white;"> Authorization</h2>
							<div class="sign__group">
								<input type="text" name="email" class="sign__input" placeholder="Email" value="{{ old('email') }}" required>
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password" name="password" required>
							</div>
							
							<input type="submit" class="sign__btn" type="button"></button>
							
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="{{ asset('assets/admin/js/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/jquery.mousewheel.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/jquery.mCustomScrollbar.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/select2.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/admin.js') }}"></script>
</body>
</html>