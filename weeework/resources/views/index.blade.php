<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>belajar Laravel</title>
</head>
<body>
	<h1>Halaman Index</h1>

{{-- 	<form action="http://localhost/belajarlaravel/weeework/public/store" method="post">
		{{ csrf_field() }}
		<label for="judul">JUDUL</label>
		<input type="text" id="judul" name="judul"><br>
		<label for="isi">ISI BLOG</label>
		<textarea name="isi" id="isi" cols="30" rows="10"></textarea><br>
		<button type="submit">KIRIM</button>
	</form> --}}

	{{-- {{Form::open(array('action' => 'PostController@store'))}} --}}
	{{Form::open(array('action' => 'GetController@store'))}}
		{{ csrf_field() }}
		{{Form::label('judul', 'Judul Blog')}}
		{{Form::text('judul')}} <br>
		{{Form::label('isi', 'ISI BLOG')}}
		{{Form::textArea('isi')}} <br>
		{{Form::submit('Kirim')}}
	{{Form::close()}}
	
</body>
</html>