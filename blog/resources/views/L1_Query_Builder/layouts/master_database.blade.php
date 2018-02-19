<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{!! Html::style('css/bootstrap.min.css') !!}
	<title>@yield('title')</title>
</head>
<body>

{{--Navigasi Bar --}}
@section('navbar')
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="home">Belajar Database</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Data1<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Data2 <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Data3 <span class="sr-only">(current)</span></a>
				</li>	
				<li class="nav-item active">
					<a class="nav-link" href="#">Data4 <span class="sr-only">(current)</span></a>
				</li>	
				<li class="nav-item active">
					<a class="nav-link" href="#">Data5 <span class="sr-only">(current)</span></a>
				</li>			
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
@show
{{--Navigasi Bar --}}

{{--Container --}}
<div class="container">
	@yield('content')
</div>
{{--Container --}}

</body>
</html>