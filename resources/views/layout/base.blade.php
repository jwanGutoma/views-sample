<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CashNow.ph @yield('page-title')</title>
  <!-- butang diri mga css files na dapat gina load sa tanan pages. bootstrap, font-awesome, etc. -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  @yield('css')
</head>
<body>
	@yield('body')
	<!-- butang diri mga js files na dapat gina load sa tanan pages. bootstrap, etc. -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	@yield('js')
</body>
</html>