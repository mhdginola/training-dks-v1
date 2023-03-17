@extends('layout.sidebarAdmin')

@section('content')
		
	<div class="container">
		<h1>Hasil Essay</h1>
		<table class="table shadow">
			<thead>
				<tr>
					<th>tanggal</th>
					<th>nama</th>
					<th>action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($essays as $essay)
				<tr>
					<td>{{ $essay->created_at }}</td>
					<td>{{ $essay->user_id }}</td>
					<td>
						<a href="/admin/hasilEssay/{{ $essay->id }}">
							<button class="btn btn-primary">Detail</button>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $essays->onEachSide(1)->links() }}
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