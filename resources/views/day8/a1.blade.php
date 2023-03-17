@extends('layout.video')

@section('title', 'Day8 - Electronik lock DEKKSON dan smart home DEON')

@section('judul', 'Electronik lock DEKKSON dan smart home DEON')

@section('prevRoute', '/materi')

@section('nextRoute', '/day8/a2')

@section('content')
  <video
    id="gVideo"
    controls 
    controlsList="nodownload noplaybackrate" 
    oncontextmenu="return false;" 
    style="
      width: 100%;
      height: 60vh;
      padding: 0px;
      background-color: #204F81; 
  ">
    <source src="{{ route('day8.vid1') }}" type="video/mp4">
    Your browser does not support HTML video.
  </video>
@endsection

@section('materi')
  <a href="#" class="text-white border-bottom">
    <li class="list-group-item border-0 active">Electronic lock dekkson dan smart home deon
    </li>
  </a>
  <a href="{{ route('day8.a2') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">
      spesifikasi untuk smart home
    </li>
  </a>
  <a href="{{ route('day8.a3') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">spesifikasi untuk system-system pintu manual</li>
  </a>
  <a href="{{ route('day8.a4') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">MOT dan pintu ruang operasi</li>
  </a>
  <a href="{{ route('day8.a5') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">Spesifikasi untuk system-system pintu otomatis</li>
  </a>
@endsection