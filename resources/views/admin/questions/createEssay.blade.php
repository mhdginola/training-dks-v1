@extends('layout.sidebarAdmin')

@section('content')
<div class="container">
	<h1>Create Essay Question</h1>
	<a href="{{ route('questions.index') }}" class="btn btn-secondary">Back</a>
	<form action="{{ route('essays.store') }}" method="post">
		@csrf
		<div class="mb-3">
			<label for="question" class="form-label">Question</label>
			<input name="question" type="text" class="form-control" id="question" required>
		</div>

		<input type="submit" value="Save" class="btn btn-primary">
	</form>
</div>
@endsection