<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="icon" href="/src/img/main/logo.svg" type="image/png">
    <title>О нас</title>
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

<section class="hero" id="education">
</section>


<!-- БЛОК ПРИВЕТСВИЯ -->

<div class="wrapper">

    <div class="hi">
        <div class="hi_left">
            <img src="{{ asset('img/about/rabbit.svg') }}">
        </div>
        <div class="hi_right">
            <div class="right_1">
                <img src="{{ asset('img/about/cross.svg') }}">
                <p>Мы создали онлайн-школу по английскому языку 
                    для детей, где компьютеры становятся
                    не просто инструментами или игрушками,
                    а верными спутниками на пути обучения и
                    развития.</p>
            </div>
            <div class="right_1">
                <img src="{{ asset('img/about/circle.svg') }}">
                <p>Мы создали онлайн-школу по английскому языку
                    для подростков, чтобы вопрос
                    "Кем я хочу стать?" больше не казался таким
                    сложным.</p>
            </div>
            <div class="right_1">
                <img src="{{ asset('img/about/triangle.svg') }}">
                <p>Мы создали онлайн-школу по английскому языку
                    для взрослых, чтобы у них была возможность
                    начать с читатого листа и создать лучшую
                    версию себя в любом возрасте.</p>
            </div>
        </div>
    </div>

</div>

<!-- Блок с основателем -->

<div class="wrapper">

    <div class="inter">

        <div class="inter_left">
            <img src="{{ asset('img/about/man.svg') }}">
            <h3>Сергей Кузнецов</h3>
            <p>Основатель Школы English Expert</p>
        </div>
        <div class="inter_right">
            <p>"Мой интерес к английскому языку начался с
                желания понимать иностранные фильмы и книги,
                разговаривать с носителями и общаться в
                международной среде. Я не стал профессионалом
                в этом деле, но выработал хорошее чувство языка
                и умение общаться. Идея создать онлайн школу
                английского пришла ко мне в 2020 году, когда
                в период полного локдауна я решил воспроизвести
                свою любовь к изучению языков. Оказалось, что
                для изучения английского сейчас не обязательно
                посещать классы вживую, всё доступно в интернете.
                Младший брат проводил большую часть времени за
                играми на смартфоне. Я показал ему английский
                язык. К декабрю он уже начал свободно общаться",
                - смеётся Сергей Николаевич. Вскоре идея небольшой
                онлайн школы английского превратилась в план
                создания Школы English Expert, где дети смогут
                изучать то, что им нравится, а взрослые смогут
                изменить свою жизнь.</p>
        </div>

    </div>

</div>

<!-- Блок наши ценности -->

<div class="wrapper">

    <div class="values">
        <h1>Наши ценности</h1>
        <div class="cards">

            <div class="card">
                <img src="{{ asset('img/about/values1.svg') }}">
                <p>Содержание обучения должно быть актуальным, 
                    а методика проверенная годами.</p>
            </div>

            <div class="card">
                <img src="{{ asset('img/about/values2.svg') }}">
                <p>Педагог - прежде всего личность компетентная 
                    и харизматичная.</p>
            </div>
            <div class="card">
                <img src="{{ asset('img/about/values3.svg') }}">
                <p>Точка развития образования - ребенок, его интересы 
                    и потребности</p>
            </div>
            <div class="card">
                <img src="{{ asset('img/about/values4.svg') }}">
                <p>Прогрессом правит любовь к знаниям</p>
            </div>
            <div class="card">
                <img src="{{ asset('img/about/values5.svg') }}">
                <p>Технологии правят миром, а человек эти технологии создает</p>
            </div>

        </div>
    </div>

</div>

<!-- Блок преподавателей -->

<section class="teachers">
    <div class="wrapper">

        <h3>Наши преподаватели</h3>

        <div class="cards">
            <div class="card">
                <img src="{{ asset('img/cours/comment1.svg') }}">
                <h3>Анна Морозова</h3>
                <p> Изысканная мотиваторша с глубоким
                    пониманием языка</p>
            </div>
            <div class="card">
                <img src="{{ asset('img/cours/comment2.svg') }}">
                <h3>Иван Белов</h3>
                <p>Энергичный языковед с богатым
                    опытом преподавания</p>
            </div>
            <div class="card">
                <img src="{{ asset('img/cours/comment3.svg') }}">
                <h3>Елена Николаева</h3>
                <p>Терпеливая и креативная педагог,
                    способная адаптироваться к нуждам каждого ученика</p>
            </div>
            <div class="card">
                <img src="{{ asset('img/cours/comment4.svg') }}">
                <h3>Дмитрий Ковалев</h3>
                <p>Заботливый и инновационный учитель,
                    вдохновляющий на достижение лучших результатов</p>
            </div>
        </div>

    </div>
</section>

<!-- Блок наши программы -->

<div class="wrapper">

    <div class="programs">
        <h1>Наши программы</h1>
        <div class="program">
            <div class="prog">
                <img src="{{ asset('img/about/vector.svg') }}">
                <p>Предполагают пролонгированное обучение</p>
            </div>
            <div class="prog">
                <img src="{{ asset('img/about/vector.svg') }}">
                <p>Составлены с учетом возрастных 
                    и индивидуальных особенностей детей</p>
            </div>
            <div class="prog">
                <img src="{{ asset('img/about/vector.svg') }}">
                <p>Авторские и не имеют аналогов</p>
            </div>
            <div class="prog">
                <img src="{{ asset('img/about/vector.svg') }}">
                <p>Составлены на основе деятельностного
                    и компетентностного подходов</p>
            </div>
            <div class="prog">
                <img src="{{ asset('img/about/vector.svg') }}">
                <p>Реализуются с помощью современных
                    педагогических технологий</p>
            </div>
            <div class="prog">
                <img src="{{ asset('img/about/vector.svg') }}">
                <p>Актуальны и фундаментальны</p>
            </div>
        </div>

        <div class="numbers">
            <div class="number">
                <img src="{{ asset('img/main/8.svg') }}">
                <p>Курсов</p>
            </div>
            <div class="number">
                <img src="{{ asset('img/main/32.svg') }}">
                <p>Ведущих преподавателей</p>
            </div>
            <div class="number">
                <img src="{{ asset('img/main/14795.svg') }}">
                <p>Выпускников</p>
            </div>
        </div>
    </div>

<!-- Блок наши партнеры -->

<div class="wrapper">

    <div class="partners">
        <h1>Наши партнеры</h1>
        <div class="partner_up">
            <img src="{{ asset('img/about/tinkoff.svg') }}">
            <img src="{{ asset('img/about/alpha.svg') }}">
            <img src="{{ asset('img/about/vk.svg') }}">
            <img src="{{ asset('img/about/avito.svg') }}">
            <img src="{{ asset('img/about/yandex.svg') }}">
            <img src="{{ asset('img/about/wildberries.svg') }}">
        </div>
        <div class="partner_down">
            <img src="{{ asset('img/about/mail.svg') }}">
            <img src="{{ asset('img/about/samsung.svg') }}">
            <img src="{{ asset('img/about/rosstel.svg') }}">
            <img src="{{ asset('img/about/leroymerlin.svg') }}">
            <img src="{{ asset('img/about/google.svg') }}">
            <img src="{{ asset('img/about/apiship.svg') }}">
        </div>
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