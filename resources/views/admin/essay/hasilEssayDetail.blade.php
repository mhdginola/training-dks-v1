@extends('layout.sidebarAdmin')

@section('content')
	<div class="container">
		<h1>{{ $user }}</h1>
		<hr>
		<h3>{{ $result->question1 }}</h3>
		<p>{{ $result->answer1 }}</p>
		<hr>
		<h3>{{ $result->question2 }}</h3>
		<p>{{ $result->answer2 }}</p>
		<hr>
		<h3>{{ $result->question3 }}</h3>
		<p>{{ $result->answer3 }}</p>
		<hr>
		<h3>{{ $result->question4 }}</h3>
		<p>{{ $result->answer4 }}</p>
		<hr>
		<h3>{{ $result->question5 }}</h3>
		<p>{{ $result->answer5 }}</p>
		<hr>
	</div>
@endsection