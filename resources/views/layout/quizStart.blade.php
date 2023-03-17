<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('icon/favicon.ico') }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="v100 w-100 d-flex align-items-center"
        style="
            background-image: url({{ asset('images/quiz-start.png') }});
            background-size: cover; 
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
        "
    >
        <div class="flex-fill">
            <h1 class="text-light text-center">Ready to take the quiz?</h1>
            <div class="d-flex justify-content-center">
                <a href="@yield('quizLink')">
                    <button class="btn btn-light px-3 rounded-0 mt-3">Start Quiz</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>