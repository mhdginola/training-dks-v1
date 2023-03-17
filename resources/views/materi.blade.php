@extends('layout.sidebarUser')

@section('title', 'MATERI')

@section('content')
<div class="container">
  <div class="d-flex flex-wrap">
    @for ($i = 1; $i <= 15; $i++)       
      <div class="p-3 col-12 col-md-6 col-lg-4 col-xl-3">
        <a 
          @if ($level >= $i)
            href="{{ route('day'.$i.'.a1') }}"
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
