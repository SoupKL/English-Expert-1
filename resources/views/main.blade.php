<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Expert</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="/src/img/main/logo.svg" type="image/png">
</head>
<body>

<!-- HEADER -->

<div class="wrapper">
    <header>
        <div id="logo">
            <a href="{{ route('main') }}"><img src="{{ asset('img/main/logo.svg') }}" alt="English Expert Logo"></a>
        </div>
        <div class="menu-toggle">
            <img src="{{ asset('img/main/header_swip.svg') }}" alt="Menu Icon">
        </div>
        <nav class="menu">
            <a href="{{ route('all_courses') }}"><img src="{{ asset('img/main/all_curs.svg') }}" >Все курсы</a>
            <a href="{{ route('all_events') }}">Мероприятия</a>
            <a href="{{ route('about') }}">О нас</a>
            <a href="#"><img src="{{ asset('img/main/geolocation.svg') }}">Владивосток</a>
            <a href="tel:8005553535">8 800 555-35-35</a>
            <form action="login.php" method="post">
                <a href="{{ route('login_registration') }}"><img src="{{ asset('img/main/person.svg') }}"><input
                    type="text" id="login" name="loginname"
                    placeholder="Войти"></a>
            </form>
        </nav>
    </header>
</div>

<script src="{{ asset('js/menu.js') }}"></script>

<!-- БЛОК ОБРАЗОВАТЕЛЬНАЯ ПЛАТФОРМА -->

    <section class="hero">
    </section>

<!-- БЛОК АКТУАЛЬНЫЕ ЗНАНИЯ -->

   <div class="wrapper">
        <section class="stat">
            <h1>Актуальные знания от признанных экспертов рынка<br> 
                для новичков и практикующих специалистов.</h1>
            <section class="stats">
                <div class="stat-item">
                    <img src="{{ asset('img/main/8.svg') }}">
                    <p>Курсов</p>
                </div>
                <div class="stat-item">
                    <img src="{{ asset('img/main/32.svg') }}">
                    <p>Ведущих преподавателей</p>
                </div>
                <div class="stat-item">
                    <img src="{{ asset('img/main/14795.svg') }}">
                    <p>Выпускников</p>
                </div>
            </section>
        </section>
   </div> 

<!-- БЛОК КАРТОЧЕК НОВОСТЕЙ -->

   <div class="wrapper">
        <section class="event">
            <div class="card-info">
                <div class="cardtxt">
                    <img src="{{ asset('img/main/25.svg') }}" alt="Дата: 25 ноября" class="date-image">
                    <div class="info">
                        <h1 class="title">День открытых дверей</h1>
                        <p class="description">Приглашаем всех желающих на бесплатную экскурсию<br>
                            в мир востребованных профессий и полезных навыков</p>
                    </div>
                </div>
            </div>

            <div class="event-actions">
                <div class="action-item1" id="i1">
                    <div class="action">
                        <img src="{{ asset('img/main/try.svg') }}">
                        <h3>Попробуй!</h3>
                        <p>Пройдите тест и узнайте свои способности в сфере информационных технологий</p>
                    </div>
                </div>

                <div class="action-item" id="i2">
                    <div class="action">
                        <img src="{{ asset('img/main/geolocation.svg') }}">
                        <h3>Как нас найти?</h3>
                        <p>Узнайте наше местоположение и подробности о том, как добраться до нас</p>
                    </div>
                   
                </div>
                
                <div class="action-item1" id="i3">
                    <div class="action">
                        <img src="{{ asset('img/main/newspaper.svg') }}" alt="Новости">
                        <h3>Новости Академии</h3>
                    </div>
                    
                </div>
            </div>

        </section>
   </div>

   <script src="{{ asset('js/button.js') }}"></script>

