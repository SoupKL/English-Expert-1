<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/al_events.css') }}">
    <link rel="icon" href="/src/img/main/logo.svg" type="image/png">
    <title>Все мероприятия</title>
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

<!-- Блок мероприятий -->

    <div class="wrapper">

        <main>
            <section class="events">
                <h1>Все мероприятия</h1>

                <div class="card-info">
                    <div class="cardtxt">
                        <img src="/src/img/all_events/25.svg" class="date-image">
                        <div class="info">
                            <h1 class="title">День открытых дверей</h1>
                            <p class="description">Приглашаем всех желающих на бесплатную экскурсию<br>
                                в мир востребованных профессий и полезных навыков</p>
                        </div>
                    </div>
                </div>

                <div class="events2">

                    <div class="event2" id="conversation-club">
                        <div class="cardtxt2">
                            <img src="/src/img/all_events/club.svg">
                            <h3>Разговорный Клуб: Практика с Носителями Языка</h3>
                        </div>
                        <p>Улучшайте свою английскую речь, общаясь с носителями языка. Еженедельные
                            встречи с новыми темами для обсуждения помогут преодолеть языковой барьер
                            и получить ценные советы от опытных преподавателей.</p>
                    </div>

                    <div class="event2" id="webinars">
                        <div class="cardtxt2">
                            <img src="/src/img/all_events/comp.svg">
                            <h3>Интерактивные Вебинары по Грамматике</h3>
                        </div>
                        <p>Углубите свои знания грамматики с помощью наших вебинаров. Разбор сложных
                            тем, интерактивные задания и практика с опытными преподавателями помогут
                            вам уверенно использовать английский язык.</p>
                    </div>

                    <div class="event2" id="travel-english">
                        <div class="cardtxt2">
                            <img src="/src/img/all_events/map.svg" alt="">
                            <h3>Курс "Английский для Путешественников"</h3>
                        </div>
                        <p>Планируете путешествие за границу? Наш курс поможет вам освоить английский
                            язык, необходимый для общения в поездках: от бронирования отелей до разговоров
                            с местными жителями.</p>
                    </div>

                </div>

                <div class="events3">

                    <div class="event3" id="literature-evenings">
                        <img src="/src/img/all_events/literature.svg" alt="">
                        <div class="cardtxt3">
                            <h3>Литературные Вечера: Чтение и<br> Обсуждение Книг</h3>
                            <p>Присоединяйтесь к нашему клубу любителей литературы! Мы читаем и обсуждаем
                            произведения мировой и англоязычной литературы, проводим встречи с авторами
                            и литературными критиками, улучшаем навыки чтения и критического мышления.</p>
                        </div>
                    </div>

                    <div class="event3" id="games">
                        <h3>Онлайн-игры "Учимся английскому весело"</h3>
                        <p>Играйте и учитесь! Наши онлайн-игры помогут вам улучшить знание английского
                            языка в увлекательной форме. Развивайте навыки чтения, письма и разговорной
                            речи через игровые задания и соревнования.</p>
                    </div>

                </div>
                
                <div class="events4">

                    <div class="event4" id="movies">
                        <div class="cardtxt4">
                            <img src="/src/img/all_events/video.svg" alt="">
                            <h3>Онлайн-курс "Английский через фильмы"</h3>
                        </div>
                        <p>Учите английский язык, просматривая популярные фильмы и сериалы. Анализ диалогов,
                            изучение идиом и сленга, практика восприятия речи на слух помогут вам лучше
                            понимать носителей языка и говорить свободно.</p>
                    </div>
                    <div class="event4" id="everyday-english">
                        <div class="cardtxt4">
                            <img src="/src/img/all_events/letter.svg" alt="">
                            <h3>Курс "Письменный английский для повседневной жизни"</h3>
                        </div>
                        <p>Научитесь писать на английском языке так же легко, как на родном. Упражнения и
                            практика письма помогут вам освоить навыки ведения переписки, написания эссе
                            и деловых писем.</p>
                    </div>
                    <div class="event4" id="writing-workshop">
                        <div class="cardtxt4">
                            <img src="/src/img/all_events/pan.svg" alt="">
                            <h3>Мастер-классы по Письму: От Сообщений до Эссе</h3>
                        </div>
                        <p>Хотите научиться писать как профессионал? Наши мастер-классы помогут вам
                            улучшить навыки письма и создания текстов на английском языке. Практические
                            занятия и советы опытных преподавателей сделают процесс обучения увлекательным
                            и эффективным.</p>
                    </div>

                </div>

                
            </section>
            
        </main>

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