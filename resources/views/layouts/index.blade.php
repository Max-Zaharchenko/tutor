<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- IcoFont CSS -->
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- Owl Theme Default CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Default Color CSS -->
    <link rel="stylesheet" href="assets/css/color/color-default.css">

    <title>ZackTheTeacher</title>
</head>

<body data-spy="scroll" data-offset="70">

<!-- Start Navbar Area -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">ZACK<span>THE</span>TEACHER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">О Курсе</a></li>
                <li class="nav-item"><a class="nav-link" href="#feedback">Отзывы</a></li>
                <li class="nav-item"><a class="nav-link" href="#pricing">Цены</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Обратная Связь</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar Area -->

<!-- Start Main Banner Area -->
<div id="home" class="main-banner">

    {{--<div class="creative-bg"></div>--}}

    <div class="pattern"></div>

    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="main-banner-content">
                            <h1>Заговори на английском за 2 месяца</h1>
                            <p>Все мы очень занятые люди и понимая как ценно время, я придумал  уникальный курс с которым Все что вам нужно  это уделять по 10-15 мин в день на изучения и закрепления материала
                                Теперь не надо смотреть часовые скучные уроки, и тратить огромные деньги на репетиров
                                Если у вас есть желания получить реальный результат в английском языке- мой курс именно то что вам нужно</p>
                            <a href="#about" class="btn btn-primary btn-get-started">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=5bO0aYjVpmo" class="btn btn-primary popup-youtube"><i class="icofont-ui-play"></i> Демо</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="banner-img">
                            <img src="assets/img/zack.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--<div class="bg-bottom"></div>--}}

</div>
<!-- End Main Banner Area -->

<!-- Start About Area -->
<section id="about" class="about-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h3>Инфа О Курсе</h3>
            <p>Максимально Интересно, понятно, эффективном и доступно, без какой либо воды. Ты не просто выучишь больше чем 300 слов, ты будешь знать, как правильно их произносить и где использовать </p>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <h3>Мы любим и ценим каждого студента</h3>

                    <ul class="pull-left">
                        <li><i class="icofont-ui-check"></i> Индивидуальный подход к каждому студенту</li>
                        <li><i class="icofont-ui-check"></i> ТОННЫ полезного контента, который поможет тебе повысить свой уровень английского языка</li>
                        <li><i class="icofont-ui-check"></i> Общение с единомышленниками, которые, так же как и ты, хотят выучить английский</li>
                        <li><i class="icofont-ui-check"></i> Разговорный барьер будет разрушен</li>
                        <li><i class="icofont-ui-check"></i> Уникальная методика изучения</li>
                        <li><i class="icofont-ui-check"></i> 24/7 вы можете задавать любые интересующие вас вопросы о английском
                            Наши специалисты будут рады вам на них ответить</li>
                    </ul>

                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-img">
                    <img src="assets/img/about-i.png" alt="about">
                </div>
            </div>
        </div>

        <div class="row mt-100">
            <div class="col-lg-6 col-md-6">
                <div class="img">
                    <img src="assets/img/video.png" alt="img">
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="about-text mb-0">
                    <span>1</span>
                    <h3>Изучай</h3>
                    <p>Каждый день ты будешь получать 4 новых английский слова, которое тебя РЕАЛЬНО понадобятся в общение на английском языке и преложения в которых они используются
                        </p>
                    <blockquote class="blockquote">
                        <p class="mb-0">Плюс + мое видео с произношением этих слов и предложений
                            (восприятие на слух очень важно)</p>
                    </blockquote>
                </div>
            </div>
        </div>

        <div class="row mt-100">
            <div class="col-lg-6 col-md-6">
                <div class="about-text mt-0">
                    <span>2</span>
                    <h3>Практикуй</h3>
                    <p>Каждый 3тий день мы будем созваниваться с вами один-на один и общаться на английском языке, не важно какой у вас уровень, даже если максимум что вы можете сказать, это «май нейм из Хуан»
                        Вам прийдется выйти из зоны комфорта, но я сделаю это максимально комфортным для вас:)
                        Главное-начать!</p>
                    <ul>
                        <li><i class="icofont-ui-check"></i> Созвон длиться в среднем 5 мин, тем самым не забирая у вас много времени </li>
                        <li><i class="icofont-ui-check"></i> Общаемся на актуальные темы, и играем в ролевые игры из жизни</li>
                        <li><i class="icofont-ui-check"></i> Подстраиваюсь под ваш уровень английского и делаю разговор максимально комфортным для ВАС</li>
                        <li><i class="icofont-ui-check"></i> После каждого разговора я буду скидывать  новые слова которые вы не знали в момент нашего разговора </li>
                        <li><i class="icofont-ui-check"></i> Практикой которая будет во время созвонов мы разрушим ваш разговорный барьер </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="img">
                    <img src="assets/img/call.png" alt="img">
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End About Area -->

