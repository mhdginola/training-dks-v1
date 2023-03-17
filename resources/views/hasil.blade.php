@extends('layout.sidebarUser')

@section('title', 'HASIL')
    
@section('content')
<div class="col-12">
  <table class="table table-striped">
    <thead class="bg-primary text-light">
      <tr>
        <th>
          <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.8343 3.33266H4.16679C3.24625 3.33266 2.5 4.07891 2.5 4.99946V16.667C2.5 17.5876 3.24625 18.3338 4.16679 18.3338H15.8343C16.7549 18.3338 17.5011 17.5876 17.5011 16.667V4.99946C17.5011 4.07891 16.7549 3.33266 15.8343 3.33266Z" stroke="white" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M2.5 8.333H17.5011" stroke="white" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M13.334 1.66568V4.99968" stroke="white" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M6.66699 1.66568V4.99968" stroke="white" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>            
          <span>Date</span>
        </th>
        <th>
          <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.1677 15.0005H2.5" stroke="white" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17.5011 11.6665H2.5" stroke="white" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M14.1679 8.3335H2.50024" stroke="white" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17.5014 4.99954H2.50024" stroke="white" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>            
          <span>Quiz</span>
        </th>
        <th>
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.9417 16.6667H11.7667C11.414 16.6317 11.0817 16.4851 10.8179 16.2484C10.5542 16.0116 10.3728 15.6969 10.3001 15.35L8.06675 5.00001L5.76675 10.3333C5.70169 10.4824 5.59444 10.6092 5.45821 10.698C5.32198 10.7869 5.16272 10.8339 5.00008 10.8333H2.50008C2.27907 10.8333 2.06711 10.7455 1.91083 10.5893C1.75455 10.433 1.66675 10.221 1.66675 10C1.66675 9.77899 1.75455 9.56703 1.91083 9.41075C2.06711 9.25447 2.27907 9.16667 2.50008 9.16667H4.45008L6.54175 4.34167C6.68255 4.01789 6.92254 3.74719 7.22712 3.5686C7.53169 3.39001 7.88511 3.31275 8.23642 3.34798C8.58773 3.3832 8.91878 3.52908 9.18184 3.76459C9.44489 4.00009 9.62636 4.31305 9.70008 4.65834L11.9334 15L14.2334 9.68334C14.2959 9.53116 14.4021 9.40088 14.5385 9.30894C14.675 9.21699 14.8356 9.16749 15.0001 9.16667H17.5001C17.7211 9.16667 17.9331 9.25447 18.0893 9.41075C18.2456 9.56703 18.3334 9.77899 18.3334 10C18.3334 10.221 18.2456 10.433 18.0893 10.5893C17.9331 10.7455 17.7211 10.8333 17.5001 10.8333H15.5501L13.4584 15.6583C13.3307 15.9554 13.1193 16.209 12.85 16.388C12.5807 16.567 12.2651 16.6639 11.9417 16.6667Z" fill="white"/>
          </svg>            
          <span>Level</span>
        </th>
        <th>
          <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.668 17.5005V15.8337C16.668 14.9495 16.3168 14.1016 15.6916 13.4764C15.0664 12.8513 14.2185 12.5001 13.3344 12.5001H6.66711C5.78298 12.5001 4.93507 12.8513 4.30989 13.4764C3.68472 14.1016 3.3335 14.9495 3.3335 15.8337V17.5005" stroke="white" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10.0012 9.16739C11.8426 9.16739 13.3352 7.67471 13.3352 5.83339C13.3352 3.99207 11.8426 2.49938 10.0012 2.49938C8.15992 2.49938 6.66724 3.99207 6.66724 5.83339C6.66724 7.67471 8.15992 9.16739 10.0012 9.16739Z" stroke="white" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>            
          <span>User</span>
        </th>
        <th>
          <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.0007 15.0004V18.3344" stroke="#DBDBDB" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M13.5342 13.5336L15.893 15.8924" stroke="#DBDBDB" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M4.10864 15.8924L6.46745 13.5336" stroke="#DBDBDB" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M15.001 10H18.335" stroke="#DBDBDB" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M1.66675 10H5.00075" stroke="#626262" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M13.5342 6.46676L15.893 4.10796" stroke="#626262" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M4.10864 4.10796L6.46745 6.46676" stroke="#626262" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10.0007 1.66598V4.99998" stroke="#626262" stroke-width="1.66678" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>            
          <span>Nilai</span>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($hasil as $data)
      <tr>
        <td>{{ $data->created_at }}</td>
        <td>Day {{ $data->id_day }}</td>
        <td>{{ $data->id_day }}</td>
        <td>{{ $data->users->name }}</td>
        <td>{{ $data->nilai }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

{{ $hasil->onEachSide(1)->links() }}

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