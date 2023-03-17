@extends('layout.sidebarAdmin')

@section('title', 'User Edit')

@section('content')
<div class="card col-12">
  <div class="card-body">
    <form action="{{ route('users.update', [ 'user' => $user->id ]) }}" method="post" enctype="multipart/form-data">
      @method('PATCH')
      @csrf

			<input type="hidden" name="user_id" value="{{ $user->id }}">

      <div class="form-floating mb-3">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}">
        <label for="name">Nama Lengkap</label> 
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

			<div class="form-floating mb-3">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}">
        <label for="name">Email</label> 
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

			<select name="level" class="form-select mb-3" aria-label="Default select example" required>
        @for ($i = 1; $i <= 15; $i++)
          <option value="{{ $i }}"
          @if ($user->level == $i)
              selected
          @endif
          >Level {{ $i }}</option>    
        @endfor
			</select>

      <input type="submit" value="UPDATE" class="btn btn-primary mt-3">
    </form>

  </div>
  
</div>
<div class="mt-3">
  <form action="{{ route('resetPassword') }}" method="post">
    @csrf
    <input type="hidden" name="user_id" value="{{ $user->id }}">
    
    <input type="submit" value="Reset Password" class="btn btn-danger">
  </form>
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