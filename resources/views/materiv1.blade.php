@extends('layout.sidebarUser')

@section('title', 'MATERI')

@section('content')
<div class="container">
  <div class="d-flex flex-wrap">
    <div class="p-3 col-12 col-md-6 col-lg-4 col-xl-3">
      <a href="{{ route('day1.a1') }}">
        <div 
          class="rounded-0 card overflow-hidden p-2" 
          style="
            height: 280px; 
            background-image: url('{{ asset('images/day1.png') }}');
            background-color: #204F81;
            background-blend-mode: multiply;
            background-size:cover; 
            background-position:center;
            background-repeat: no-repeat;
          ">
          <div class="d-flex align-content-between flex-wrap" style="height: 280px;">
            <h1 class="text-light font-bai col-12">VALUE OF DEKKSON</h1>
            <div class="font-bai col-12 d-flex">
              <div class="border-bottom border-light border-1 col-8  position-relative">
                <div class="arrow-right"></div>
              </div>
              <h1 class="text-light col-4" style="font-size: 7rem; margin-bottom: -2rem">1</h1>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="p-3 col-12 col-md-6 col-lg-4 col-xl-3">
      <a href="{{ route('day2.a1') }}">
        <div 
          class="rounded-0 card overflow-hidden p-2" 
          style="
            height: 280px; 
            background-image: url('{{ asset('images/day1.png') }}');
            background-color: #204F81;
            background-blend-mode: multiply;
            background-size:cover; 
            background-position:center;
            background-repeat: no-repeat;
          ">
          <div class="d-flex align-content-between flex-wrap" style="height: 280px;">
            <h1 class="text-light font-bai col-12">MANNER & ATTITUDE</h1>
            <div class="font-bai col-12 d-flex">
              <div class="border-bottom border-light border-1 col-8  position-relative">
                <div class="arrow-right"></div>
              </div>
              <h1 class="text-light col-4" style="font-size: 7rem; margin-bottom: -2rem">2</h1>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="p-3 col-12 col-md-6 col-lg-4 col-xl-3">
      <a href="{{ route('day3.a1') }}">
        <div 
          class="rounded-0 card overflow-hidden p-2" 
          style="
            height: 280px; 
            background-image: url('{{ asset('images/day1.png') }}');
            background-color: #204F81;
            background-blend-mode: multiply;
            background-size:cover; 
            background-position:center;
            background-repeat: no-repeat;
          ">
          <div class="d-flex align-content-between flex-wrap" style="height: 280px;">
            <h1 class="text-light font-bai col-12">MANNER & ATTITUDE</h1>
            <div class="font-bai col-12 d-flex">
              <div class="border-bottom border-light border-1 col-8  position-relative">
                <div class="arrow-right"></div>
              </div>
              <h1 class="text-light col-4" style="font-size: 7rem; margin-bottom: -2rem">3</h1>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="p-3 col-12 col-md-6 col-lg-4 col-xl-3">
      <a href="{{ route('day3.a1') }}">
        <div 
          class="rounded-0 card overflow-hidden p-2" 
          style="
            height: 280px; 
            background-image: url('{{ asset('images/day1.png') }}');
            background-color: #204F81;
            background-blend-mode: multiply;
            background-size:cover; 
            background-position:center;
            background-repeat: no-repeat;
          ">
          <div class="d-flex align-content-between flex-wrap" style="height: 280px;">
            <h1 class="text-light font-bai col-12">VALUE OF DEKKSON</h1>
            <div class="font-bai col-12 d-flex">
              <div class="border-bottom border-light border-1 col-8  position-relative">
                <div class="arrow-right"></div>
              </div>
              <h1 class="text-light col-4" style="font-size: 7rem; margin-bottom: -2rem">4</h1>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
@endsection
