<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Corp</title>
		<link rel="stylesheet" href="/css/app.css"> <!-- takes the COMPILED file in public folder -->
	</head>
	<body>
		@include('inc.navbar')

		<div class="container">
			
			@if(Request::is('/'))
				@include('inc.showcase')
			@endif
			
			<div class="row">
				<div class="col-md-8 col-lg-8"> <!-- the main content -->
					@include('inc.messages')
					@yield('content')
				</div>
			
				<div class="col-md-4 col-lg-4"> <!-- the sidebar -->
					@include('inc.sidebar')
				</div>
			</div>
		</div>
		<footer class="text-center" id="footer">
			<p>Copyright 2017 &copy; Corp Industries.</p>
		</footer>
	</body>
</html>