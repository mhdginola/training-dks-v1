@extends('layout.sidebarAdmin')

@section('title', 'Dashboard')

@section('background-style')
background-image: url({{ asset('images/dashboard-admin.png') }});
background-size: cover; 
background-position: center;
background-repeat: no-repeat;
@endsection

@section('content')
<h1>admin</h1>
@endsection