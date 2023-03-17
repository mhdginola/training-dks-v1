@extends('layout.video')

@section('title', 'Day8 - Spesifikasi untuk system-sytem pintu manual')

@section('judul', 'Spesifikasi untuk system-sytem pintu manual')

@section('prevRoute', '/day8/a1')

@section('nextRoute', '/day8/a3')

@section('content')
<iframe
style="
width: 100%;
height: 60vh;
padding: 0px;
background-color: #204F81; 
" src="https://docs.google.com/presentation/d/e/2PACX-1vQvjxK61WBRrIPe5lYmKTRONSyg4cnHrvNMuJBJrZ02iXU2cXv3DHn46LK-c8nDTg/embed?start=false&loop=false&delayms=3000" frameborder="0" width="1920" height="1109" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
@endsection

@section('materi')
<a href="{{ route('day8.a2') }}" class="text-white border-bottom">
  <li class="list-group-item border-0">Electronic lock dekkson dan smart home deon
  </li>
</a>
<a href="#" class="text-white border-bottom">
  <li class="list-group-item border-0 active">
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