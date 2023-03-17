@extends('layout.video')

@section('title', 'Day5 - WEST')

@section('judul', 'WEST')

@section('prevRoute', '/materi')

@section('nextRoute', '/day5/a2')

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
    <source src="{{ route('day5.vid1') }}" type="video/mp4">
    Your browser does not support HTML video.
  </video>
@endsection