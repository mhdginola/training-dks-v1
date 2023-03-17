@extends('layout.sidebarAdmin')

@section('content')
<div class="container">
	<h1>List Question</h1>
	<a href="{{ route('questions.create') }}" class="btn btn-primary">Add Question</a>
	<a href="{{ route('essays.create') }}" class="btn btn-primary">Add Essay</a>
	<table class="table">
		<thead>
			<tr>
				<th>question</th>
				<th>day</th>
				<th>action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($questions as $question)
			<tr>
				<td>{{ $question->question }}</td>
				<td>{{ $question->id_day }}</td>
				<td>
					@if ($question->id_day == 'essay')
						<a href="{{ route('essays.edit', [ 'essay' => $question->id ]) }}" class="btn btn-warning">Edit</a>
					@else
						<a href="{{ route('questions.edit',[ 'question' => $question->id ]) }}" class="btn btn-warning">Edit</a>
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
	{{ $questions->onEachSide(1)->links() }}
</div>

<script>
	document.addEventListener("DOMContentLoaded", () => {
		const pageLinks = document.getElementsByClassName('pagination');
		for (let i = 0; i < pageLinks.length; i++) {
			const pageLink = pageLinks[i];
			pageLink.classList.add('flex-wrap');
		}
	});
</script>
@endsection