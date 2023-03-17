@extends('layout.sidebarAdmin')

@section('title', 'Document')

@section('background-style')
border-left: 1px solid #A1B2C4;
@endsection

@section('content')
<div class="container">
  <div 
    style="
      height: 50vh;
      overflow: auto;
      border: 1px solid #A1B2C4;
    "
  >
    <table class="table table-hover overflow-auto">
      <thead>
        <tr style="position: sticky; top: 0px; background-color: #ffffff;">
          <th>tanggal upload</th>
          <th>name</th>
          <th>ukuran file</th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($uploads as $upload)
        <tr>
          <td>{{ date_format($upload->created_at, 'Y/m/d') }}</td>
          <td>{{ $upload->nama_file }}</td>
          <td>{{ $upload->ukuran_file }}</td>
          <td>
            <a href="{{ route('downloadVideo', ['path'=> $upload->file_path]) }}">
              <button class="btn btn-success">Download</button>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

{{ $uploads->onEachSide(1)->links() }}

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