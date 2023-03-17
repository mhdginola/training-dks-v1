@extends('layout.sidebarAdmin')

@section('content')
<div class="container">
	<h1>Create Essay Question</h1>
	<a href="{{ route('questions.index') }}" class="btn btn-secondary">Back</a>
	<form action="{{ route('essays.update', [ 'essay' => $question_id ]) }}" method="post">
		@method('PATCH')
		@csrf
		<div class="mb-3">
			<label for="question" class="form-label">Question</label>
			<input name="question" value="{{ $question }}" type="text" class="form-control" id="question" required>
			<input type="hidden" name="question_id" value="{{ $question_id }}">
		</div>

		<input type="submit" value="Save" class="btn btn-primary">
	</form>
</div>
@endsection