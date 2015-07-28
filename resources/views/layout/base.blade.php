<!DOCTYPE html>
<html lang="en">
	@yield('header')
<body>
	@yield('body')
	<!-- butang diri mga js files na dapat gina load sa tanan pages. bootstrap, etc. -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	@yield('js')
</body>
</html>