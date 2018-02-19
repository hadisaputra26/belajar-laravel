@extends('L1_Query_Builder/layouts.master_database')
@section('title', 'Data Mahasiswa')

{{-- Navigasi Bar --}}
@section('navbar')
	@parent
@endsection
{{-- Navigasi Bar --}}

@section('content')
	<h1>Data Mahasiswa</h1>
	<p><a href="tambah_mhs">TAMBAH MAHASISWA</a></p>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>NO.</th>
			<th>AKSI</th>
			<th>NRP</th>
			<th>NAMA</th>
			<th>EMAIL</th>
			<th>JURUSAN</th>
		</tr>
	@php($i = 1)
	@foreach($mahasiswa as $mhs)
		<tr>
			<td>{{$i}}</td>
			<td><a href="ubah_mahasiswa/{{$mhs->id}}">EDIT</a> | <a href="hapus_mahasiswa/{{$mhs->id}}">HAPUS</a></td>
			<td>{{$mhs->nrp}}</td>
			<td>{{$mhs->nama}}</td>
			<td>{{$mhs->email}}</td>
			<td>{{$mhs->jurusan}}</td>		
		</tr>
	@php($i++)
	@endforeach
	</table>
@endsection

