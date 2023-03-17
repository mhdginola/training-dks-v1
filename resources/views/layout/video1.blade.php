<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree&family=Fraunces:opsz,wght@9..144,700&family=Montserrat:wght@500;700&display=swap');
  </style>

  <style>
    *{
      font-family: 'Bai Jamjuree', sans-serif;
      color: #204F81;
    }
    a{
      text-decoration: none;
    }
    .w100{
      width: 100%;
    }
    .w30{
      width: 30%;
    }
    .w20{
      width: 20%;
    }
    .w10{
      width: 10%;
    }
    .gbtn{
      background-color: transparent;
      border: 1px solid #204F81;
      border-radius: 0px;
    }
  </style>
  
</head>
<body>
  <div class="p-3">
    {{-- header start --}}
    <div class="d-flex">
      <div class="w30 border-start border-2 px-2">
        <h1>Company Profile</h1>
        <h2>video</h2>
      </div>
      <div class="w30 border-start border-2 px-2">
        <h1>Deskripsi</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam inventore quos cupiditate incidunt saepe, ipsum veniam nulla consectetur adipisci molestiae beatae, ipsam animi, consequuntur eum expedita aperiam fugiat id? Similique?</p>
      </div>
      <div class="w30 border-start border-2 px-2">
        <h1>Speaker</h1>
        <h2>Dekkson</h2>
      </div>
      <div class="w10 d-flex align-content-between flex-wrap">
        <div class="w100">
          @yield('prevRoute')
        </div>
        <div class="w100">
          @yield('nextRoute')
        </div>
      </div>
    </div>
    {{-- header end --}}

    {{-- video start --}}
    @yield('content')
    {{-- video stop --}}
  </div>
</body>
</html>