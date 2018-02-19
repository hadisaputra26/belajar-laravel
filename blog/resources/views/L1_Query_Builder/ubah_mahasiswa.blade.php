@extends('L1_Query_Builder/layouts.master_database')
@section('title', 'Tambah Mahasiswa')

{{-- Navigasi Bar --}}
@section('navbar')
	@parent
@endsection
{{-- Navigasi Bar --}}
@php($mhs = $mahasiswa[0])
@section('content')
<h1>Ubah Mahasiswa</h1>
{{Form::open(array('action' => 'ControllerQueryBuilder@tambah_mahasiswa'))}}
	{{Form::hidden('id', $mhs->id) }}
	{{Form::label('nrp','NRP')}}
	{{Form::text('nrp',$mhs->nrp)}} <br>
	{{Form::label('nama','NAMA')}}
	{{Form::text('nama',$mhs->nama)}} <br>
	{{Form::label('email','EMAIL')}}
	{{Form::text('email',$mhs->email)}} <br>
	{{Form::label('jurusan','JURUSAN')}}
	{{Form::text('jurusan',$mhs->jurusan)}} <br>
	{{Form::submit('UBAH')}}
{{Form::close()}}
@endsection