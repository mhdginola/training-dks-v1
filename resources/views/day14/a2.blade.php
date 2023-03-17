@extends('layout.video')

@section('title', 'Day14 - cara Make up, Berpakaian dengan jadwal seragamnya')

@section('judul', 'cara Make up, Berpakaian dengan jadwal seragamnya')

@section('prevRoute', '/day14/a1')

@section('nextRoute', '/day14/a3')

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
  <a href="{{ route('day14.a1') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">Cabang-cabang dan DKS
    </li>
  </a>
  <a href="#" class="text-white border-bottom">
    <li class="list-group-item border-0 active">
      Pintu dan jendela berdasarkan jenis-jenis dan fungsinya, serta spesifikasinya
    </li>
  </a>
  <a href="{{ route('day14.a3') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">Perhitungan-perhitungan</li>
  </a>
@endsection