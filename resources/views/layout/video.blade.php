<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="{{ asset('icon/favicon.ico') }}">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
    .v100 {
      height: 100vh;
      overflow: hidden;
    }
    .v60 {
      height: 60vh;
    }
    .v40 {
      height: 40vh;
    }
    .gbtn{
      background-color: transparent;
      border: 1px solid #204F81;
      border-radius: 0px;
    }
  </style>
  
</head>
<body>
  <div class="container-fluid v100">
    <div class="row" style="box-sizing: border-box;">
      {{-- left-side start --}}
      <div class="p-3 col-9">
        {{-- video start --}}
        <div class="row v60">
          <div class="video">
            @yield('content')
          </div>
        </div>
        {{-- video stop --}}

        {{-- desc start --}}
        <div class="col v40 border border-1 overflow-auto">
          <div class="row px-3">
            <h1>@yield('judul')</h1>
          </div>
          <div class="row px-3">
            <p>deck Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe facilis aliquam debitis, exercitationem tenetur, illo omnis officia molestias blanditiis distinctio, aspernatur similique qui eveniet adipisci beatae esse nihil voluptate accusantium?</p>
          </div>
          <hr>
          <div class="row px-3 align-self-end">
            <h2 class="text-end">Rin M</h2>
          </div>
          <div class="row px-3 align-self-end">
            <p class="text-end">Manager</p>
          </div>
        </div>
        {{-- desc stop --}}
      </div>
      {{-- left-side end --}}

      {{-- right-side start --}}
      <div class="col-3">
        <div class="d-flex align-content-between flex-wrap v100">
          <div class="w-100"></div>
          <div class="w-100">
            <ul class="list-group">
              @yield('materi')
            </ul>
          </div>
          <div class="w-100 d-flex justify-content-center">
            <a href="@yield('prevRoute')">
              <button class="btn btn-primary bg-white text-primary rounded-0 py-1 px-5 mb-3 me-3">Prev</button>
            </a>
            <a href="@yield('nextRoute')">
              <button class="btn btn-primary bg-white text-primary rounded-0 py-1 px-5 mb-3 me-3">Next</button>
            </a>
          </div>
        </div>
      </div>
      {{-- right-side end --}}
    </div>
  </div>

  
  <script>
    var video = document.getElementById('gVideo');
    var supposedCurrentTime = 0;
    video.addEventListener('timeupdate', function() {
      if (!video.seeking) {
            supposedCurrentTime = video.currentTime;
      }
    });
    // prevent user from seeking
    video.addEventListener('seeking', function() {
      // guard agains infinite recursion:
      // user seeks, seeking is fired, currentTime is modified, seeking is fired, current time is modified, ....
      var delta = video.currentTime - supposedCurrentTime;
      if (Math.abs(delta) > 0.01) {
        console.log("Seeking is disabled");
        video.currentTime = supposedCurrentTime;
      }
    });
    // delete the following event handler if rewind is not required
    video.addEventListener('ended', function() {
      // reset state in order to allow for rewind
        supposedCurrentTime = 0;
        // console.log('end');
    });
  </script>
  
</body>
</html>