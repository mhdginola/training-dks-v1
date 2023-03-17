@extends('layout.sidebarUser')

@section('title', 'Video')

@section('content')
  <div class="container">
    <table class="table table-hover overflow-auto">
      <thead>
        <tr style="position: sticky; top: 0px; background-color: #ffffff;">
          <th>No</th>
          <th>name</th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
        @php($i=1)
        @foreach ($videos as $item)
        <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $item->file_path }}</td>
          <td><a href="/list/video/download/{{ $item->file_path }}">download</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection

