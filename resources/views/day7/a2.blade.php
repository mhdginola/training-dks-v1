@extends('layout.video')

@section('title', 'Day7 - Spesifikasi hardware untuk sebuah rumah mewah')

@section('judul', 'Spesifikasi hardware untuk sebuah rumah mewah')

@section('prevRoute', '/day7/a1')

@section('nextRoute', '/day7/a3')

@section('content')
<iframe
style="
width: 100%;
height: 60vh;
padding: 0px;
background-color: #204F81; 
" src="" frameborder="0" width="1920" height="1109" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
@endsection

@section('materi')
  <a href="{{ route('day7.a1') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">Cabang-cabang dan DKS
    </li>
  </a>
  <a href="#" class="text-white border-bottom">
    <li class="list-group-item border-0 active">
      Pintu dan jendela berdasarkan jenis-jenis dan fungsinya, serta spesifikasinya
    </li>
  </a>
  <a href="{{ route('day7.a3') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">Perhitungan-perhitungan</li>
  </a>
  <a href="{{ route('day7.a4') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">Spesifikasi hardware berdasarkan material</li>
  </a>
  <a href="{{ route('day7.a5') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">System-system pintu khusus</li>
  </a>
@endsection