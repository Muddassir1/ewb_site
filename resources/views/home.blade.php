<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

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
    <div class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1 class="hero-title">Prepare to speak confidently</h1>
                    <h2 class="hero-subtitle">with the best online tutors</h2>
                    <div class="search-bar-hero">
                        <input class="search-field" type="text" placeholder="Search by name or speciality" />
                        <button class="search-btn">Explore tutors</button>
                    </div>
                    <div class="hero-tags">
                        <ul>
                            <li>IELTS</li>
                            <li>TOEFL</li>
                            <li>Kids</li>
                            <li>Pronunciation</li>
                            <li>Business</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="hero-image">
                        <img src="{{asset('images/hero-image.png')}}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="section section-1">
        <div class="section-title">
            <h1>Why to learn English with British</h1>
        </div>
        <div class="items">
            <div class="item-box">
                <h4 class="item-title">Flexible scheduling</h4>
                <p class="item-desc">
                    Book and attend classes on your schedule
                </p>
            </div>
            <div class="item-box">
                <h4 class="item-title">Lessons made for you</h4>
                <p class="item-desc">
                    Customize lessons for your specific needs
                </p>
            </div>
            <div class="item-box">
                <h4 class="item-title">Pay as you go</h4>
                <p class="item-desc">
                    No contracts - buy lessons only when you need them
                </p>
            </div>
            <div class="item-box">
                <h4 class="item-title">Natve British teachers</h4>
                <p class="item-desc">
                    with degree in teaching english
                </p>
            </div>
            <div class="item-box">
                <p class="item-desc">
                    1-on-1 classes or group classes
                </p>
            </div>
            <div class="item-box">
                <p class="item-desc">
                    Simple but powerful learning platform compatible with all devices
                </p>
            </div>
        </div>
        <div class="actions">
            <div class="action">
                <p>With our expert tutors, your goals are closer than ever!</p>
                <button class="action-btn">Find teacher</button>
            </div>
            <div class="action">
                <p>Learn, speak and connect with a small group of students, guided by an expert tutor</p>
                <button class="action-btn">Browse classes</button>
            </div>
            <div class="action">
                <p>Post your requirements and let tutors find you</p>
                <button class="action-btn">Post request</button>
            </div>
        </div>
    </div>
    <div class="section section-2">
        <div class="header">
            <h2>3% tutor passing rate</h2>
            <h3 class="section-subtitle">We are committed to safeguarding tutor quality: learn about our tutor hiring process below.</h3>
        </div>
        <div class="services-list">
            <div class="list-item">
                <div>
                    <figure>
                        <picture>
                            <img src="https://res.amazingtalker.com/nuxt-dist/production/71489c64527251ea1b600e43bf2f0a06bd054699/img/apply.633ac7a.png">
                        </picture>
                    </figure>
                </div>
                <div class="list-item-title">
                    <h4>Strict tutor applicant requirements</h4>
                </div>
                <div class="list-item-desc">
                    <p>All tutor applicants must have relevant teaching experience or language teaching certificates to qualify as a tutor</p>
                </div>
            </div>
            <div class="separator">
                <span aria-hidden="true" class="v-icon notranslate at-icon theme--light">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" class="v-icon__svg">
                        <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"></path>
                    </svg>
                </span>
            </div>
            <div class="list-item">
                <div>
                    <figure>
                        <picture>
                            <img src="https://res.amazingtalker.com/nuxt-dist/production/71489c64527251ea1b600e43bf2f0a06bd054699/img/interview.34eedad.png">
                        </picture>
                    </figure>
                </div>
                <div class="list-item-title">
                    <h4>Rigorous interviewing process</h4>
                </div>
                <div class="list-item-desc">
                    <p>All tutor applicants must undergo a thorough approval process and pass a trial lesson to teach on AmazingTalker</p>
                </div>
            </div>
            <div class="separator">
                <span aria-hidden="true" class="v-icon notranslate at-icon theme--light">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" class="v-icon__svg">
                        <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"></path>
                    </svg>
                </span>
            </div>
            <div class="list-item">
                <div class="">
                    <figure>
                        <picture>
                            <img src="https://res.amazingtalker.com/nuxt-dist/production/71489c64527251ea1b600e43bf2f0a06bd054699/img/training.be1e16e.png">
                        </picture>
                    </figure>
                </div>
                <div class="list-item-title">
                    <h4>Comprehensive tutor training</h4>
                </div>
                <div class="list-item-desc">
                    <p>Tutors undergo additional training through AmazingTalker to further strengthen their teaching and communication skills</p>
                </div>
            </div>
            <div class="separator">
                <span aria-hidden="true" class="v-icon notranslate at-icon theme--light">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" class="v-icon__svg">
                        <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"></path>
                    </svg>
                </span>
            </div>
            <div class="list-item">
                <div class="">
                    <figure>
                        <picture>
                            <img src="https://res.amazingtalker.com/nuxt-dist/production/71489c64527251ea1b600e43bf2f0a06bd054699/img/ai_recommend.44217af.png">
                        </picture>
                    </figure>
                </div>
                <div class="list-item-title">
                    <h4>AI-based tutor ranking system</h4>
                </div>
                <div class="list-item-desc">
                    <p>Our AI ranking continually assesses tutor performance to give you the best tutor recommendations</p>
                </div>
            </div>
        </div>
    </div>
    <div class="how_it_works section-3">
        <h1 class="section-title">How it works</h1>
        <h4 class="section-subtite">Learn online with the world's best tutors</h4>
        <ul>
            <li>
                <div class="">
                    <div class="styled_number">1</div>
                    <div class="">
                        <h4 class="hiw-item-title">Find the best tutor</h4>
                        <div class="hiw-list-desc">Choose from over 49,000 online tutors. Use filters to narrow your search and find the perfect fit</div>
                    </div>
                </div>
                <div class="">
                    <picture>
                        <img src="https://static.preply.com/static/ssr/_next/static/images/step-1-cf3240e74e2a41ab3c880221fb42ae83.png" alt="web" class="">
                    </picture>
                </div>
            </li>
            <li>
                <div class="">
                    <div class="styled_number">2</div>
                    <div class="">
                        <h4 class="hiw-item-title">Take lessons anytime</h4>
                        <div class="hiw-list-desc">Find the perfect time for your busy schedule. Book lessons in seconds via desktop or mobile</div>
                    </div>
                </div>
                <div class="">
                    <picture>
                        <img src="https://static.preply.com/static/ssr/_next/static/images/step-2-52d944752b1bfde200892638178a469f.png" alt="web" class="">
                    </picture>
                </div>
            </li>
            <li>
                <div class="">
                    <div class="styled_number">3</div>
                    <div class="">
                        <h4 class="hiw-item-title">Enter virtual classroom</h4>
                        <div class="hiw-list-desc">When it’s lesson time, connect with your tutor through our comprehensive video platform</div>
                    </div>
                </div>
                <div class="">
                    <picture>
                        <img src="https://static.preply.com/static/ssr/_next/static/images/step-3-91630db4e7bb6a200547926c8870169a.png" alt="web" class="">
                    </picture>
                </div>
            </li>
            <li>
                <div class="">
                    <div class="styled_number">4</div>
                    <div class="">
                        <h4 class="hiw-item-title">Enjoy structured learning</h4>
                        <div class="hiw-list-desc">Keep track of your learning progress. Improve your speaking and vocabulary with our Learning plans</div>
                    </div>
                </div>
                <div class="">
                    <picture>
                        <img src="https://static.preply.com/static/ssr/_next/static/images/step-4-9ed4e32d021eb3d547fbd872dffb8d97.png" alt="web" class="">
                    </picture>
                </div>
            </li>
        </ul>
    </div>
    <div class="section-4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <h4>Interested in becoming a teacher in English with British</h4>
                    <p>Earn greater income with more freedom</p>
                    <div class="points">
                        <ol>
                            <li>Set your own prices</li>
                            <li>Be your own boss</li>
                            <li>Work from home, and on your schedule</li>
                        </ol>
                    </div>
                    <button class="button apply-button">Apply to teach</button>
                </div>
                <div class="col">
                    <div class="image">
                        <img src="/images/apply-to-teach.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-5 section-faq">
        <div class="faq-container">
            <h1 class="faq-title">Frequently asked questions</h1>
            <div class="faq-content">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What are group classes?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Group classes is a marketplace of online classes for adults. We help learners find and register for great group classes across a variety of topics. We help qualified tutors create, manage and promote their classes. We focus on small group, live, interactive, online classes, delivering excellent learning experiences.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What type of courses do you offer?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We offer different types of courses to learn English for intermediate A2 and B1 level learners. They cover a wide range of topics including everything from perfecting your pronunciation, speaking effectively at work and courses on how to succeed in an interview.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How do the courses work?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Currently courses are 6-week long focused on different areas of interest. You will meet your group class weekly. Every course has a clear weekly class plan that outlines expected objectives and in-class activities.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-6">
        <div class="container-fluid">
            <h3 class="section-title">Online language specialization tutors</h3>
            <ul>
                <li class="list-item">
                    <h4 class="list-item-title">Language tutors for children</h4>
                    <ul>
                        <li>
                            <a href="/en/online/tutors-english-for-children">English classes for kids</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-spanish-for-children">Spanish classes for kids</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-french-for-children">French classes for kids</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-chinese-for-children">Chinese classes for kids</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-german-for-children">German classes for kids</a>
                        </li>
                    </ul>
                </li>
                <li class="list-item">
                    <h4 class="list-item-title">Native speaking tutors</h4>
                    <ul>
                        <li>
                            <a href="/en/online/english-native-speakers">English native speaking tutors</a>
                        </li>
                        <li>
                            <a href="/en/online/spanish-native-speakers">Spanish native speaking tutors</a>
                        </li>
                        <li>
                            <a href="/en/online/french-native-speakers">French native speaking tutors</a>
                        </li>
                        <li>
                            <a href="/en/online/chinese-native-speakers">Chinese native speaking tutors</a>
                        </li>
                        <li>
                            <a href="/en/online/german-native-speakers">German native speaking tutors</a>
                        </li>
                    </ul>
                </li>
                <li class="list-item">
                    <h4 class="list-item-title">Language tutors for conversational classes</h4>
                    <ul>
                        <li>
                            <a href="/en/online/tutors-conversational-english">English conversational classes</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-conversational-spanish">Spanish conversational classes</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-conversational-french">French conversational classes</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-conversational-chinese">Chinese conversational classes</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-conversational-german">German conversational classes</a>
                        </li>
                    </ul>
                </li>
                <li class="list-item">
                    <h4 class="list-item-title">Language tutors for beginners</h4>
                    <ul>
                        <li>
                            <a href="/en/online/tutors-english-for-beginners">English tutors for beginners</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-spanish-for-beginners">Spanish tutors for beginners</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-french-for-beginners">French tutors for beginners</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-chinese-for-beginners">Chinese tutors for beginners</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-german-for-beginners">German tutors for beginners</a>
                        </li>
                    </ul>
                </li>
                <li class="list-item">
                    <h4 class="list-item-title">Tutors for test preparation</h4>
                    <ul>
                        <li>
                            <a href="/en/online/tutors-ielts">IELTS tutors</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-toefl">TOEFL tutors</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-cael">CAEL tutors</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-dalf">DALF tutors</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-dele">DELE tutors</a>
                        </li>
                    </ul>
                </li>
                <li class="list-item">
                    <h4 class="list-item-title">Tutors for other specialities</h4>
                    <ul>
                        <li>
                            <a href="/en/online/english-tutors/adults">English tutors for adults</a>
                        </li>
                        <li>
                            <a href="/en/online/english-tutors/spanish-speakers">English classes for Spanish speakers</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-business-english">Business English tutors</a>
                        </li>
                        <li>
                            <a href="/en/online/spanish-tutors/high-school">Spanish tutors for high school students</a>
                        </li>
                        <li>
                            <a href="/en/online/tutors-intensive-spanish">Intensive Spanish tutors</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <hr>
            <h4 class="section-title">Learn a language in your city</h4>
            <div class="search-box">
                <input type="text" class="form-control" />
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="footer-menu">
                            <div class="footer-menu-title">
                                Menu 1
                            </div>
                            <ul>
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                                <li><a href="#">Link 4</a></li>
                                <li><a href="#">Link 5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-menu">
                            <div class="footer-menu-title">
                                Menu 2
                            </div>
                            <ul>
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                                <li><a href="#">Link 4</a></li>
                                <li><a href="#">Link 5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-menu">
                            <div class="footer-menu-title">
                                Menu 3
                            </div>
                            <ul>
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                                <li><a href="#">Link 4</a></li>
                                <li><a href="#">Link 5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-menu">
                            <div class="footer-menu-title">
                                Menu 4
                            </div>
                            <ul>
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                                <li><a href="#">Link 4</a></li>
                                <li><a href="#">Link 5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-down">

        </div>
    </div>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>