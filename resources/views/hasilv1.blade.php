@extends('layout.sidebarUser')

@section('title', 'HASIL')
    
@section('content')
<div style="border: 1px solid black">
  @foreach ($hasil as $data)
  <h1>{{ $data->users->name }}</h1>
  <h2>{{ $data->nilai }}</h2>
  <p>{{ $data->created_at }}</p>
  @endforeach
</div>
<br>
<a href="{{ route('exportHasil') }}">export</a>
@endsection