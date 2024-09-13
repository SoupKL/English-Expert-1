<template>
    <div class="wrapper">
        <header>
            <div id="logo">
                <a href="./main.html"><img src="./src/img/main/logo.svg" alt="English Expert Logo"></a>
            </div>
            <div class="menu-toggle">
                <img src="./src/img/main/header_swip.svg" alt="Menu Icon">
            </div>
            <nav class="menu">
                <a href="./all_courses.html">Все курсы</a>
                <a href="./all_events.html">Мероприятия</a>
                <a href="#"><img src="./src/img/main/geolocation.svg">Владивосток</a>
                <a href="tel:8005553535">8 800 555-35-35</a>
                <form action="login.php" method="post">
                    <a href="./login_registration.html"><img src="./src/img/main/person.svg"><input type="text"
                            id="login" name="loginname" placeholder="Войти"></a>
                </form>
            </nav>
        </header>
    </div>
</template>

<style>
.wrapper {
    width: 100%;
    max-width: 1180px;
    margin: 0 auto;
    padding: 20px;
}

/* HEADER */

header, .menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

header a{
    font-family: medium;
    font-size: 14px;
    text-decoration: none;
    color: black;
}

.menu{
    margin-left: 5%;
}

#logo img {
    max-width: 100%;
}

header a img {
    margin-right: 5pt;
     vertical-align: middle;
}

::placeholder {
    color: black;
}

input#login  {
    caret-color: transparent;
    border: none;
    outline: none;
    font-family: medium;
    cursor: pointer;
    background-color:white;
    max-width: 50px;
}

header a:active {
    transform: scale(0.95);
}
</style>