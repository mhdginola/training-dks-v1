@extends('layout.sidebarUser')

@section('title', 'QUIZ')

@section('content')
<div class="container">
  <a href="{{ route('dashboard') }}">Dashboard</a>
  <br>
  <a href="{{ route('quiz.day1') }}">day1</a>
  <br>
  <a href="{{ route('quiz.day2') }}">day2</a>
</div>
@endsection