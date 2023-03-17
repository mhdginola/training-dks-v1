<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="{{ asset('icon/favicon.ico') }}">
  <meta name="description" content="desk">
  <title>Dekkson</title>
  {{-- css --}}
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  {{-- google font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree&family=Roboto&display=swap" rel="stylesheet">
  <style> 
    @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree&family=Roboto&display=swap'); 
  </style>
  <style>
    * {
      font-family: 'Roboto', sans-serif;
    }
    .font-bai {
      font-family: 'Bai Jamjuree', sans-serif;
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
    .gActive {
      border-left: 5px solid #204F81;
      border-radius: 0px;
    }
    .gActive:hover {
      border-left: 5px solid #204F81;
      border-radius: 0px;
    }
    .gActive b {
      color: #134A86;
    }
    .gActive svg {
      fill: #134A86;
    }
    .g-text-gray {
      color: #878787;
    }
    .arrow-right {
      position: absolute;
      bottom: -4.4px;
      right: 0px;
      border: solid white;
      border-width: 0 1px 1px 0;
      display: inline-block;
      padding: 3px;
      transform: rotate(-45deg);
      -webkit-transform: rotate(-45deg);
    }
    .gsidenav {
      width: clamp(300px, 400px, 700px); 
      border-right: 1px solid #A1B2C4;
    }
    .gopenbtn {
      width: 40px;
      height: 40px;
    }
  </style>
  <script>
    window.onload = function(){
      const nav1 = document.getElementById("navDashboard");
      const nav2 = document.getElementById("navMateri");
      const nav3 = document.getElementById("navQuiz");
      const nav4 = document.getElementById("navHasilQuiz");
      const nav5 = document.getElementById("upload");
      const nav6 = document.getElementById("listVideo");
  
      if (window.location.pathname === "/dashboard") {
        nav1.classList.add("gActive");
      }
      if (window.location.pathname === "/materi") {
        nav2.classList.add("gActive");
      }
      if (window.location.pathname === "/quizList") {
        nav3.classList.add("gActive");
      }
      if (window.location.pathname === "/hasil") {
        nav4.classList.add("gActive");
      }
      if (window.location.pathname === "/upload/video") {
        nav5.classList.add("gActive");
      }
      if (window.location.pathname === "/list/video") {
        nav6.classList.add("gActive");
      }
    }
  </script>
</head>
<body>
  <button id="open" class="gopenbtn collapse multi-collapse collapse-horizontal fixed-top btn btn-primary m-2" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="sidenav">
    <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" viewBox="0 0 448 512">
      <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
      <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
    </svg>
  </button>
  <div class="h100vh d-flex flex-row" data-bs-theme="dark">
    <div class="gsidenav collapse show multi-collapse collapse-horizontal" id="sidebar">
      <nav class="d-flex flex-column" id="sidebar">
        
        <div class="d-flex flex-column justify-content-between align-items-center px-2 position-relative" style="width:100%;">
          <img src="{{ asset('images/logoDekkson.png') }}" alt="logo" height="100px">
          <a href="{{ route('userDetail') }}"><img src="{{ route('profilePic') }}" alt="profile" class=" img-fluid rounded-circle mb-2" style="width: 50px; height:50px; object-fit: cover;"></a>
          <h6 class="m-0">{{ auth()->user()->name }}</h6>
          <p>Level {{ auth()->user()->level }}</p>
          <button type="button" class="btn-close position-absolute top-0 end-0 p-3" aria-label="Close" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="sidenav"></button>
        </div>

        <div class="flex-fill overflow-auto d-flex align-items-start ps-3" style="width:100%;">
          <div class="flex-fill nav-body d-grid gap-2 p-2">
            <a href="{{ route('dashboard') }}" class="d-grid">
              <button class="btn text-start ps-3 d-flex" id="navDashboard">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="#878787" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.16666 12.8333H12.8333V19.2499H9.16666V12.8333Z"/>
                  <path d="M18.7183 9.33164L11.6508 2.10831C11.5656 2.02239 11.4642 1.95419 11.3525 1.90766C11.2408 1.86112 11.121 1.83716 11 1.83716C10.879 1.83716 10.7592 1.86112 10.6475 1.90766C10.5358 1.95419 10.4344 2.02239 10.3492 2.10831L3.28165 9.34081C3.11063 9.5132 2.97557 9.71786 2.8843 9.94288C2.79303 10.1679 2.74738 10.4088 2.74998 10.6516V18.3333C2.74927 18.8026 2.92853 19.2542 3.25083 19.5953C3.57313 19.9363 4.01394 20.1408 4.48248 20.1666H7.33332V11.9166C7.33332 11.6735 7.42989 11.4404 7.6018 11.2685C7.77371 11.0966 8.00687 11 8.24998 11H13.75C13.9931 11 14.2263 11.0966 14.3982 11.2685C14.5701 11.4404 14.6667 11.6735 14.6667 11.9166V20.1666H17.5175C17.986 20.1408 18.4268 19.9363 18.7491 19.5953C19.0714 19.2542 19.2507 18.8026 19.25 18.3333V10.6516C19.2507 10.1593 19.0601 9.68601 18.7183 9.33164Z"/>
                </svg>                          
                <b class="ms-4 g-text-gray">DASHBOARD</b>
              </button>
            </a>
            <a href="{{ route('materi') }}" class="d-grid">
              <button class="btn text-start ps-3" id="navMateri">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="#878787" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.75 14.6666H8.24998C8.00686 14.6666 7.77371 14.7632 7.6018 14.9351C7.42989 15.107 7.33331 15.3402 7.33331 15.5833C7.33331 15.8264 7.42989 16.0596 7.6018 16.2315C7.77371 16.4034 8.00686 16.5 8.24998 16.5H13.75C13.9931 16.5 14.2263 16.4034 14.3982 16.2315C14.5701 16.0596 14.6666 15.8264 14.6666 15.5833C14.6666 15.3402 14.5701 15.107 14.3982 14.9351C14.2263 14.7632 13.9931 14.6666 13.75 14.6666Z"/>
                  <path d="M8.24998 12.8333H11C11.2431 12.8333 11.4763 12.7368 11.6482 12.5648C11.8201 12.3929 11.9166 12.1598 11.9166 11.9167C11.9166 11.6736 11.8201 11.4404 11.6482 11.2685C11.4763 11.0966 11.2431 11 11 11H8.24998C8.00686 11 7.77371 11.0966 7.6018 11.2685C7.42989 11.4404 7.33331 11.6736 7.33331 11.9167C7.33331 12.1598 7.42989 12.3929 7.6018 12.5648C7.77371 12.7368 8.00686 12.8333 8.24998 12.8333Z"/>
                  <path d="M18.095 7.63592L13.1083 2.13592C13.0226 2.04096 12.918 1.96499 12.8012 1.91289C12.6843 1.86079 12.5579 1.83372 12.43 1.83342H6.01332C5.70876 1.82978 5.40646 1.88618 5.1237 1.99939C4.84093 2.11259 4.58324 2.28039 4.36532 2.49319C4.14741 2.706 3.97355 2.95964 3.85367 3.23964C3.7338 3.51965 3.67025 3.82052 3.66666 4.12508V17.8751C3.67025 18.1796 3.7338 18.4805 3.85367 18.7605C3.97355 19.0405 4.14741 19.2942 4.36532 19.507C4.58324 19.7198 4.84093 19.8876 5.1237 20.0008C5.40646 20.114 5.70876 20.1704 6.01332 20.1667H15.9867C16.2912 20.1704 16.5935 20.114 16.8763 20.0008C17.159 19.8876 17.4167 19.7198 17.6347 19.507C17.8526 19.2942 18.0264 19.0405 18.1463 18.7605C18.2662 18.4805 18.3297 18.1796 18.3333 17.8751V8.25008C18.3327 8.0229 18.2478 7.80403 18.095 7.63592ZM12.8333 4.58342L15.345 7.33342H13.5117C13.4157 7.32762 13.3218 7.30276 13.2355 7.2603C13.1492 7.21783 13.0723 7.1586 13.0091 7.08607C12.946 7.01354 12.8979 6.92915 12.8677 6.83784C12.8375 6.74653 12.8258 6.65013 12.8333 6.55425V4.58342ZM15.9867 18.3334H6.01332C5.9495 18.3371 5.88557 18.3282 5.8252 18.3072C5.76483 18.2861 5.70921 18.2534 5.66152 18.2108C5.61383 18.1682 5.57501 18.1167 5.54729 18.059C5.51958 18.0014 5.5035 17.9389 5.49999 17.8751V4.12508C5.5035 4.06125 5.51958 3.99873 5.54729 3.94112C5.57501 3.88351 5.61383 3.83194 5.66152 3.78936C5.70921 3.74678 5.76483 3.71403 5.8252 3.69299C5.88557 3.67195 5.9495 3.66304 6.01332 3.66675H11V6.55425C10.9852 7.22949 11.2381 7.88316 11.7035 8.37262C12.1689 8.86207 12.809 9.14755 13.4842 9.16675H16.5V17.8751C16.4965 17.9389 16.4804 18.0014 16.4527 18.059C16.425 18.1167 16.3862 18.1682 16.3385 18.2108C16.2908 18.2534 16.2352 18.2861 16.1748 18.3072C16.1144 18.3282 16.0505 18.3371 15.9867 18.3334Z"/>
                </svg>                
                <b class="ms-4 g-text-gray">MATERI</b>
              </button>
            </a>
            <a href="{{ route('quizList') }}" class="d-grid">
              <button class="btn text-start ps-3" id="navQuiz">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="#878787" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.4167 18.3334H4.58332C4.34021 18.3334 4.10705 18.43 3.93514 18.6019C3.76323 18.7738 3.66666 19.0069 3.66666 19.25C3.66666 19.4932 3.76323 19.7263 3.93514 19.8982C4.10705 20.0701 4.34021 20.1667 4.58332 20.1667H17.4167C17.6598 20.1667 17.8929 20.0701 18.0648 19.8982C18.2367 19.7263 18.3333 19.4932 18.3333 19.25C18.3333 19.0069 18.2367 18.7738 18.0648 18.6019C17.8929 18.43 17.6598 18.3334 17.4167 18.3334Z"/>
                  <path d="M4.58333 16.5H4.66583L8.48833 16.1516C8.90706 16.1099 9.2987 15.9254 9.5975 15.6291L17.8475 7.37912C18.1677 7.04084 18.3408 6.58942 18.3287 6.12378C18.3167 5.65813 18.1206 5.21625 17.7833 4.89495L15.2717 2.38328C14.9439 2.07537 14.5143 1.8987 14.0647 1.88687C13.6151 1.87503 13.1769 2.02887 12.8333 2.31912L4.58333 10.5691C4.28703 10.8679 4.10254 11.2596 4.06083 11.6783L3.66666 15.5008C3.65432 15.635 3.67174 15.7704 3.71769 15.8971C3.76364 16.0239 3.83698 16.139 3.9325 16.2341C4.01815 16.3191 4.11973 16.3863 4.23142 16.4319C4.3431 16.4775 4.46269 16.5006 4.58333 16.5ZM13.9975 3.66662L16.5 6.16912L14.6667 7.95662L12.21 5.49995L13.9975 3.66662ZM5.83916 11.8341L11 6.70995L13.475 9.18495L8.34166 14.3183L5.59166 14.575L5.83916 11.8341Z"/>
                  </svg>                
                <b class="ms-4 g-text-gray">QUIZ</b>
              </button>
            </a>
            <a href="{{ route('uploadVideo') }}" class="d-grid">
              <button class="btn text-start ps-3" id="upload">
                <svg width="22" height="23" viewBox="0 0 22 23" fill="#878787" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.6509 10.4753C11.4795 10.3053 11.2491 10.2101 11.0092 10.2101C10.7692 10.2101 10.5389 10.3053 10.3675 10.4753L7.61752 13.166C7.52025 13.2473 7.44059 13.348 7.38352 13.4618C7.32645 13.5756 7.29319 13.7001 7.28583 13.8275C7.27847 13.955 7.29717 14.0826 7.34075 14.2023C7.38433 14.3221 7.45186 14.4315 7.53911 14.5237C7.62637 14.6158 7.73147 14.6888 7.84785 14.7379C7.96422 14.7871 8.08937 14.8114 8.21546 14.8094C8.34155 14.8074 8.46587 14.7791 8.58065 14.7262C8.69543 14.6733 8.79819 14.597 8.88252 14.5021L10.0834 13.3238V18.5568C10.0834 18.8029 10.1799 19.0389 10.3518 19.2129C10.5237 19.3869 10.7569 19.4846 11 19.4846C11.2431 19.4846 11.4763 19.3869 11.6482 19.2129C11.8201 19.0389 11.9167 18.8029 11.9167 18.5568V13.3702L13.0992 14.5764C13.1844 14.6633 13.2858 14.7323 13.3975 14.7794C13.5092 14.8266 13.629 14.8508 13.75 14.8508C13.871 14.8508 13.9908 14.8266 14.1025 14.7794C14.2143 14.7323 14.3156 14.6633 14.4009 14.5764C14.4868 14.4901 14.555 14.3875 14.6015 14.2744C14.648 14.1613 14.672 14.0401 14.672 13.9176C14.672 13.7951 14.648 13.6738 14.6015 13.5608C14.555 13.4477 14.4868 13.3451 14.4009 13.2588L11.6509 10.4753Z"/>
                  <path d="M16.1975 6.49487C15.8235 5.401 15.1219 4.45235 14.1903 3.78091C13.2588 3.10948 12.1436 2.74866 11 2.74866C9.8564 2.74866 8.74124 3.10948 7.80969 3.78091C6.87814 4.45235 6.17653 5.401 5.8025 6.49487C4.97892 6.60652 4.20082 6.9427 3.55144 7.46742C2.90205 7.99215 2.40582 8.6857 2.11581 9.47387C1.82581 10.262 1.75295 11.1152 1.90502 11.942C2.05709 12.7689 2.42838 13.5383 2.97916 14.1681C3.04569 14.2867 3.13724 14.389 3.24729 14.4677C3.35735 14.5465 3.48319 14.5996 3.61587 14.6235C3.74855 14.6474 3.88479 14.6414 4.01491 14.6059C4.14502 14.5704 4.2658 14.5063 4.36865 14.4181C4.47149 14.33 4.55387 14.22 4.60993 14.0959C4.66598 13.9719 4.69432 13.8369 4.69294 13.7005C4.69156 13.5641 4.66048 13.4297 4.60193 13.3068C4.54337 13.184 4.45877 13.0757 4.35416 12.9897C3.99952 12.5884 3.76748 12.0916 3.68618 11.5595C3.60487 11.0274 3.67778 10.4828 3.89608 9.99177C4.11438 9.50076 4.46869 9.08437 4.91607 8.79306C5.36346 8.50175 5.88471 8.34804 6.41666 8.35055H6.50833C6.72278 8.35492 6.93196 8.28304 7.09945 8.14742C7.26694 8.01179 7.38214 7.82101 7.425 7.60828C7.59331 6.7693 8.043 6.01501 8.69787 5.47323C9.35275 4.93144 10.1725 4.63548 11.0183 4.63548C11.8641 4.63548 12.6839 4.93144 13.3388 5.47323C13.9937 6.01501 14.4434 6.7693 14.6117 7.60828C14.6545 7.82101 14.7697 8.01179 14.9372 8.14742C15.1047 8.28304 15.3139 8.35492 15.5283 8.35055H15.5833C16.1153 8.34804 16.6365 8.50175 17.0839 8.79306C17.5313 9.08437 17.8856 9.50076 18.1039 9.99177C18.3222 10.4828 18.3951 11.0274 18.3138 11.5595C18.2325 12.0916 18.0005 12.5884 17.6458 12.9897C17.5651 13.0814 17.5031 13.1884 17.4635 13.3044C17.4239 13.4205 17.4075 13.5434 17.4152 13.6659C17.4228 13.7885 17.4545 13.9083 17.5082 14.0184C17.562 14.1285 17.6368 14.2267 17.7283 14.3073C17.8954 14.4564 18.1105 14.5389 18.3333 14.5392C18.4635 14.5391 18.5921 14.5108 18.7106 14.4564C18.8292 14.402 18.9349 14.3227 19.0208 14.2238C19.5869 13.5951 19.9713 12.821 20.132 11.9861C20.2928 11.1512 20.2236 10.2877 19.9322 9.48991C19.6408 8.69211 19.1383 7.99076 18.4796 7.46255C17.8209 6.93433 17.0315 6.59957 16.1975 6.49487Z"/>
                </svg>                
                <b class="ms-4 g-text-gray">UPLOAD</b>
              </button>
            </a>
            <a href="{{ route('hasil') }}" class="d-grid">
              <button class="btn text-start ps-3" id="navHasilQuiz">
                <svg width="22" height="23" fill="#878787" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm64 192c17.7 0 32 14.3 32 32v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm64-64c0-17.7 14.3-32 32-32s32 14.3 32 32V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V160zM320 288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V320c0-17.7 14.3-32 32-32z"/>
                </svg>
                <b class="ms-4 g-text-gray">HASIL QUIZ</b>
              </button>
            </a>
          </div>
        </div>
        
        <div class="d-grid ps-3" style="width: 100%">
          <form action="{{ route('logout') }}" method="post" class="d-grid p-2">
            @csrf
            {{-- <input type="submit" value="LOGOUT" class="btn btn-danger text-start ps-3"> --}}
            <button type="submit" class="btn text-start ps-3 d-flex">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="red" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.41666 5.50002C6.65977 5.50002 6.89293 5.40344 7.06484 5.23153C7.23675 5.05963 7.33332 4.82647 7.33332 4.58335C7.33332 4.34024 7.23675 4.10708 7.06484 3.93517C6.89293 3.76326 6.65977 3.66669 6.41666 3.66669H4.58332C4.34021 3.66669 4.10705 3.76326 3.93514 3.93517C3.76323 4.10708 3.66666 4.34024 3.66666 4.58335V17.4167C3.66666 17.6598 3.76323 17.893 3.93514 18.0649C4.10705 18.2368 4.34021 18.3334 4.58332 18.3334H6.41666C6.65977 18.3334 6.89293 18.2368 7.06484 18.0649C7.23675 17.893 7.33332 17.6598 7.33332 17.4167C7.33332 17.1736 7.23675 16.9404 7.06484 16.7685C6.89293 16.5966 6.65977 16.5 6.41666 16.5H5.49999V5.50002H6.41666Z"/>
                <path d="M19.085 10.4684L16.5 6.8017C16.3598 6.60408 16.147 6.47 15.9083 6.42877C15.6695 6.38755 15.4241 6.44253 15.2258 6.5817C15.1267 6.65117 15.0423 6.73959 14.9775 6.84186C14.9127 6.94412 14.8688 7.05821 14.8484 7.17752C14.8279 7.29684 14.8313 7.41903 14.8583 7.53703C14.8853 7.65503 14.9355 7.76651 15.0058 7.86504L16.5825 10.0834H16.5H9.16664C8.92352 10.0834 8.69036 10.1799 8.51846 10.3519C8.34655 10.5238 8.24997 10.7569 8.24997 11C8.24997 11.2432 8.34655 11.4763 8.51846 11.6482C8.69036 11.8201 8.92352 11.9167 9.16664 11.9167H16.5L14.85 14.1167C14.7777 14.213 14.7252 14.3226 14.6953 14.4392C14.6654 14.5558 14.6588 14.6772 14.6758 14.7963C14.6929 14.9155 14.7332 15.0302 14.7945 15.1337C14.8559 15.2373 14.937 15.3278 15.0333 15.4C15.192 15.519 15.385 15.5834 15.5833 15.5834C15.7256 15.5834 15.866 15.5502 15.9932 15.4866C16.1205 15.423 16.2313 15.3306 16.3166 15.2167L19.0666 11.55C19.184 11.395 19.2491 11.2066 19.2524 11.0122C19.2557 10.8178 19.197 10.6273 19.085 10.4684Z"/>
              </svg>
              <b class="ms-4" style="color: red;">LOGOUT</b>
            </button>
          </form>
        </div>

      </nav>
    </div>
    <button 
      class="d-none" 
      id="openg" 
      style= "position: absolute;
              left: 0px;
              top: 0px;
              cursor: pointer;">
      <h2 class="m-0">
        <i class="bi bi-list"></i>
      </h2>
    </button>
    <div class="overflow-auto container-fluid servicebody" id="myservice_section" id="main">
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

  <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>