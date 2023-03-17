<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <form action="/day10/upload" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="powerpoint">Upload ppt</label>
        <input type="file" name="powerpoint" id="powerpoint" class="form-control @error('powerpoint') is-invalid @enderror">
        @error('powerpoint')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <input type="submit" value="submit">
    </form>
  </div>
</body>
</html>