<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito';
        }

        .header {
            background: #f3f3f3;
        }

        .hero-image img {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row header">
            <div class="col-2">Logo</div>
            <div class="col-6">
                <div class="menu">
                    <a href="#">Find Tutors</a>
                    <a href="#">Group Classes</a>
                    <a href="#">Corporate Training</a>
                    <a href="#">Become a Tutor</a>
                    <a href="#">Get the mobile app</a>
                </div>
            </div>
            <div class="col-4">
                <div class="lang">English, EUR</div>
                <div class="help">?</div>
                <div class="login">Log in</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="hero-title">Prepare to speak confidently</h1>
                <h2 class="hero-subtitle">with the best online tutors</h2>
            </div>
            <div class="col-6">
                <div class="hero-image">
                    <img src="{{asset('images/hero-image.png')}}" />
                </div>
            </div>
        </div>
    </div>
</body>

</html>