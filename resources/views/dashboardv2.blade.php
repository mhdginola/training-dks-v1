@extends('layout.sidebarUser')

@section('title', 'Dashboard')

@section('content')
<div class="container p-0">
  <div class="v80 w100 overflow-auto d-flex flex-row">
    <div class="d-flex flex-column me-2" style="width: 250px;">
      <img 
      height="80%"
      width="auto"
      src="{{ asset('/images/learning-progress.png') }}" 
      alt="learning-progress"
      style="object-fit: cover;"
      />
      <h4 class="v20">learning-progress</h4>
    </div>
    <div class="d-flex flex-column me-2" style="width: 250px;">
      <img 
      height="80%"
      width="auto"
      src="{{ asset('/images/quiz-result.png') }}" 
      alt="learning-progress"
      />
      <h4 class="v20">quiz-result</h4>
    </div>
    <div class="d-flex flex-column me-2" style="width: 250px;">
      <img 
      height="80%"
      width="auto"
      src="{{ asset('/images/quiz-list.png') }}" 
      alt="learning-progress"
      />
      <h4 class="v20">quiz-list</h4>
    </div>
  </div>
</div>
@endsection