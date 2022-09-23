<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tutors</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="">
    <div class="page-tutors">
        <header class="page-header">
            <div class="page-header-content">
                <div class="page-title-wrapper">
                    <h1 class="page-title">Online
                        <span class="title-em">English</span> tutors &amp; teachers for private lessons
                    </h1>
                    <div class="page-subtitle-wrapper">
                        <div class="page-subtitle">
                            <p>Looking for an online English tutor? Preply is the leading online language learning platform worldwide. You can choose from 11707 English teachers with an average rating of 4.9 out of 5 stars given by 93453 customers. Book a lesson with a private English teacher today and start learning. Not entirely happy with your tutor? No worries, Preply offers free tutor replacement till you're 100% satisfied.&nbsp;Looking for a different way to learn a language? Explore
                                <a href="https://preply.com/en/classes/english">online English classes</a> or find other resources to
                                <a href="https://preply.com/en/learn/english">learn English online</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-tabs">
                <a class="tab">
                    <div class="tab-icon"><img src="{{asset('images/header-tab-1.svg')}}" /></div>
                    <div class="tab-title">Private lessons</div>
                </a>
                <a class="tab">
                    <div class="tab-icon"><img src="{{asset('images/header-tab-2.svg')}}" /></div>
                    <div class="tab-title">Group classes</div>
                </a>
            </div>
        </header>
    </div>



    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>