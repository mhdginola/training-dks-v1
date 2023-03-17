<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  {{-- css --}}
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <script>
    function show(key, doc){
      console.log(sessionStorage.getItem(key));
    }

    function ses(doc, val){
      if(doc==val){
        console.log('a');
        document.getElementById(doc).checked = true;
      }
      else{
        console.log('b');
      }
    }
  </script>
</head>
<body>
  <div class="container">
    <h3>{{ $gg }}</h3>
    <div class="d-flex justify-content-between mx-3 mt-3">
      <h3 class="m-0">Quiz</h3>
      <p id="demo" class="m-0"></p>
    </div>
    @foreach ($data_test as $dt)
    <h3>{{ $dt->id_user }}</h3>
    <p>{{ $dt->benar }}</p>
    <p>{{ $dt->created_at }}</p>
    <br>
    @endforeach
    {{-- {{dd($questions->toArray())}} --}}
    <div class="border-top border-end mx-3 mb-3">
      <div class="border-top border-end p-3" style="border-top-right-radius: 120px">
        <form action="/quiz/day1" method="post" id="form" onsubmit="sessionStorage.clear();">
          @csrf
          @foreach ($questions as $data)
          <h4 class="text-primary mt-3">{{ $data->question }}</h4>
          <div id="a{{$data->id}}"></div>
          <script>
            show('a{{ $data->id }}', '{{ $data->id }}');
          </script>
            @foreach ($data->answers as $item)
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" onchange="save('a{{ $item->question_id }}', '{{ $item->id }}')" type="radio" value="{{ $item->id }}" id="{{ $item->id }}" name="{{ $item->question_id }}" required>
                <span><p class="m-0">{{ $item->answer }}</p></span>
              </label>
            </div>
            <script>
              ses('{{ $item->id }}', sessionStorage.getItem('a{{ $data->id }}'));
            </script>
            @endforeach
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

  <script>
    // Set the date we're counting down to
    // var timeLimit = 3600;
    // var timeRunning = {{ $gg }};

    var timeLimit = {{ $gg }};

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var timeRunning = new Date().getTime();
      // Find the timeLeft between timeRunning and the count down date
      // var timeLeft = (timeLimit - (timeRunning-(6*60*60*1000)))/1000;
      var timeLeft = timeLimit - timeRunning;
        
      // Time calculations for days, hours, minutes and seconds
      var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
      // var minutes = Math.floor(timeLeft / 60);
      var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
      // var seconds = timeLeft - minutes * 60;
        
      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = hours + " : " + minutes + " : " + seconds;
        
      // If the count down is over, write some text 
      if (timeLeft < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
        sessionStorage.clear();
        document.getElementById("form").submit();
      }
      timeRunning += 1 ;
    }, 1000);
  </script>

  <script>
    function save(key, val){
      if (typeof(Storage) !== "undefined") {
        sessionStorage.setItem(key, val);
        show(key,key);
      } else {
        console.log("Sorry, your browser does not support web storage...");
      }
    }
  </script>

</body>
</html>