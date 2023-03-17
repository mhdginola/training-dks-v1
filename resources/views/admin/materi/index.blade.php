@extends('layout.sidebarAdmin')

@section('content')
<div class="container">
    <h1>Materi</h1>
    <a href="{{ route('materiListAdd') }}" class="btn btn-primary">Add/Update Materi</a>

    <table class="table">
		<thead>
			<tr>
				<th>day</th>
				<th>sub</th>
				<th>name</th>
				<th>size</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($materis as $materi)
			<tr>
				<td>{{ $materi->day_id }}</td>
				<td>{{ $materi->sub_day }}</td>
				<td>{{ $materi->original_name }}</td>
                <td>{{ $materi->size }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
	{{ $materis->onEachSide(1)->links() }}
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