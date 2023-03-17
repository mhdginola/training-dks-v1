@extends('layout.sidebarUser')

@section('title', 'User Edit')

@section('content')
<div class="card col-12">
  <div class="card-body">
    <form action="{{ route('userUpdate') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-floating mb-3">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ auth()->user()->name }}">
        <label for="name">Nama Lengkap</label> 
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
        <label for="password">Password</label>
        @error('password')
          <span class="invalid-feedback">
            {{ $message }}
          </span>
        @enderror
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
        <label for="password_confirmation">Password Confirmation</label>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Default file input example</label>
        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" onchange="previewImage()">
        @error('image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <img src="{{ route('profilePic') }}" class="img-preview img-fluid border border-1 rounded-circle" style="width: 100px; height:100px; object-fit: cover;">
      </div>

      <input type="submit" value="UPDATE" class="btn btn-primary mt-3">
    </form>
  </div>
</div>

<script>
  function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>

@endsection