<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Dashboard</h1>
  <a href="{{ route('materi') }}">Materi</a>
  <br>
  <a href="{{ route('quizList') }}">Quiz</a>
  <br>
  <a href="{{ route('hasil') }}">Hasil Quiz</a>
  <br>
  <a href="{{ route('day10.upload') }}">Upload</a>
  <form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="Logout">
  </form>
</body>
</html>