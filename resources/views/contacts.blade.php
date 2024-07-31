<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/contacts.css') }}">
    <link rel="icon" href="{{ asset('/img/main/logo.svg') }}" type="image/png">
    <title>Контакты</title>
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
`</div>

<script src="{{ asset('js/menu.js') }}"></script>
</div>

<!-- Блок с контактами -->
<div class="wrapper">

    <section class="maps">
        <script src="{{ asset('https://api-maps.yandex.ru/2.1/?apikey=c7e83174-214b-4e39-97bd-be319309fce5&lang=ru_RU') }}" type="text/javascript"></script>
        
        <div class="map1">

            <div class="txt">
                <h3>Контакты</h3>
            </div>
            
            <div class="info">
                <div class="card">
                    <img src="/src/img/contacts/phone.svg" alt="">
                    <p>8 800 555-35-35</p>
                </div>
                <div class="card">
                    <img src="/src/img/contacts/email.svg" alt="">
                    <p>English_Expert@mail.ru</p>
                </div>
                <div class="card">
                    <img src="/src/img/contacts/geolocation.svg" alt="">
                    <p>г. Владивосток, ул. Жигура д. 26</p>
                </div>
            </div>
            
        </div>
        
        <div id="map"></div>

        <script src="{{ asset('js/map.js') }}"></script>    </section>

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