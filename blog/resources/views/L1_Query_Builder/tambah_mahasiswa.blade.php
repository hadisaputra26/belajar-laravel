@extends('L1_Query_Builder/layouts.master_database')
@section('title', 'Tambah Mahasiswa')

{{-- Navigasi Bar --}}
@section('navbar')
	@parent
@endsection
{{-- Navigasi Bar --}}

@section('content')
<h1>Tambah Mahasiswa</h1>
{{Form::open(array('action' => 'ControllerQueryBuilder@tambah_mahasiswa'))}}
	{{Form::label('nrp','NRP')}}
	{{Form::text('nrp')}} <br>
	{{Form::label('nama','NAMA')}}
	{{Form::text('nama')}} <br>
	{{Form::label('email','EMAIL')}}
	{{Form::text('email')}} <br>
	{{Form::label('jurusan','JURUSAN')}}
	{{Form::text('jurusan')}} <br>
	{{Form::submit('TAMBAH')}}
{{Form::close()}}
@endsection