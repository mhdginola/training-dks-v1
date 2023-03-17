<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('icon/favicon.ico') }}">

    <meta name="description" content="desk">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    @if(isset($error))
      <div class="row">
          <div class="alert alert-danger" role="alert">
              {{ $error }}
          </div>
      </div>
    @endif
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Register</h1>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="/register" enctype="multipart/form-data">
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
                  <img class="img-preview img-fluid border border-1 rounded-circle" style="width: 100px; height:100px; object-fit: cover;">
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
        </div>
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

</body>
</html>