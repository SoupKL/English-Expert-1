<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/all_courses.css') }}">
    <link rel="icon" href="/src/img/main/logo.svg" type="image/png">
    <title>Все курсы</title>
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
            <a href="/html/about.html">О нас</a>
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

<!-- Блок Выборки -->

<div class="wrapper">

    <section class="courses">

        <h3 class="txt">Все программы обучения</h3>

        <div class="cours">
            <div class="level">
                <p class="txt2">Уровень сложности</p>
                <div class="level0">
                    <input type="radio" name="vbr2" value="default" required><p>Все курсы</p>
                </div>
                <div class="level1">
                    <input type="radio" name="vbr2" value="novice" required><p>Новичок</p>
                </div>
                <div class="level2">
                    <input type="radio" name="vbr2" value="user" required><p>Пользователь</p>
                </div>
                <div class="level3">
                    <input type="radio" name="vbr2" value="professional" required><p>Профессионал</p>
                </div> 
            </div>

<script src="/src/js/radio_button.js"></script>

<!-- Блок карточек -->

            <div class="cards-container">
                <div class="cards1">
                    <div class="card" id="A1">
                        <div class="cardtxt">
                            <img src="/src/img/all_courses/A1.svg">
                            <h3>Уровень А1</h3>
                        </div>
                        <p>Идеальный выбор для абсолютных новичков.
                            Здесь вы освоите английский язык с нуля,
                            начиная с базовых фраз и повседневного
                            общения. Разработанный курс включает в
                            себя интерактивные упражнения, игры и
                            диалоги, чтобы улучшить вашу языковую
                            подготовку в увлекательной форме.</p>
                    </div>

                    <div class="card" id="A2">
                        <div class="cardtxt">
                            <img src="/src/img/all_courses/A2.svg">
                            <h3>Уровень А2</h3>
                        </div>
                        <p>Переходите от приветствий к простым разговорам.
                            Этот курс поможет вам уверенно выражать свои
                            мысли на английском. Освоите навыки неформального
                            общения, делая вашу коммуникацию более свободной
                            и естественной.</p>
                    </div>
                </div>

                <div class="cards2">
                    <div class="card" id="B1">
                        <div class="cardtxt">
                            <img src="/src/img/all_courses/B1.svg">
                            <h3>Уровень B1</h3>
                        </div>
                        <p>Преодолейте порог и углубитесь в более
                            сложные темы. Здесь вы начнете строить
                            фундамент для более сложных языковых
                            концепций.</p>
                    </div>

                    <div class="card" id="B2">
                        <div class="cardtxt">
                            <img src="/src/img/all_courses/B2.svg">
                            <h3>Уровень B2</h3>
                        </div>
                        <p>Готовьтесь к приключениям! Этот курс сфокусирован
                            на развитии вашего языкового навыка в различных
                            сценариях. Научитесь применять знания в реальных
                            ситуациях, что сделает ваш языковой опыт более
                            полноценным и уверенным.</p>
                    </div>
                </div>

                <div class="cards3">
                    <div class="card" id="C1">
                        <div class="cardtxt">
                            <img src="/src/img/all_courses/C1.svg">
                            <h3>Уровень C1</h3>
                        </div>
                        <p>Совершенствуйте свой язык и обретайте уверенность
                            в общении на высоком уровне. Курс для тех, кто
                            стремится к языковому мастерству.</p>
                    </div>

                    <div class="card" id="C2">
                        <div class="cardtxt">
                            <img src="/src/img/all_courses/C2.svg">
                            <h3>Уровень C2</h3>
                        </div>
                        <p>Здесь вы достигнете вершины своего языкового
                            мастерства. Курс для тех, кто стремится к
                            безупречной владению английским.</p>
                    </div>
                </div>

                <div class="cards4">
                    <div class="card" id="work">
                        <div class="cardtxt">
                            <img src="/src/img/all_courses/work.svg">
                            <h3>Для работы</h3>
                        </div>
                        <p>Углубленный курс английского языка, специально
                            разработанный для веб-программистов. Освойте
                            профессиональную терминологию, понимание кода
                            и коммуникацию с международными командами.</p>
                    </div>

                    <div class="card" id="purpose">
                        <div class="cardtxt">
                            <img src="/src/img/all_courses/purpose.svg">
                            <h3>Знаю цель</h3>
                        </div>
                        <p>Поможем решить любую задачу и осуществить мечту.
                            Подойдет тем кто переезжает, тем кто сдает
                            экзамен или для тех кому нужно общаться с
                            иностранцами</p>
                    </div>
                </div>
            
            </div>

        </div>

</section>
<script src="/src/js/all_courses.js"></script>
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