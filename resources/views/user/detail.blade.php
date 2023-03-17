@extends('layout.sidebarUser')

@section('title', 'User Detail')

@section('content')
<div class="card col-12">
  <div class="card-body">
    <table>
      <tbody>
        <tr>
          <td>nama</td>
          <td> : </td>
          <td>{{ auth()->user()->name }}</td>
        </tr>
        <tr>
          <td>level</td>
          <td> : </td>
          <td>{{ auth()->user()->level }}</td>
        </tr>
        <tr>
          <td>email</td>
          <td> : </td>
          <td>{{ auth()->user()->email }}</td>
        </tr>
        <tr>
          <td>image</td>
          <td> : </td>
          <td><img src="{{ route('profilePic') }}" alt="profile" class=" img-fluid rounded-circle mb-2" style="width: 50px; height:50px; object-fit: cover;"></td>
        </tr>
      </tbody>
    </table>
    <a href="{{ route('userEdit') }}">
      <button class="btn btn-primary">edit</button>
    </a>
  </div>
</div>
@endsection