@extends('layout.video')

@section('title', 'Day7 - Spesifikasi hardware sebuah rumah sederhana')

@section('judul', 'Spesifikasi hardware sebuah rumah sederhana')

@section('prevRoute', '/materi')

@section('nextRoute', '/day7/a2')

@section('content')
<iframe
style="
width: 100%;
height: 60vh;
padding: 0px;
background-color: #204F81; 
" src="https://docs.google.com/presentation/d/e/2PACX-1vRtgfhKEyN5cm-t-IWZPbcS9GulQMhgHHU5fFRAIwDXuRnNzh3dxQG02cMAru8zlw/embed?start=false&loop=false&delayms=3000" frameborder="0" width="1920" height="1109" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
@endsection

@section('materi')
  <a href="#" class="text-white border-bottom">
    <li class="list-group-item border-0 active">Cabang-cabang dan DKS
    </li>
  </a>
  <a href="{{ route('day7.a2') }}" class="text-white border-bottom">
    <li class="list-group-item border-0">
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