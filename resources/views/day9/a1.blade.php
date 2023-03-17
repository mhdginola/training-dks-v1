@extends('layout.video')

@section('title', 'Day9 - System-system pintu otomatis')

@section('judul', 'System-system pintu otomatis')

@section('prevRoute', '/materi')

@section('nextRoute', '/day9/a2')

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
    <source src="#" type="video/mp4">
    Your browser does not support HTML video.
  </video>
@endsection

@section('materi')
  <a href="#" class="text-white border-bottom">
    <li class="list-group-item border-0 active">System-system pintu otomatis
    </li>
  </a>
  <a href="{{ route('day9.a2') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">
      Spesifikasi untuk system pintu bandara
    </li>
  </a>
  <a href="{{ route('day9.a3') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">
      Spesifikasi untuk pintu mall
    </li>
  </a>
  <a href="{{ route('day9.a4') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">
      Spesifikasi untuk pintu kayu, aluminium, dan upvc
    </li>
  </a>
  <a href="{{ route('day9.a5') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">
      Spesifikasi untuk pintu kaca dan besi
    </li>
  </a>
@endsection