<!-- Start Features Area -->
<section id="feedback" class="testimonials-area bg-yellow ptb-100">
    <div class="bg-top"></div>
    <div class="bg-bottom"></div>

    <div class="container">
        <div class="section-title">
            <h3>Отзывы</h3>
            <p>Более 150 счастливых учеников с реальными результатами</p>
        </div>

        <div class="row">
            <div class="features-slides">
                <div class="col-lg-12 col-md-12">
                    <img src="{{ asset('/assets/img/reviews/5YGrL389bAWU6H0s7HwJNzrilqqk1vYt.jpg') }}" alt="">
                </div>

                <div class="col-lg-12 col-md-12">
                    <img src="{{ asset('/assets/img/reviews/789S19zQE9Ketrp1gWVs12UqQpFRkBn8.jpg') }}" alt="">
                </div>

                <div class="col-lg-12 col-md-12">
                    <img src="{{ asset('/assets/img/reviews/CcxnJhJXOFG1EiHJiiHkP1n0ZgEkvGJz.jpg') }}" alt="">
                </div>

                <div class="col-lg-12 col-md-12">
                    <img src="{{ asset('/assets/img/reviews/iM30ywR78KYQOvXh5zfsGecDAE1FbFQu.jpg') }}" alt="">
                </div>

                <div class="col-lg-12 col-md-12">
                    <img src="{{ asset('/assets/img/reviews/ScfQwnN7Eplc2M2o4kU7evIiWv7M1UCN.jpg') }}" alt="">
                </div>

                <div class="col-lg-12 col-md-12">
                    <img src="{{ asset('/assets/img/reviews/t2b9OBqdbLPhgr4QEmdWwtkzaEQ1GjPh.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Area -->

