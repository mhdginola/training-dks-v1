@extends('layout.sidebarUser')

@section('title', 'PPT')

@section('content')
    @if (Session::get('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
      <div>{{ Session::get('message') }}</div>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form action="/upload/ppt" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="ppt">Upload PPT</label>
        <input type="file" name="ppt" id="ppt" class="form-control @error('ppt') is-invalid @enderror">
        @error('ppt')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <input type="submit" value="submit" class="btn btn-primary mt-3">
    </form>
@endsection

