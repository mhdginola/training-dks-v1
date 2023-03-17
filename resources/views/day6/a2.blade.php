@extends('layout.video')

@section('title', 'Day6 - pintu dan jendela')

@section('judul', 'Pintu dan jendela berdasarkan jenis-jenis dan fungsinya, serta spesifikasinya')

@section('prevRoute', '/day6/a1')

@section('nextRoute', '/day6/a3')

@section('content')
<iframe
style="
width: 100%;
height: 60vh;
padding: 0px;
background-color: #204F81; 
" src="https://docs.google.com/presentation/d/e/2PACX-1vRmSVEzqJbfqYgUGnZlPcfg17W-qk9FRjv3ch-HwvlCqiwMlVDEioJKhUUIw46myQ/embed?start=false&loop=false&delayms=3000" frameborder="0" width="1920" height="1109" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
@endsection

@section('materi')
  <a href="{{ route('day6.a1') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">Cabang-cabang dan DKS
    </li>
  </a>
  <a href="#" class="text-white border-bottom">
    <li class="list-group-item border-0 active">
      Pintu dan jendela berdasarkan jenis-jenis dan fungsinya, serta spesifikasinya
    </li>
  </a>
  <a href="{{ route('day6.a3') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">Perhitungan-perhitungan</li>
  </a>
  <a href="{{ route('day6.a4') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">Spesifikasi hardware berdasarkan material</li>
  </a>
  <a href="{{ route('day6.a5') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">System-system pintu khusus</li>
  </a>
@endsection