<!-- Start Pricing Area -->
<section id="pricing" class="pricing-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h3>Цена</h3>
            <p>Я уверен что пройдя 2х месячный курс, вы заговорите на английском, а если нет, я с радостью верну вам ваши деньги </p>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="pricing-table">
                    <span class="icon"><i class="icofont-globe"></i></span>
                    <div class="pricing-table-header">
                        <h3 class="title">1 месяц</h3>
                        <span class="price-value">$79</span>
                    </div>
                    <ul class="pricing-content">
                        <li>Unlimited Reservations</li>
                        <li>6 Clients and Products</li>
                        <li>Housekeeping Status</li>
                        <li>Invoicing and Payments</li>
                        <li>Data Security and Backups</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Select Plan</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pricing-table">
                    <span class="icon"><i class="icofont-globe"></i></span>
                    <div class="pricing-table-header">
                        <h3 class="title">2 месяца</h3>
                        <span class="price-value">$49<b>/mon</b></span>
                    </div>
                    <ul class="pricing-content">
                        <li>Unlimited Reservations</li>
                        <li>6 Clients and Products</li>
                        <li>Housekeeping Status</li>
                        <li>Invoicing and Payments</li>
                        <li>Data Security and Backups</li>All In one for all products
                    </ul>
                    <a href="#" class="btn btn-primary">Select Plan</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pricing-table">
                    <span class="icon"><i class="icofont-globe"></i></span>
                    <div class="pricing-table-header">
                        <h3 class="title">3 месяца</h3>
                        <span class="price-value">$49<b>/mon</b></span>
                    </div>
                    <ul class="pricing-content">
                        <li>Unlimited Reservations</li>
                        <li>6 Clients and Products</li>
                        <li>Housekeeping Status</li>
                        <li>Invoicing and Payments</li>
                        <li>Data Security and Backups</li>All In one for all products
                    </ul>
                    <a href="#" class="btn btn-primary">Select Plan</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pricing-table">
                    <span class="icon"><i class="icofont-globe"></i></span>
                    <div class="pricing-table-header">
                        <h3 class="title">Advanced Plan</h3>
                        <span class="price-value">$49<b>/mon</b></span>
                    </div>
                    <ul class="pricing-content">
                        <li>Unlimited Reservations</li>
                        <li>6 Clients and Products</li>
                        <li>Housekeeping Status</li>
                        <li>Invoicing and Payments</li>
                        <li>Data Security and Backups</li>All In one for all products
                    </ul>
                    <a href="#" class="btn btn-primary">Select Plan</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Pricing Area -->

<!-- Start Subscribe Area-->
<section class="subscribe-area ptb-100" id="subscribeArea">

    <div class="bg-top"></div>
    <div class="bg-bottom"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="newsletter">
                    <h4>Заполните форму и Зак лично вам передзвонит</h4>
                    <form class="newsletter-form" data-toggle="validator" v-on:submit.prevent="submitForm">
                        <input type="text" class="form-control" placeholder="Имя" v-model="form.name" name="name" required autocomplete="off">
                        <input type="text" class="form-control mt-2" placeholder="Номер Телефона" v-model="form.phone_number" name="phone_number" required autocomplete="off">
                        <select name="messenger" id="messenger" class="form-control mt-2" required>
                            <option value="telegram">Telegram</option>
                            <option value="whatsapp">WhatsApp</option>
                            <option value="viber">Viber</option>
                            <option value="facebook_messenger">Facebook Messenger</option>
                        </select>
                        <div id="validator-newsletter" class="validation-danger" v-for="error in errors">@{{ error[0] }}</div>
                        <button class="btn btn-primary" type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="pattern"></div>
    <div class="pattern-2"></div>
</section>
<!-- End Subscribe Area-->

<!-- Start Footer Area -->
<footer class="footer-area ptb-100">
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <p>Copyright <i class="icofont-copyright"></i> 2019 All Rights Reserved.</p>
                </div>

                <div class="col-lg-5 col-md-5">
                    <ul>
                        <li><a href="#" class="icofont-facebook"></a></li>
                        <li><a href="#" class="icofont-twitter"></a></li>
                        <li><a href="#" class="icofont-instagram"></a></li>
                        <li><a href="#" class="icofont-linkedin"></a></li>
                        <li><a href="#" class="icofont-vimeo"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<div class="go-top"><i class="icofont-stylish-up"></i></div>

<!-- Jquery Min JS -->
<script src="assets/js/jquery.min.js"></script>
<!-- Popper Min JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap Min JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Counterup Min JS -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Magnific Min JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Waypoints Min JS -->
<script src="assets/js/waypoints.min.js"></script>
<!-- Form Validator Min JS -->
<script src="assets/js/form-validator.min.js"></script>
<!-- Contact Form Min JS -->
<script src="assets/js/contact-form-script.js"></script>
<!-- Axolot Map JS FILE -->
<script src="assets/js/axolot-map.js"></script>
<!-- ajaxChimp JS FILE -->
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5382756.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- End of HubSpot Embed Code -->
</body>
</html>