<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/new.css') }}">
    <link rel="icon" href="/src/img/main/logo.svg" type="image/png">
    <title>Новость</title>
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

<!-- Блок новости -->

    <div class="wrapper">

        <div class="pagination">
            <a href="/html/all_news.html">Все новости</a>
        </div>

        <div class="div container">

            <div class="container_txt">
                <h3 class="news-title">Разговорные Клубы с Носителями</h3>
                <span class="news-date">13 октября 2024</span>
                <p class="news-description">Присоединяйтесь к нашим разговорным
                    клубам с носителями языка каждую субботу! Это уникальная
                    возможность для всех, кто стремится совершенствовать свои
                    разговорные навыки на английском языке. В наших встречах
                    вы сможете не только улучшить произношение и грамматику,
                    но и погрузиться в атмосферу естественного общения с носителями
                    языка.</p>
            </div>

            <img src="/src/img/all_news/new5.svg" alt="">

            <div class="txt">
                <p>Что вас ждет:</p>
                <p>Продуктивные встречи: Мы создали дружелюбную и поддерживающую
                    среду, где каждый может свободно выражать свои мысли и идеи.</p>
                
                <p>Практика на практике: Вы сможете применить свои знания
                    английского языка в реальных разговорах, обсуждая различные
                    темы с носителями языка.</p>
                
                <p>Ценные советы: Опытные преподаватели и носители языка
                    будут делиться с вами полезными советами и стратегиями
                    для улучшения вашей устной речи.</p>
                
                <p>Не упустите возможность стать более уверенным в общении
                    на английском языке! Регистрируйтесь на нашем сайте и
                    следите за расписанием встреч.</p>
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