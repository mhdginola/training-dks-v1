<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('icon/favicon.ico') }}">
    <meta name="description" content="desk">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree&display=swap" rel="stylesheet">
    <style> 
      @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree&display=swap'); 
      h1 {
        font-family: 'Bai Jamjuree', sans-serif;
      }
    </style>
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
    @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-5 text-center text-lg-start">
        </div>
        <div class="col-md-10 mx-auto mt-5 col-lg-7">
          <h1 class="display-4 fw-bold lh-1 mb-3 text-primary">Hello!</h1>
            <form class="gz1 p-4 p-md-5 border rounded-3 bg-light" method="post" action="/login">
                @csrf
                <div class="form-floating mb-3">
                    <input 
                      name="email" 
                      type="email" 
                      class="form-control @error('email') is-invalid @enderror" 
                      value="{{ old('email') }}"
                      id="email" 
                      autofocus>
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
                      placeholder="password">
                    <label for="password">Password</label>
                    @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <button class="btn btn-primary px-5" type="submit" style="border-radius: 0;">Login</button>
            </form>
        </div>
    </div>
</div>

<div 
  class="d-none d-lg-block"
  style="
    position: absolute;
    width: 0px;
    height: 50%;
    left: 20%;
    top: 0px;

    border-left: .1rem solid #8BA0B7;
    "
></div>

<div 
  class="elipse"
  style="
    position: absolute;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    right: 5%;
    top: 5%;
    z-index: -1;

    background: linear-gradient(209.44deg, #FDED97 26.05%, rgba(255, 254, 250, 0) 79.56%);
    filter: blur(8.5px);
  "
></div>

<img 
  src="/images/login.png" 
  alt="login" 
  class="d-none d-lg-block"
  style="
    position: absolute;
    width: 40%; 
    height:auto;
    top:20%;
    "
/>
</body>
</html>