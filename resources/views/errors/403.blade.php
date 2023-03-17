<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="{{ asset('icon/favicon.ico') }}">
  <title>Document</title>
  {{-- css --}}
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div class="container h100vh d-flex align-items-center">
    <div class="w100">
      <h1 class="display-1 text-center"><b>403</b></h1>
      <h2 class="text-center">Forbidden</h2>
      <div class="d-flex justify-content-center mt-3">
        <a class="btn btn-primary m-auto" href="{{ url()->previous() }}">Back</a>
      </div>
    </div>
  </div>
</body>
</html>