<!-- БЛОК ОТЗЫВЫ -->
    
    <section class="testimonials">
        <h2>Отзывы наших студентов</h2>
            <div class="slider">
                <div class="testimonial-item">
                    <div class="user-info">
                        <img src="{{ asset('img/main/gavriil.svg') }}" alt="Фото пользователя">
                        <h2 class="review-author">Гавриил Архипов</h2>
                    </div>
                    <p class="review-text">Рекомендую всем, кто желает выучить английский!</p>
                    <div class="rating">
                        <span class="stars"><img src="{{ asset('img/main/star.svg') }}"></span>
                        <span class="score"><p>4,87/5</p></span>
                    </div>
                </div>
                
                <div class="testimonial-item">
                    <div class="user-info">
                        <img src="{{ asset('img/main/marina.svg') }}" alt="Фото пользователя">
                        <h2 class="review-author">Марина Смирнова</h2>
                    </div>
                    <p class="review-text">Я очень довольна результатами, которые удалось достичь благодаря этим курсам английского языка! Преподаватель помогал мне преодолеть все трудности. Теперь я гораздо увереннее общаюсь на английском языке!</p>
                    <div class="rating">
                        <span class="stars"><img src="{{ asset('img/main/star.svg') }}"></span>
                        <span class="score"><p>4,99/5</p></span>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="user-info">
                        <img src="{{ asset('img/main/elena.svg') }}" alt="Фото пользователя">
                        <h2 class="review-author">Елена Кузнецова</h2>
                    </div>
                    <p class="review-text"> Я улучшила свои навыки чтения и письма. Советую всем, кто хочет выучить английский язык.</p>
                    <div class="rating">
                        <span class="stars"><img src="{{ asset('img/main/star.svg') }}"></span>
                        <span class="score"><p>4,87/5</p></span>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="user-info">
                        <img src="{{ asset('img/main/alex.svg') }}" alt="Фото пользователя">
                        <h2 class="review-author">Алексей Иванов</h2>
                    </div>
                    <p class="review-text">Я очень доволен этими курсами английского языка! Преподаватели профессиональные и терпеливые. За короткий промежуток времени, я значительно улучшил свои навыки разговорной речи. Рекомендую всем!</p>
                    <div class="rating">
                        <<span class="stars"><img src="{{ asset('img/main/star.svg') }}"></span>
                        <span class="score"><p>4/5</p></span>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="user-info">
                        <img src="{{ asset('img/main/andre.svg') }}" alt="Фото пользователя">
                        <h2 class="review-author">Андрей Петров</h2>
                    </div>
                    <p class="review-text">Все уроки структурированы и легко понять. Я получил много практического опыта и научился говорить на английском более уверенно. </p>
                    <div class="rating">
                        <span class="stars"><img src="{{ asset('img/main/star.svg') }}"></span>
                        <span class="score"><p>4,7/5</p></span>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="user-info">
                        <img src="{{ asset('img/main/alexsandra.svg') }}" alt="Фото пользователя">
                        <h2 class="review-author">Александра Макаренко</h2>
                    </div>
                    <p class="review-text">Эти курсы английского языка превзошли все мои ожидания! Очень понравился подход преподавателя к обучению. Занятия были интересными и практичными, а результаты заметны уже после нескольких уроков.</p>
                    <div class="rating">
                        <span class="stars"><img src="{{ asset('img/main/star.svg') }}"></span>
                        <span class="score"><p>4,95/5</p></span>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="user-info">
                        <img src="{{ asset('img/main/maxim.svg') }}" alt="Фото пользователя">
                        <h2 class="review-author">Максим Козлов</h2>
                    </div>
                    <p class="review-text">Эти курсы английского языка превзошли все мои ожидания! Очень понравился подход преподавателя к обучению. Занятия были интересными и практичными, а результаты заметны уже после нескольких уроков.</p>
                    <div class="rating">
                        <span class="stars"><img src="{{ asset('img/main/star.svg') }}"></span>
                        <span class="score"><p>5/5</p></span>
                    </div>
                </div>
                
                <div class="testimonial-item">
                    <div class="user-info">
                        <img src="{{ asset('img/main/uliya.svg') }}" alt="Фото пользователя">
                        <h2 class="review-author">Юлия Архипова</h2>
                    </div>
                    <p class="review-text">Онлайн школа английского языка превзошла мои ожидания! Уроки были очень интересными и информативными.</p>
                    <div class="rating">
                        <span class="stars"><img src="{{ asset('img/main/star.svg') }}"></span>
                        <span class="score"><p>5/5</p></span>
                    </div>
                </div>
                <!-- Добавьте больше карточек при необходимости -->
            </div>

            <script src="{{ asset('js/scroll.js') }}"></script>
        </section>

<!-- БЛОК НАВЫКИ -->

    <div class="wrapper">

        <div class="txt_skills">
            <h2>Добро пожаловать в English Expert</h2>
        </div>
        
        <section class="skills">
            
            <div class="skill">
                <img src="{{ asset('img/main/approach.svg') }}" alt="Skill 1">
                <p>Передовой подход 
                    к образовательному процессу</p>
            </div>

            <div class="skill">
                <img src="{{ asset('img/main/improvement.svg') }}" alt="Skill 2">
                <p>Непрерывное усовершенствование 
                    и пополнение базы курсов</p>
            </div>

            <div class="skill">
                <img src="{{ asset('img/main/teacher.svg') }}" alt="Skill 3">
                <p>Только практикующие преподаватели</p>
            </div>

            <div class="skill">
                <img src="{{ asset('img/main/proffesor.svg') }}" alt="Skill 4">
                <p>Сопровождение на всех
                    этапах. От начала обучения
                    до трудоустройства</p>
            </div>
        </section>

    </div>

<!-- БЛОК ФОРМЫ -->

<div class="wrapper">

    <div class="rabbit_helper">
        
        <div class="rh_l">
            <img src="{{ asset('img/main/rabbit2.svg') }}" alt="кролик помощник нижний">
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
                    <img src="{{ asset('img/main/logo_white.svg') }}">
                    <p>8 800 555-35-35</p>
                    <p>г. Владивосток, ул. Жигура, д. 26</p>
                    <p>English_Expert@mail.ru</p>
                    <p>© English Expert</p> 
                </div>
                  
            </div>
        </footer>
        
</body>
</html>