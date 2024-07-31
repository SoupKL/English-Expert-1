<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/new.css') }}">
    <link rel="icon" href="{{ asset('/img/main/logo.svg') }}" type="image/png">    <title>Новость</title>
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

        <div class="div container">

            <div class="container_txt">
                <h3 class="news-title">Встреча с Известным Лингвистом:
                    Получите Советы от Профессионала!</h3>
                <span class="news-date">6 ноября 2024</span>
                <p class="news-description">Встреча с известным лингвистом
                    представляет собой уникальную возможность получить
                    ценные советы и рекомендации от эксперта в области
                    английского языка. Это событие призвано помочь участникам
                    улучшить свои языковые навыки, развить профессиональное
                    общение на английском и получить вдохновение для дальнейшего
                    обучения. Встреча пройдет в формате интерактивной дискуссии,
                    где каждый сможет задать свои вопросы и услышать мнение эксперта.</p>
            </div>

            <img src="{{ asset('img/all_news/new6.svg') }}"alt="">

            <div class="txt">
                <p>Известный лингвист, чья репутация в области языков и
                    образования безупречна, поделится своим опытом и
                    профессиональными советами по изучению и практике
                    английского языка. Участники смогут узнать о передовых
                    методах обучения, эффективных стратегиях запоминания
                    новых слов и грамматических конструкций, а также получат
                    рекомендации по улучшению произношения и развитию языковой уверенности.
                </p>
                <p>Дата и время встречи опубликованы на сайте, где также доступна
                    возможность регистрации для участия. Это событие не только
                    образовательное, но и вдохновляющее, способствующее расширению
                    языковых горизонтов и обогащению личного и профессионального роста каждого участника.
                </p>
            </div>

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