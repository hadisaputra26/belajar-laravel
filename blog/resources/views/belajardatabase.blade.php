@extends('layouts.master')

@section('title', 'Belajar Database')

@section('navbar')
	@parent
@endsection

@section('content')
	<p>Menampilkan Data Secara Local</p>
	@foreach($nama as $n)
		<ul>
			<li>Nama anda adalah {{$n}}</li>
		</ul>
	@endforeach
	<br>
	<p>Menampilkan Data Dari DataBase</p>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Username</th>
			<th>Password</th>
		</tr>

		@php($i = 1)
		@foreach($users as $user)
			<tr>
				<td>{{$i}}</td>
				<td><a href="#">Ubah</a> | <a href="#">Hapus</a></td>
				<td>{{$user->username}}</td>
				<td>{{$user->password}}</td>
			</tr>
		@php($i++)
		@endforeach

	</table>
@endsection