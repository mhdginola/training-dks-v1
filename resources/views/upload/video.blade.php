@extends('layout.sidebarUser')

@section('title', 'Video')

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
  <div class="">
    @if (Session::get('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
      <div>{{ Session::get('message') }}</div>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form action="/upload/video" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="video">Upload Video</label>
        <input type="file" name="video" id="video" class="form-control @error('video') is-invalid @enderror">
        @error('video')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <input type="submit" value="submit" class="btn btn-primary mt-3">
    </form>
  </div>
@endsection

