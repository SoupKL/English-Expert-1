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

        <div class="div container">

            <div class="container_txt">
                <h3 class="news-title">Конкурс Эссе: Выиграйте Обучение</h3>
                <span class="news-date">1 сентрября 2024</span>
                <p class="news-description">English Expert рад представить
                    вам возможность выиграть бесплатное обучение! Примите
                    участие в нашем конкурсе эссе на тему "Почему я хочу
                    выучить английский" и получите шанс улучшить свои
                    языковые навыки безвозмездно.</p>
            </div>

            <img src="{{ asset('img/all_news/new4.svg') }}"alt="">

            <div class="txt">
                <p>Подробности конкурса:</p>
                <p>Тема эссе: Напишите небольшое эссе (не менее 300 слов) о
                    том, почему вы считаете важным для себя выучить английский
                    язык. Расскажите о своих мотивациях, целях и том, как вы
                    планируете использовать знания английского в будущем.</p>
                
                <p>Условия участия: Конкурс открыт для всех желающих. Ваше
                    эссе должно быть оригинальным и личным, отражать вашу
                    личную мотивацию и стремление к языковому развитию.</p>
                
                <p>Сроки и подача заявок: Подавайте свои эссе на нашем сайте
                    до 30 июня. Все работы будут оценены экспертами English
                    Expert на основе содержания, языковой грамотности и оригинальности.</p>
                
                <p>Призы: Победители будут объявлены 5 июля. Лучшие эссе
                    получат бесплатное обучение на один из наших курсов
                    английского языка по выбору.</p>

                <p>Не упустите свой шанс на улучшение языковых навыков с
                    English Expert! Запишитесь на наш конкурс эссе уже
                    сегодня и откройте для себя новые горизонты в изучении
                    английского языка!</p>
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