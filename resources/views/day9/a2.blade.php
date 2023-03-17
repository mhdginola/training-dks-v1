@extends('layout.video')

@section('title', 'Day9 - Spesifikasi untuk system-system pintu bandara')

@section('judul', 'Spesifikasi untuk system-system pintu bandara')

@section('prevRoute', '/day9/a1')

@section('nextRoute', '/day9/a3')

@section('content')
<iframe style="
width: 100%;
height: 60vh;
padding: 0px;
background-color: #204F81; 
" src="https://docs.google.com/presentation/d/e/2PACX-1vRZHYZNbi2MjMGf4UxzSJaBC1cE5lv4znyyvFMD8JhOZ6awA8ZRaa4FWZOS2miLcg/embed?start=false&amp;loop=false&amp;delayms=3000" frameborder="0" width="1920" height="1109" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
@endsection

@section('materi')
<a href="{{ route('day9.a1') }}" class="text-white border-bottom">
  <li class="list-group-item border-0 active">System-system pintu otomatis
  </li>
</a>
<a href="#" class="text-white border-bottom">
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