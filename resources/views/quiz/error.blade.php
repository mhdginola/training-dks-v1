<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="{{ asset('icon/favicon.ico') }}">
  <title>Document</title>
</head>
<body>
  <h1>Kamu sudah menjalankan tes di : </h1>
  <p>{{ Session::get('date') }}</p>
  <a href="{{ url()->previous() }}">Back</a>
</body>
</html>