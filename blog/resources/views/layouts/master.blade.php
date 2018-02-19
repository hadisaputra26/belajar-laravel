<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
</head>
<body>
	<div class="container">
		@section('navbar')
			<h1>INI ADALAH TAMPLATE MASTER</h1><br>
		@show
		@yield('content')
	</div>
	
</body>
</html>