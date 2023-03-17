@extends('layout.video')

@section('title', 'Day15 - Penjelasan berkas-berkas yang harus diisi dan target-target yang harus dicapai')

@section('judul', 'Penjelasan berkas-berkas yang harus diisi dan target-target yang harus dicapai')

@section('prevRoute', '/materi')

@section('nextRoute', '/materi')

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
@endsection