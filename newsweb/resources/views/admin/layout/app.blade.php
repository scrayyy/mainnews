<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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
	<!-- header -->
	<header class="header">
		<div class="header__content">
			<!-- header logo -->
			<a href="index.html" class="header__logo">
				<img src="{{ asset('assets/admin/img/logo.png')}}" alt="">
			</a>
			<!-- end header logo -->

			<!-- header menu btn -->
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- end header menu btn -->
		</div>
	</header>
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<a href="/adminadmin" class="sidebar__logo">
			<img src="{{ asset('assets/admin/img/logo.png') }}" alt="">
		</a>
		<!-- end sidebar logo -->
		
		<!-- sidebar user -->
		<div class="sidebar__user">
			<div class="sidebar__user-img">
				<img src="{{ asset('assets/admin/img/user.svg') }}" alt="">
			</div>

			<div class="sidebar__user-title">
				<span>Admin</span>
				<p>{{{ Auth::user()->name }}}</p>
			</div>
		</div>
		<!-- end sidebar user -->

		<!-- sidebar nav -->
		<div class="sidebar__nav-wrap">
			<ul class="sidebar__nav">

				<li class="sidebar__nav-item">
					<a href="{{ route('index') }}" class="sidebar__nav-link"><i class="icon ion-ios-keypad"></i> <span>სიახლეების სია</span></a>
				</li>
				<li class="sidebar__nav-item">
					<a href="{{ route('news.create') }}" class="sidebar__nav-link"><i class="icon ion-ios-keypad"></i> <span>სიახლის დამატება</span></a>
				</li>
				<li class="sidebar__nav-item">
					<a href="{{ route('category.index') }}" class="sidebar__nav-link"><i class="icon ion-ios-keypad"></i> <span>კატეგორიების სია</span></a>
				</li>
				<li class="sidebar__nav-item">
					<a href="{{ route('category.create') }}" class="sidebar__nav-link"><i class="icon ion-ios-keypad"></i> <span>კატეგორიის დამატება</span></a>
				</li>
				<li class="sidebar__nav-item">
					<a href="{{ route('logout') }}" class="sidebar__nav-link"><i class="icon ion-ios-keypad"></i> <span>გასვლა</span></a>
				</li>
				
			</ul>
		</div>
		
		<!-- sidebar copyright -->
		<div class="sidebar__copyright">© copyright 2021. <br>Create by ITWEB.GE</a></div>
		<!-- end sidebar copyright -->
	</div>
	<!-- end sidebar -->
	@yield("content")

	<!-- JS -->
	<script src="{{ asset('assets/admin/js/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/jquery.mousewheel.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/jquery.mCustomScrollbar.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/select2.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/admin.js') }}"></script>
	<script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
	<script>
		CKEDITOR.replace( 'desc' );
	</script>
</body>
</html>