<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cours.css') }}">
    <link rel="icon" href="/src/img/main/logo.svg" type="image/png">
    <title>Знаю цель</title>
</head>
<body>
  
<!-- HEADER -->

<div class="wrapper">
  <header>
      <div id="logo">
          <a href="/html/main.html"><img src="/src/img/main/logo.svg" alt="English Expert Logo"></a>
      </div>
      <div class="menu-toggle">
          <img src="/src/img/main/header_swip.svg" alt="Menu Icon">
      </div>
      <nav class="menu">
          <a href="/html/all_courses.html">Все курсы</a>
          <a href="/html/all_events.html">Мероприятия</a>
          <a href="/html/about.html">О нас</a>
          <a href="#"><img src="/src/img/main/geolocation.svg">Владивосток</a>
          <a href="tel:8005553535">8 800 555-35-35</a>
          <form action="login.php" method="post">
              <a href="/html/login_registration.html"><img src="/src/img/main/person.svg"><input
                  type="text" id="login" name="loginname"
                  placeholder="Войти"></a>
          </form>
      </nav>
  </header>
</div>

<script src="/src/js/menu.js"></script>

<!-- Блок "Знаю цель" -->

<section class="level">

        <div class="card_level" id="levelpurpose">
            <img src="/src/img/cours/levelpurpose.svg" alt="">
        </div>

</section>

<!-- Блок целей -->

<div class="wrapper">
    <div class="purposes">

        <div class="purposes_left">
            <img src="/src/img/cours/rabbit1.svg" alt="">
        </div>

        <div class="purposes_right">

            <div class="purposes_card">
                <img src="/src/img/cours/purpose_1.svg" alt="">
                <h3>Цель 1</h3>
                <p>Подготовка к международным экзаменам (IELTS, TOEFL) для успешного поступления в зарубежные вузы и карьерного роста.</p>
            </div>

            <div class="purposes_card">
                <img src="/src/img/cours/purpose_2.svg" alt="">
                <h3>Цель 2</h3>
                <p>Развитие навыков делового английского языка для успешного общения с иностранными партнерами и клиентами.</p>
            </div>

            <div class="purposes_card">
                <img src="/src/img/cours/purpose_3.svg" alt="">
                <h3>Цель 3</h3>
                <p>Улучшение разговорных навыков для комфортного общения в повседневной жизни и путешествиях.</p>
            </div>

            <div class="purposes_card">
                <img src="/src/img/cours/purpose_4.svg" alt="">
                <h3>Цель 4</h3>
                <p>Повышение уровня владения английским для профессионального роста и расширения карьерных возможностей.</p>
            </div>

        </div>

    </div>
</div>

<!-- Блок фото -->

<section class="photo">
    <div class="wrapper">

        <img src="/src/img/cours/photopurpose.svg" alt="">

    </div>
</section>

<!-- Блок приоритетов -->

<div class="wrapper">
    <section class="priorities">

        <div class="priority">
            <img src="/src/img/cours/icon_1.svg" alt="">
            <p>Основы английского языка для начинающих</p>
        </div>

        <div class="priority">
            <img src="/src/img/cours/icon_2.svg" alt="">
            <p>Английский для взрослых и детей</p>
        </div>

        <div class="priority">
            <img src="/src/img/cours/icon_3.svg" alt="">
            <p>Онлайн-уроки английского языка</p>
        </div>

        <div class="priority">
            <img src="/src/img/cours/icon_4.svg" alt="">
            <p>Профессиональное обучение английскому</p>
        </div>

        <div class="priority">
            <img src="/src/img/cours/icon_5.svg" alt="">
            <p>Языковые игры и практические занятия</p>
        </div>

        <div class="priority">
            <img src="/src/img/cours/icon_6.svg" alt="">
            <p>Сеансы разговорной практики с носителями языка</p>
        </div>

    </section>
</div>

<!-- Блок преимуществ -->

<section class="benefits">
    <div class="wrapper">

        <div class="txt">
            <p>Изучение английского языка поможет вам
            развить навыки планирования, внимательности
            и критического мышления.</p>

            <p>Английским можно заниматься в любом возрасте
            — обучение новому языку укрепляет когнитивные
            способности и поддерживает здоровье мозга.</p>
        </div>

    </div>    

    <button  id="modalBtn" type="button">Записаться на курс</button>
        
</section>

<!-- Модальное окно с банковской картой -->

