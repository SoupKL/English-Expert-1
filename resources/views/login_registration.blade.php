<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login_registration.css') }}">
    <link rel="icon" href="/src/img/main/logo.svg" type="image/png">
    <title>login registration</title>
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
        </nav>
    </header>
</div>

<script src="/src/js/menu.js"></script>

</div>

<!-- БЛОК ФОРМЫ ВХОДА/РЕГИСТРАЦИИ -->

<div class="wrapper">

    <main>
        <div class="container" >
            <div class="tab">
                <button class="tablinks" onclick="openPage(event, 'Login')">Вход</button>
                <button class="tablinks" onclick="openPage(event, 'Register')">Регистрация</button>
            </div>

            <div id="Login" class="tabcontent" style="display: block;">
                <form>
                    <input type="text" type="email" id="login/email" name="login/email" placeholder="Логин/Email">
                    <input type="password" id="password" name="password" placeholder="Пароль">
                    <button type="submit"  class="enter">Войти</button>
                </form>
            </div>

            <div id="Register" class="tabcontent">
                <form>
                    <input type="text" id="name" name="name" placeholder="Имя">
                    <input type="text" id="reg-login" name="reg-login" placeholder="Логин">
                    <input type="email" id="reg-email" name="reg-email" placeholder="Email">
                    <input type="password" id="reg-password" name="reg-password" placeholder="Пароль">
                    <button type="submit" class="enter">Войти</button>
                </form>
            </div>
        </div>
    </main>

</div>


    
<script src="/src/js/reg.js"></script>
<!-- FOOTER -->

    <footer>
        <div class="wrapper">
            <div class="info_f">
                <img src="/src/img/login_registration/logo_white.svg">
                <p>8 800 555-35-35</p>
                <p>г. Владивосток, ул. Жигура, д. 26</p>
                <p>English_Expert@mail.ru</p>
                <p>© English Expert</p> 
            </div>
        </div>
    </footer>

</body>
</html>