@extends('layout.sidebarUser')

@section('title', 'QUIZ')

@section('content')
<div class="container">
  <div class="d-flex flex-wrap">
    <div class="p-3 col-12 col-md-6 col-lg-4 col-xl-3">
      <a 
        @if ($level >= 1)
          href="{{ route('quiz.essay') }}"
        @else
          href="#"
        @endif
      >
        <div class="p-3 d-flex flex-column justify-content-center" 
        @if ($level >= 1)
          style="border: 1px solid #134A86; color: #134A86;"
        @else
          style="border: 1px solid #878787; color: #878787;"
        @endif
        >
          <p class="text-center">Essay</p>
          <h1 class="text-center">0</h1>
        </div>
      </a>
    </div>

    @for ($i = 1; $i <= 7; $i++)
      <div class="p-3 col-12 col-md-6 col-lg-4 col-xl-3">
        <a 
          @if ($level >= $i)
            href="{{ route('quiz.day'.$i) }}"
          @else
            href="#"
          @endif
        >
          <div class="p-3 d-flex flex-column justify-content-center" 
          @if ($level >= $i)
            style="border: 1px solid #134A86; color: #134A86;"
          @else
            style="border: 1px solid #878787; color: #878787;"
          @endif
          >
            <p class="text-center">level</p>
            <h1 class="text-center">{{ $i }}</h1>
          </div>
        </a>
      </div>
    @endfor
  </div>
</div>
@endsection
