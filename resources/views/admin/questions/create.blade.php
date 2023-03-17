@extends('layout.sidebarAdmin')

@section('content')
<div class="container">
	<h1>Create Question</h1>
	<a href="{{ route('questions.index') }}" class="btn btn-secondary">Back</a>
	<form action="{{ route('questions.store') }}" method="post">
		@csrf
		<div class="mb-3">
			<label for="question" class="form-label">Question</label>
			<input name="question" type="text" class="form-control" id="question" required>
		</div>

		<select name="id_day" class="form-select" aria-label="Default select example" required>
			<option value="" selected>Open this select menu</option>
			@for ($i = 1; $i <= 15; $i++)
				<option value="{{ $i }}">Day {{ $i }}</option>
			@endfor
		</select>

		<hr>

		<div class="mb-3">
			<label for="answer1" class="form-label">A.</label>
			<input name="answer1" type="text" class="form-control" id="answer1" required>
		</div>

		<div class="mb-3">
			<label for="answer2" class="form-label">B.</label>
			<input name="answer2" type="text" class="form-control" id="answer2" required>
		</div>
		
		<div class="mb-3">
			<label for="answer3" class="form-label">C.</label>
			<input name="answer3" type="text" class="form-control" id="answer3" required>
		</div>
		
		<div class="mb-3">
			<label for="answer4" class="form-label">D.</label>
			<input name="answer4" type="text" class="form-control" id="answer4" required>
		</div>

		<label class="form-label">Jawaban </label>

		<br>

		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="check" id="inlineRadio1" value="0" required>
			<label class="form-check-label" for="inlineRadio1">A</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="check" id="inlineRadio2" value="1" required>
			<label class="form-check-label" for="inlineRadio2">B</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="check" id="inlineRadio3" value="2" required>
			<label class="form-check-label" for="inlineRadio3">C</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="check" id="inlineRadio4" value="3" required>
			<label class="form-check-label" for="inlineRadio4">D</label>
		</div>

		<br>

		<input type="submit" value="Save" class="btn btn-primary">
	</form>
</div>
@endsection