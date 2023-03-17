@extends('layout.sidebarAdmin')

@section('title', 'Total User')

@section('background-style')
background-image: url({{ asset('images/dashboard-admin.png') }});
background-size: cover; 
background-position: center;
background-repeat: no-repeat;
@endsection

@section('content')
<div class="container">
  @if(Session::has('passGen'))
      <button class="btn btn-danger" onclick="copyThis()">
        {{ Session::get('passGen') }}
      </button>
      <p>click to copy generated password</p>

      <script>
        function copyThis(){
          navigator.clipboard.writeText("{{ Session::get('passGen') }}");
        }
      </script>
  @endif
  <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
  <div class="card w100 mt-3">
    <table class="table">
      <thead>
        <tr>
          <th>nama</th>
          <th>status</th>
					<th>action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td 
          @if ($user->level > 1)
            {{-- style="background-color: #B3ED9F;" --}}
          @endif
          >{{ $user->level }}</td>
					<td>
						<a href="{{ route('users.edit', [ 'user' => $user->id ]) }}" class="btn btn-warning">
							Edit
						</a>
					</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $users->onEachSide(1)->links() }}
  </div>
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