<div class="wrapper" id="app">
    <div class="card-form">
      <!-- Модальное окно -->
      <div class="modal" :class="{ 'modal-open': isModalOpen }">
        <div class="modal-content">
          <!-- Кнопка для закрытия модального окна -->
          <span class="close" @click="closeModal">&times;</span>
  
          <!-- Форма кредитной карты -->
          <div class="card-list">
            <div class="card-item" v-bind:class="{ '-active' : isCardFlipped }">
                <div class="card-item__side -front">
                    <div class="card-item__focus" v-bind:class="{'-active' : focusElementStyle }" v-bind:style="focusElementStyle" ref="focusElement"></div>
                    <div class="card-item__cover">
                      <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'" class="card-item__bg">
                    </div>
          
                    <div class="card-item__wrapper">
                      <div class="card-item__top">
                        <img src="https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/chip.png" class="card-item__chip">
                        <div class="card-item__type">
                          <transition name="slide-fade-up">
                            <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'" v-if="getCardType" v-bind:key="getCardType" alt="" class="card-item__typeImg">
                          </transition>
                        </div>
                      </div>
                      <label for="cardNumber" class="card-item__number" ref="cardNumber">
                        <template v-if="getCardType === 'amex'">
                          <span v-for="(n, $index) in amexCardMask" :key="$index">
                            <transition name="slide-fade-up">
                              <div class="card-item__numberItem" v-if="$index > 4 && $index < 14 && cardNumber.length > $index && n.trim() !== ''">*</div>
                              <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" :key="$index" v-else-if="cardNumber.length > $index">
                                {{cardNumber[$index]}}
                              </div>
                              <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" v-else :key="$index + 1">{{n}}</div>
                            </transition>
                          </span>
                        </template>
          
                        <template v-else>
                          <span v-for="(n, $index) in otherCardMask" :key="$index">
                            <transition name="slide-fade-up">
                              <div class="card-item__numberItem" v-if="$index > 4 && $index < 15 && cardNumber.length > $index && n.trim() !== ''">*</div>
                              <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" :key="$index" v-else-if="cardNumber.length > $index">
                                {{cardNumber[$index]}}
                              </div>
                              <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" v-else :key="$index + 1">{{n}}</div>
                            </transition>
                          </span>
                        </template>
                      </label>
                      <div class="card-item__content">
                        <label for="cardName" class="card-item__info" ref="cardName">
                          <div class="card-item__holder">Владелец Карты</div>
                          <transition name="slide-fade-up">
                            <div class="card-item__name" v-if="cardName.length" key="1">
                              <transition-group name="slide-fade-right">
                                <span class="card-item__nameItem" v-for="(n, $index) in cardName.replace(/\s\s+/g, ' ')" v-if="$index === $index" v-bind:key="$index + 1">{{n}}</span>
                              </transition-group>
                            </div>
                            <div class="card-item__name" v-else key="2">Полное Имя</div>
                          </transition>
                        </label>
                        <div class="card-item__date" ref="cardDate">
                          <label for="cardMonth" class="card-item__dateTitle">Истекает</label>
                          <label for="cardMonth" class="card-item__dateItem">
                            <transition name="slide-fade-up">
                              <span v-if="cardMonth" v-bind:key="cardMonth">{{cardMonth}}</span>
                              <span v-else key="2">MM</span>
                            </transition>
                          </label>
                          /
                          <label for="cardYear" class="card-item__dateItem">
                            <transition name="slide-fade-up">
                              <span v-if="cardYear" v-bind:key="cardYear">{{String(cardYear).slice(2,4)}}</span>
                              <span v-else key="2">YY</span>
                            </transition>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-item__side -back">
                    <div class="card-item__cover">
                      <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'" class="card-item__bg">
                    </div>
                    <div class="card-item__band"></div>
                    <div class="card-item__cvv">
                      <div class="card-item__cvvTitle">CVV</div>
                      <div class="card-item__cvvBand">
                        <span v-for="(n, $index) in cardCvv" :key="$index">
                          *
                        </span>
          
                      </div>
                      <div class="card-item__type">
                        <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'" v-if="getCardType" class="card-item__typeImg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-form__inner">
                <div class="card-input">
                  <label for="cardNumber" class="card-input__label">Номер карты</label>
                  <input type="text" id="cardNumber" class="card-input__input" v-mask="generateCardNumberMask" v-model="cardNumber" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardNumber" autocomplete="off">
                </div>
                <div class="card-input">
                  <label for="cardName" class="card-input__label">Владелец</label>
                  <input type="text" id="cardName" class="card-input__input" v-model="cardName" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardName" autocomplete="off">
                </div>
                <div class="card-form__row">
                  <div class="card-form__col">
                    <div class="card-form__group">
                      <label for="cardMonth" class="card-input__label">Срок годности</label>
                      <select class="card-input__input -select" id="cardMonth" v-model="cardMonth" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardDate">
                        <option value="" disabled selected>Месяц</option>
                        <option v-bind:value="n < 10 ? '0' + n : n" v-for="n in 12" v-bind:disabled="n < minCardMonth" v-bind:key="n">
                          {{n < 10 ? '0' + n : n}}
                        </option>
                      </select>
                      <select class="card-input__input -select" id="cardYear" v-model="cardYear" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardDate">
                        <option value="" disabled selected>Год</option>
                        <option v-bind:value="$index + minCardYear" v-for="(n, $index) in 12" v-bind:key="n">
                          {{$index + minCardYear}}
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="card-form__col -cvv">
                    <div class="card-input">
                      <label for="cardCvv" class="card-input__label">CVV</label>
                      <input type="text" class="card-input__input" id="cardCvv" v-mask="'####'" maxlength="4" v-model="cardCvv" v-on:focus="flipCard(true)" v-on:blur="flipCard(false)" autocomplete="off">
                    </div>
                  </div>
            </div>
            <button class="card-form__button">Отправить</button>
          </div>
          </div>
      </div>
    </div>
  </div>

