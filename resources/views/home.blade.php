@extends('layout.main')

@section('container')

    <h4>Selamat Datang <b>{{Auth::user()->name}}</b></h4>

    <h1>HomePage</h1>

@endsection