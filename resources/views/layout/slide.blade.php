<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    body {
      background-image: url("{{ asset('/images/backgroundSlide.png') }}");
      background-size: cover;
      background-position-x: center;
    }
  </style>
</head>
<body>
  <div class="container-fluid v100">
    <div class="d-flex flex-column">
      <div class="v80 row">
        <a href="@yield('prevRoute')" style="width: 10%;" class="d-flex align-item-center flex-fill">
          <div class="flex-fill m-auto text-center">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" fill="#ffffff" class="bi bi-arrow-left m-auto" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg> --}}
            <svg width="100%" viewBox="0 0 480 117"  fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.83858 52.8869C-1.04971 55.9868 -1.04971 61.0128 3.83858 64.1127L83.498 114.626C88.3864 117.726 96.3115 117.726 101.2 114.626C106.088 111.527 106.088 106.501 101.2 103.401L30.3917 58.4998L101.2 13.5985C106.088 10.4987 106.088 5.47297 101.2 2.37316C96.3115 -0.726601 88.3864 -0.726601 83.498 2.37316L3.83858 52.8869ZM480 50.5623H12.6896V66.4373H480V50.5623Z"/>
            </svg>              
          </div>
        </a>
        {{-- <video
        id="gVideo"
        controls
        controlsList="nodownload noplaybackrate" 
        oncontextmenu="return false;" 
        style="
          width: 80%;
          height: 75vh;
          margin-top: 2vh;
          margin-bottom: 3vh;
          padding: 0px;
          background-color:transparent; 
        ">
        <source src="@yield('slide')" type="video/mp4">
        Your browser does not support HTML video.
        </video> --}}
        
        <iframe style="width: 80%;
        height: 75vh;
        margin-top: 2vh;
        margin-bottom: 3vh;
        padding: 0px;
        background-color:transparent; " 
        src="@yield('slide')" 
        frameborder="0" 
        width="1280" 
        height="749" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true">
        </iframe>
        
        <a href="@yield('nextRoute')" style="width: 10%;" class="d-flex align-item-center flex-fill">
          <div class="flex-fill m-auto text-center" style="transform: rotate(180deg);">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" fill="#ffffff" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg> --}}
            <svg width="100%" viewBox="0 0 480 117"  fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.83858 52.8869C-1.04971 55.9868 -1.04971 61.0128 3.83858 64.1127L83.498 114.626C88.3864 117.726 96.3115 117.726 101.2 114.626C106.088 111.527 106.088 106.501 101.2 103.401L30.3917 58.4998L101.2 13.5985C106.088 10.4987 106.088 5.47297 101.2 2.37316C96.3115 -0.726601 88.3864 -0.726601 83.498 2.37316L3.83858 52.8869ZM480 50.5623H12.6896V66.4373H480V50.5623Z"/>
            </svg>
          </div>
        </a>
      </div>
      <div class="v20">
        <div class="row v100p">
          <div class="col-9 d-flex align-content-center flex-wrap justify-content-start align-items-center" style="border-top: 1px solid #414549;">
            <h1 class="col-12 m-0 p-1 text-light">@yield('judul')</h1>
            <h5 class="col-12 p-1 text-light">@yield('sub-title')</h5>           
          </div>
          <div class="col" style="border-left: 1px solid #414549; border-top: 1px solid #414549;">
            <div class="v100p p-1 row d-flex justify-content-center align-items-center position-relative">
              <img style="height: 8vh; width: auto;" src="{{ asset('images/logoDekksonPutih.png') }}" alt="logo dekkson">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <script>
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
    });
  </script> --}}
</body>
</html>