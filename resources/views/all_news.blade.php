<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/all_news.css') }}">
    <link rel="icon" href="/src/img/main/logo.svg" type="image/png">
    <title>Новости</title>
</head>
<body>

<!-- HEADER -->
 
<div class="up">

    <div class="wrapper">
    <header>
        <div id="logo">
            <a href="/html/main.html"><img src="/src/img/main/logo_white.svg" alt="English Expert Logo"></a>
        </div>
        <div class="menu-toggle">
            <img src="/src/img/main/header_swip_white.svg" alt="Menu Icon">
        </div>
        <nav class="menu">
            <a href="/html/all_courses.html"><img src="/src/img/main/all_curs.svg">Все курсы</a>
            <a href="/html/all_events.html">Мероприятия</a>
            <a href="#"><img src="/src/img/main/geolocation.svg">Владивосток</a>
            <a href="tel:8005553535">8 800 555-35-35</a>
            <form action="login.php" method="post">
                <a href="/html/login_registration.html"><img src="/src/img/all_events/person.svg"><input
                    type="text" id="login" name="loginname"
                    placeholder="Войти"></a>
            </form>
        </nav>
    </header>
</div>

<script src="/src/js/menu.js"></script>

</div>

<!-- Блок новостей -->
 <div class="wrapper">

    <h3 id="txt">Новости English Expert</h3>
    <div class="news-container">
        
        <div class="news-card">
            <img src="/src/img/all_news/card1.svg" alt="News Image">
            <div class="news-info">
                <span class="news-date">16 ноября 2024</span>
                <h3 class="news-title">Онлайн Турнир по Английскому: Призы для Победителей!</h3>
                <p class="news-description">Участвуйте в нашем онлайн турнире по
                    английскому и выигрывайте призы. Регистрация открыта!</p>
                <a href="/html/new1.html" class="read-more">
                    Подробнее <img src="/src/img/all_news/arrow.svg" alt="Arrow Icon">
                </a>
            </div>
        </div>

        <div class="news-card">
            <img src="/src/img/all_news/card2.svg" alt="News Image">
            <div class="news-info">
                <span class="news-date">1 июня 2024</span>
                <h3 class="news-title">Летняя Скидка 20%!</h3>
                <p class="news-description">Получите 20% скидку на все курсы этим летом.
                    Записывайтесь и начните учить английский уже сегодня!</p>
                <a href="new2.html" class="read-more">
                    Подробнее <img src="/src/img/all_news/arrow.svg" alt="Arrow Icon">
                </a>
            </div>
        </div>

        <div class="news-card">
            <img src="/src/img/all_news/card3.svg" alt="News Image">
            <div class="news-info">
                <span class="news-date">25 августа 2024</span>
                <h3 class="news-title">Бесплатный Вебинар: Произношение</h3>
                <p class="news-description">Присоединяйтесь к вебинару 25 июня в 18:00 МСК и
                    улучшите своё произношение. Регистрация на сайте.</p>
                <a href="new3.html" class="read-more">
                    Подробнее <img src="/src/img/all_news/arrow.svg" alt="Arrow Icon">
                </a>
            </div>
        </div>

        <div class="news-card">
            <img src="/src/img/all_news/card4.svg" alt="News Image">
            <div class="news-info">
                <span class="news-date">1 сентрября 2024</span>
                <h3 class="news-title">Конкурс Эссе: Выиграйте Обучение</h3>
                <p class="news-description">Пишите эссе на тему "Почему я хочу выучить
                    английский" и выигрывайте бесплатные курсы. Подробности на сайте.</p>
                <a href="new4.html" class="read-more">
                    Подробнее <img src="/src/img/all_news/arrow.svg" alt="Arrow Icon">
                </a>
            </div>
        </div>

        <div class="news-card">
            <img src="/src/img/all_news/card5.svg" alt="News Image">
            <div class="news-info">
                <span class="news-date">13 октября 2024</span>
                <h3 class="news-title">Разговорные Клубы с Носителями</h3>
                <p class="news-description">Присоединяйтесь к нашим разговорным клубам с
                    носителями языка каждую субботу. Расписание на сайте.</p>
                <a href="new5.html" class="read-more">
                    Подробнее <img src="/src/img/all_news/arrow.svg" alt="Arrow Icon">
                </a>
            </div>
        </div>

        <div class="news-card">
            <img src="/src/img/all_news/card6.svg" alt="News Image">
            <div class="news-info">
                <span class="news-date">6 ноября 2024</span>
                <h3 class="news-title">Встреча с Известным Лингвистом: Получите
                    Советы от Профессионала!</h3>
                <p class="news-description">Встреча с известным лингвистом для
                    обсуждения английского языка. Дата и время на сайте.</p>
                <a href="new6.html" class="read-more">
                    Подробнее <img src="/src/img/all_news/arrow.svg" alt="Arrow Icon">
                </a>
            </div>
        </div>

    </div>

 </div>

<!-- БЛОК ФОРМЫ -->

<div class="wrapper">

    <div class="rabbit_helper">
        
        <div class="rh_l">
            <img src="/src/img/main/rabbit2.svg" alt="кролик помощник нижний">
        </div>

        <div class="rh_r">
            <form action="#" method="POST">
                <div class="form-group full-width">
                    <input type="text" id="name" name="name" placeholder="Ваше имя">
                </div>
                <div class="form-group horizontal">
                    <div>
                        <input type="phone" id="phone" name="phone" placeholder="Ваш телефон">
                    </div>
                    <div>
                        <input type="email" id="email" name="email" placeholder="Ваш e-mail">
                    </div>
                </div>
                <div class="form-group vertical">
                    <p>Нажимая на кнопку, я соглашаюсь на обработку персональных данных и с правилами пользования Платформой</p>
                    <button type="submit">Отправить</button>
                </div>
            </form>
        </div>

    </div>

</div>
    

<!-- FOOTER -->

        <footer>
            <div class="wrapper">
                <div class="info_f">
                    <img src="/src/img/main/logo_white.svg">
                    <p>8 800 555-35-35</p>
                    <p>г. Владивосток, ул. Жигура, д. 26</p>
                    <p>English_Expert@mail.ru</p>
                    <p>© English Expert</p> 
                </div>
                  
            </div>
        </footer>
</body>
</html>