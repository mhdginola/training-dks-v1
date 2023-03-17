<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="desk">
  <title>Document</title>
  {{-- css --}}
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  {{-- google font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree&family=Roboto&display=swap" rel="stylesheet">
  <style> 
    @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree&family=Roboto&display=swap'); 
  </style>
  <style>
    * {
      /* font-family: 'Bai Jamjuree', sans-serif; */
      font-family: 'Roboto', sans-serif;
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
    .v80 {
      height: 80vh;
    }
    .v60 {
      height: 60vh;
    }
    .v40 {
      height: 40vh;
    }
    .v20 {
      height: 20vh;
    }
    .gbtn{
      background-color: transparent;
      border: 1px solid #204F81;
      border-radius: 0px;
    }
  </style>
  <script>
    function closeg(){
      document.getElementById("sidebar").className = 'd-none';
      document.getElementById("openg").className = 'btn btn-primary m-2';
    }
  
    function openg(){
      document.getElementById("sidebar").className = '';
      document.getElementById("openg").className = 'd-none';
    }
  
    window.onload = function(){
      document.getElementById("closeg").addEventListener( 'click', closeg);
      document.getElementById("openg").addEventListener( 'click', openg);
  
      const nav1 = document.getElementById("navDashboard");
      const nav2 = document.getElementById("navMateri");
      const nav3 = document.getElementById("navQuiz");
      const nav4 = document.getElementById("navHasilQuiz");
      const nav5 = document.getElementById("upload");
      const nav6 = document.getElementById("listVideo");
  
      if (window.location.pathname === "/dashboard") {
        nav1.classList.add("btn-primary");
      }
      if (window.location.pathname === "/materi") {
        nav2.classList.add("btn-primary");
      }
      if (window.location.pathname === "/quizList") {
        nav3.classList.add("btn-primary");
      }
      if (window.location.pathname === "/hasil") {
        nav4.classList.add("btn-primary");
      }
      if (window.location.pathname === "/upload/video") {
        nav5.classList.add("btn-primary");
      }
      if (window.location.pathname === "/list/video") {
        nav6.classList.add("btn-primary");
      }
    }
  </script>
</head>
<body>
  <div class="h100vh d-flex flex-row">
    <nav class="" id="sidebar" style="width: clamp(300px, 400px, 700px);">
      <div class="d-flex justify-content-between align-items-center px-2" style="height: 15%; width:100%;">
        <img src="{{ asset('images/logoDekkson.png') }}" alt="logo" height="100px">
        <h2 id="closeg" style="cursor: pointer;"><i class="bi bi-x-lg"></i></h2>
      </div>
      <div class="d-flex align-items-center ps-3" style="height: 70%; width:100%;">
        <div class="flex-fill nav-body d-grid gap-2 p-2">
          <a href="{{ route('dashboard') }}" class="d-grid">
            <button class="btn text-start ps-3" id="navDashboard">
              <b>DASHBOARD</b>
            </button>
          </a>
          <a href="{{ route('materi') }}" class="d-grid">
            <button class="btn text-start ps-3" id="navMateri">
              <b>MATERI</b>
            </button>
          </a>
          <a href="{{ route('quizList') }}" class="d-grid">
            <button class="btn text-start ps-3" id="navQuiz">
              <b>QUIZ</b>
            </button>
          </a>
          <a href="{{ route('hasil') }}" class="d-grid">
            <button class="btn text-start ps-3" id="navHasilQuiz">
              <b>HASIL QUIZ</b>
            </button>
          </a>
          <a href="{{ route('uploadVideo') }}" class="d-grid">
            <button class="btn text-start ps-3" id="upload">
              <b>UPLOAD</b>
            </button>
          </a>
          <a href="{{ route('listVideo') }}" class="d-grid">
            <button class="btn text-start ps-3" id="listVideo">
              <b>LIST VIDEO</b>
            </button>
          </a>
          <form action="{{ route('logout') }}" method="post" class="d-grid">
            @csrf
            <input type="submit" value="LOGOUT" class="btn btn-danger text-start ps-3">
          </form>
        </div>
      </div>
      <div class="d-grid" style="height: 15%; width: 100%">
      
      </div>
    </nav>
    <button 
      class="d-none" 
      id="openg" 
      style= "position: absolute;
              left: 0px;
              top: 0px;
              cursor: pointer;"
    >
      <h2 class="m-0">
        <i class="bi bi-list"></i>
      </h2>
    </button>
    <div class="overflow-auto container-fluid servicebody" id="myservice_section" id="main">
    {{-- style="background-color: #F5F5F5;"  --}}
      <div class="service-are" id="service">
        <div class="row mt-3">
          <div class="col-xs-12">
            <div class="section-title text-center">
              <h1><b>@yield('title')</b></h1>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="d-flex flex-wrap">
            @yield('content')
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  

</body>
</html>