<!-- Подключение Vue.js и других библиотек через CDN -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-credit-card-validation/dist/vue-credit-card-validation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/v-mask/dist/v-mask.min.js"></script>

<script  src="/src/js/modal.js"></script>
<script src="/src/js/app.js"></script>

<!-- Блок содержание курса -->

<div class="wrapper">
    <section class="content">

        <div class="content_left">
            <h3>Содержание курса</h3>
            <p>Курс "Знаю цель" разработан для тех, кто стремится достичь конкретных целей в изучении английского языка:<br>
            Подготовка к международным экзаменам: стратегии и практические задания для успешной сдачи IELTS, TOEFL и других тестов.<br>
            Деловой английский: ведение переговоров, составление деловых писем, презентаций и участие в собраниях.<br>
            Разговорная практика: сценарии общения в повседневных ситуациях, тематические дискуссии и ролевые игры.<br>
            Углубленное изучение грамматики и расширение словарного запаса для профессионального использования.</p>
            <div class="txtcontent">
                <p id="term">Срок обучения: 
                    6 месяцев</p>
                <p id="mode">Режим занятий: 
                    3 раза в неделю по 2 академических часа</p>
            </div>
            <h4>от  6 500 ₽ в месяц</h4>
            <button type="submit">Записаться на пробное занятие</button>
        </div>

        <div class="content_right">
            <img src="/src/img/cours/rabbit2.svg" alt="">
        </div>

    </section>
</div>

<!-- Блок преподавателей -->

<section class="teachers">
    <div class="wrapper">

        <h3>Наши преподаватели</h3>

        <div class="cards">
            <div class="card">
                <img src="/src/img/cours/comment1.svg" alt="">
                <h3>Анна Морозова</h3>
                <p> Изысканная мотиваторша с глубоким
                    пониманием языка</p>
            </div>
            <div class="card">
                <img src="/src/img/cours/comment2.svg" alt="">
                <h3>Иван Белов</h3>
                <p>Энергичный языковед с богатым
                    опытом преподавания</p>
            </div>
            <div class="card">
                <img src="/src/img/cours/comment3.svg" alt="">
                <h3>Елена Николаева</h3>
                <p>Терпеливая и креативная педагог,
                    способная адаптироваться к нуждам каждого ученика</p>
            </div>
            <div class="card">
                <img src="/src/img/cours/comment4.svg" alt="">
                <h3>Дмитрий Ковалев</h3>
                <p>Заботливый и инновационный учитель,
                    вдохновляющий на достижение лучших результатов</p>
            </div>
        </div>

    </div>
</section>

<!-- Блок найди ответ -->
<div class="wrapper">

    <div class="container">
        <h1>Найдите ответ на свой вопрос</h1>
        <div class="faq-section">
            <details>
                <summary>Кому подойдёт этот курс?</summary>
                <p>Этот курс идеально подходит для тех, кто продвинут,
                    уже владеtт английским языком на
                    высоком уровне и готов к изучению сложных академических
                    и профессиональных задач.</p>
            </details>
            <details>
                <summary>Что нужно для занятий?</summary>
                    <ul>
                        <li>Мотивация и желание учиться.</li>
                        <li>Доступ к интернету для выполнения онлайн-заданий и участия в виртуальных уроках.</li>
                        <li>Учебные материалы, которые предоставляются на первом занятии.</li>
                        <li>Простой англо-русский словарь для помощи в понимании новых слов.</li>
                    </ul>
            </details>
            <details>
                <summary>Где можно узнать расписание занятий?</summary>
                    <ul>
                        <li>На нашем сайте: Полный график уроков доступен в разделе "Расписание". Здесь вы найдете дни и время занятий для разных групп.</li>
                        <li>В личном кабинете: Зарегистрируйтесь и войдите в личный кабинет на сайте, чтобы получить доступ к расписанию студента, а также уведомления о возможных изменениях.</li>
                        <li>Через администратора: Вы можете связаться с нашим администратором по телефону или электронной почте для получения подробной информации о расписании.</li>
                        <li>На первом занятии: Учитель представит полное расписание занятий и расскажет о всех предстоящих уроках и мероприятиях.</li>
                    </ul>
            </details>
            <details>
                <summary>Что делать, если пропустил занятие?</summary>
                    <ul>
                        <li>Просмотреть записи уроков, доступные в личном кабинете.</li>
                        <li>Обратиться к преподавателю за дополнительными материалами и заданиями для самостоятельного изучения пропущенного материала.</li>
                        <li>Выполните домашние задания: Важно, чтобы ребенок выполнил все домашние задания, которые задавались на пропущенном занятии.</li>
                        <li>Посетите дополнительные консультации: При необходимости учитель может предложить индивидуальные консультации для восполнения пропущенного материала.</li>
                    </ul>
            </details>
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