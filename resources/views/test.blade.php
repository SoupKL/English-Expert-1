<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Expert</title>
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    <link rel="icon" href="{{ asset('img/main/logo.svg') }}" type="image/png">
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

<!-- Блок Теста -->

    <main class="wrapper">
        <div class="container">
            <div id="quiz-container">
                <div id="questionContainer">
                    <div class="question" id="questionText"></div>
                    <form id="answerForm">
                        <div class="answers" id="answersContainer"></div>
                        <div class="progress-button-container">
                            <div id="progress">Вопрос 1/20</div>
                            <button type="submit" class="button" id="nextButton"><i class="fa fa-arrow-right"></i> Вперед</button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="result-container" class="hide">
                <h2>Для вашего уровня английского подойдет курс:</h2>

                <div class="card hide" id="A1">
                    <div class="cardtxt">
                        <img src="{{ asset('img/all_courses/A1.svg') }}">
                        <h3>Уровень А1</h3>
                    </div>
                    <p>Идеальный выбор для абсолютных новичков.
                        Здесь вы освоите английский язык с нуля,
                        начиная с базовых фраз и повседневного
                        общения. Разработанный курс включает в
                        себя интерактивные упражнения, игры и
                        диалоги, чтобы улучшить вашу языковую
                        подготовку в увлекательной форме.</p>
                    <button id="buttonA1" class="button">Перейти к курсу</button>
                </div>

                <div class="card hide" id="A2">
                    <div class="cardtxt">
                        <img src="/src/img/all_courses/A2.svg">
                        <img src="{{ asset('img/all_courses/A2.svg') }}">
                            <h3>Уровень А2</h3>
                        </div>
                        <p>Переходите от приветствий к простым разговорам.
                            Этот курс поможет вам уверенно выражать свои
                            мысли на английском. Освоите навыки неформального
                            общения, делая вашу коммуникацию более свободной
                            и естественной.</p>
                        <button id="buttonA2" class="button">Перейти к курсу</button>
                    </div>
                </div>

                <div class="card hide" id="B1">
                    <div class="cardtxt">
                        <img src="{{ asset('img/all_courses/B1.svg') }}">
                            <h3>Уровень B1</h3>
                        </div>
                        <p>Преодолейте порог и углубитесь в более
                            сложные темы. Здесь вы начнете строить
                            фундамент для более сложных языковых
                            концепций.</p>
                        <button id="buttonB1" class="button">Перейти к курсу</button>
                    </div>
                </div>

                <div class="card hide" id="B2">
                    <div class="cardtxt">
                        <img src="{{ asset('img/all_courses/B2.svg') }}">
                        <h3>Уровень B2</h3>
                    </div>
                    <p>Готовьтесь к приключениям! Этот курс сфокусирован
                        на развитии вашего языкового навыка в различных
                        сценариях. Научитесь применять знания в реальных
                        ситуациях, что сделает ваш языковой опыт более
                        полноценным и уверенным.</p>
                        <button id="buttonB2" class="button">Перейти к курсу</button>
                    </div>
                </div>

                <div class="card hide" id="C1">
                    <div class="cardtxt">
                        <img src="{{ asset('img/all_courses/C1.svg') }}">
                            <h3>Уровень C1</h3>
                        </div>
                        <p>Совершенствуйте свой язык и обретайте уверенность
                            в общении на высоком уровне. Курс для тех, кто
                            стремится к языковому мастерству.</p>
                        <button id="buttonC1" class="button">Перейти к курсу</button>
                    </div>
                </div>

                <div class="card hide" id="C2">
                     <div class="cardtxt">
                        <img src="{{ asset('img/all_courses/C2.svg') }}">
                        <h3>Уровень C2</h3>
                    </div>
                    <p>Здесь вы достигнете вершины своего языкового
                        мастерства. Курс для тех, кто стремится к
                        безупречной владению английским.</p>
                        <button id="buttonC2" class="button">Перейти к курсу</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/test.js') }}"></script>
</body>
</html>
