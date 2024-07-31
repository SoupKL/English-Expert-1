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
                <h3 class="news-title">Летняя Скидка 20%!</h3>
                <span class="news-date">1 июня 2024</span>
                <p class="news-description">Воспользуйтесь уникальной возможностью сэкономить
                    на изучении английского языка этим летом! Получите 20% скидку на все курсы
                    в English Expert, чтобы начать свой путь к владению английским сегодня.</p>
            </div>

            <img src="{{ asset('img/all_news/new2.svg') }}"alt="">

            <div class="txt">
                <p>Детали предложения:</p>
                <p>Условия скидки: Скидка 20% распространяется на все курсы, включая
                    индивидуальные занятия и групповые занятия. Это идеальный момент
                    для тех, кто хочет улучшить свои языковые навыки или подготовиться
                    к экзаменам.</p>
                
                <p>Процесс записи: Записаться на курсы просто — просто посетите наш
                    сайт или свяжитесь с нашими консультантами по телефону. Наши
                    специалисты с удовольствием помогут вам выбрать подходящий курс
                    и ответят на все ваши вопросы.</p>
                
                <p>Индивидуальный подход: Наши опытные преподаватели помогут вам
                    разработать персонализированный учебный план, соответствующий
                    вашим целям и уровню владения языком.</p>
                
                <p>Не упустите шанс воспользоваться этим специальным предложением
                    и начните свое обучение сегодня! Учить английский стало еще
                    проще и доступнее благодаря летней скидке 20% в English Expert.</p>
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