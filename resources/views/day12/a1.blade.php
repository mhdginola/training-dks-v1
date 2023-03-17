@extends('layout.video')

@section('title', 'Day12 - Packaging produk-produk dekkson dan kelengkapannya - part 2')

@section('judul', 'Packaging produk-produk dekkson dan kelengkapannya - part 2')

@section('prevRoute', '/materi')

@section('nextRoute', '/day12/a2')

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
    <li class="list-group-item border-0 active">Cabang-cabang dan DKS
    </li>
  </a>
  <a href="{{ route('day12.a2') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">
      Pintu dan jendela berdasarkan jenis-jenis dan fungsinya, serta spesifikasinya
    </li>
  </a>
  <a href="{{ route('day12.a3') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">Perhitungan-perhitungan</li>
  </a>
@endsection