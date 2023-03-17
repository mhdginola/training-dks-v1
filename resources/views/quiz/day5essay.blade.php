<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Essay</title>
  {{-- css --}}
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
  <div class="container">
    <div class="d-flex justify-content-between mx-3 mt-3">
      <h3 class="m-0">Quiz</h3>
      <p id="demo" class="m-0"></p>
    </div>
    <div class="border-top border-end mx-3 mb-3">
      <div class="border-top border-end p-3" style="border-top-right-radius: 120px">
        <form action="/quiz/essay" method="post" id="form" onsubmit="sessionStorage.clear();">
          @csrf
					@foreach ($questions as $question)
          <div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label">{{ $question->question }}</label>
						<input type="text" name="question{{ $loop->iteration }}" value="{{ $question->id }}" hidden>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="answer{{ $loop->iteration }}" required></textarea>
					</div>
					@endforeach
          <input class="btn btn-primary mt-4 px-3" type="submit" value="submit">
        </form>
      </div>
    </div>
    <img 
    src="{{ asset('images/quiz.png') }}" 
    alt="quiz"
    style="
      position: fixed;
      bottom: 0px;
      right: 0px;
      height: 80vh;
      width: auto;
      z-index: -1;
      "
    >
  </div>

</body>
</html>