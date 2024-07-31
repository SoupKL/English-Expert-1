<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/new.css') }}">
    <link rel="icon" href="{{ asset('/img/main/logo.svg') }}" type="image/png">
    <title>Новость</title>
</head>
<body>
    
<!-- HEADER -->
 
<div class="up">

    <div class="wrapper">
        <header>
            <div id="logo">
                <a href="{{ route('main') }}"><img src="{{ asset('img/main/logo_white.svg') }}" alt="English Expert Logo"></a>
            </div>
            <div class="menu-toggle">
                <img src="{{ asset('img/main/header_swip_white.svg') }}" alt="Menu Icon">
            </div>
            <nav class="menu">
                <a href="{{ route('all_courses') }}"><img src="{{ asset('img/main/all_curs.svg') }}" >Все курсы</a>
                <a href="{{ route('all_events') }}">Мероприятия</a>
                <a href="#"><img src="{{ asset('img/main/geolocation.svg') }}">Владивосток</a>
                <a href="tel:8005553535">8 800 555-35-35</a>
                <form action="login.php" method="post">
                    <a href="{{ route('login_registration') }}"><img src="{{ asset('img/all_events/person.svg') }}"><input
                        type="text" id="login" name="loginname"
                        placeholder="Войти"></a>
                </form>
            </nav>
        </header>
</div>

<script src="{{ asset('js/menu.js') }}"></script>

</div>

<!-- Блок новости -->

    <div class="wrapper">

        <div class="pagination">
            <a href="{{ route('all_news') }}">Все новости</a>
        </div>

        <div class="container">

            <div class="container_txt">
                <h3 class="news-title">Онлайн Турнир по Английскому:
                    Призы для Победителей!</h3>
                <span class="news-date">16 ноября 2024</span>
                <p class="news-description">Участвуйте в нашем онлайн турнире по
                    английскому и выигрывайте призы. Регистрация открыта!</p>
            </div>

            <img src="{{ asset('img/all_news/new1.svg') }}"alt="">

            <div class="txt">
                <p>Детали турнира:</p>
                <p>Категории и Задания: Турнир включает разнообразные категории
                заданий, которые покрывают широкий спектр английской грамматики
                и лексики. Участники будут выполнять задания, специально разработанные
                для проверки их знаний и умений в языке.</p>
                
                <p>Призы: Лучшие участники будут вознаграждены ценными призами, подарками
                и сертификатами от English Expert. Это отличная мотивация для тех, кто
                стремится улучшить свои языковые навыки и достичь новых высот в изучении
                английского.</p>
                
                <p>Условия участия: Регистрация открыта на нашем сайте. Участие в турнире
                бесплатное и открыто для всех желающих. Просто зарегистрируйтесь, чтобы
                получить доступ к заданиям и принять участие в захватывающем соревновании.</p>
                
                <p>Не упустите шанс проверить свои знания, соревнуясь с другими студентами и
                возможностью выиграть великолепные призы! Регистрируйтесь сегодня и готовьтесь
                к захватывающему английскому приключению с English Expert!</p></div>
        </div>

        </div>

<!-- FOOTER -->

    <footer>
        <div class="wrapper">
            <div class="info_f">
                <img src="{{ asset('img/main/logo_white.svg')}}">
                <p>8 800 555-35-35</p>
                <p>г. Владивосток, ул. Жигура, д. 26</p>
                <p>English_Expert@mail.ru</p>
                <p>© English Expert</p> 
            </div>
              
        </div>
    </footer>
</body>
</html>