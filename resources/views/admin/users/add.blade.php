@extends('layout.sidebarAdmin')

@section('content')
		
<div class="container">
	<h1>Register</h1>
	<div class="row">
		<form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="form-floating mb-3">
					<input 
						name="name" 
						type="text" 
						class="form-control @error('name') is-invalid @enderror" 
						value="{{ old('name') }}" 
						id="name" 
						placeholder="id"
						required
						autofocus>
					<label for="name">User</label>
					@error('name')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
			</div>
			<div class="form-floating mb-3">
					<input 
						name="email" 
						type="email" 
						class="form-control @error('email') is-invalid @enderror" 
						value="{{ old('email') }}" 
						id="email" 
						placeholder="id"
						required>
					<label for="email">Email</label>
					@error('email')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
			</div>
			<div class="form-floating mb-3">
					<input 
						name="password" 
						type="password" 
						class="form-control @error('password') is-invalid @enderror" 
						id="password" 
						placeholder="password"
						required>
					<label for="password">Password</label>
					@error('password')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
			</div>
			<div class="mb-3">
				<label for="image">Foto Profile</label>
				<input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" placeholder="upload picture" onchange="previewImage()">                  
				@error('image')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
				@enderror
				<div class="p-3">
					<img class="img-preview img-fluid border border-1 rounded-circle" style="width: 100px; height:100px; object-fit: cover;">
				</div>
			</div>
			<button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
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