<script>
import {ref, computed, onMounted, watch} from 'vue';
// import "../../node_modules/vue-credit-card-validation/dist/vue-credit-card-validation.min.js";
import "../../node_modules/v-mask/dist/v-mask.min.js";
import * as VueMask from "v-mask";
import Offers from "@/components/offers/offers.vue";
import Pruposes from "@/components/puposes/pruposes.vue";
import Priorities from "@/components/priorities/priorities.vue"
import Teacher from "@/components/ teacher/teacher.vue";
import BankCard from "@/components/bank-card/bank-card.vue";



onMounted(async (Vue) => {
  try {
    const {default: VueCreditCardValidation} = await import('vue-credit-card-validation');
    Vue.use(VueCreditCardValidation);  // Если требуется явное использование Vue.use()
  } catch (error) {
    console.error("Ошибка загрузки библиотеки vue-credit-card-validation:", error);
  }
});

// Модальное окно и кнопки
// let modal = document.querySelector('.modal');
// let modalBtn = document.getElementById('modalBtn');
// let closeBtn = document.querySelector('.close');

// modalBtn = () => {
//   modal.style.display = 'block';
// };

// closeBtn.onclick = () => {
//   modal.style.display = 'none';
// };
//
// window.onclick = (event) => {
//   if (event.target === modal) {
//     modal.style.display = 'none';
//   }
// };

// window.onkeydown = (event) => {
//   if (event.key === 'Escape') {
//     modal.style.display = 'none';
//   }
// };

export default {
  components: {BankCard, Teacher, Priorities,Pruposes, Offers},
  directives: {
    mask: VueMask.VueMaskDirective,
  },
  setup() {
    const currentCardBackground = ref(Math.floor(Math.random() * 25 + 1));
    const cardName = ref("");
    const cardNumber = ref("");
    const cardMonth = ref("");
    const cardYear = ref("");
    const cardCvv = ref("");
    const minCardYear = new Date().getFullYear();
    const amexCardMask = "#### ###### #####";
    const otherCardMask = "#### #### #### ####";
    const cardNumberTemp = ref(otherCardMask);
    const isCardFlipped = ref(false);
    const focusElementStyle = ref(null);
    const isInputFocused = ref(false);
    const isModalOpen = ref(false);
    const pruposesInfo1 = [
        'Освоение базовой лексики и грамматики\n' +
        '                        английского языка, необходимой для\n' +
        '                        ежедневной коммуникации',
      'Формирование навыков простого чтения\n' +
      '                        и понимания базовых текстов на английском языке',
      'Развитие устной речи для уверенного общения\n' +
      '                        в базовых ситуациях: знакомство, путешествия,\n' +
      '                        повседневные дела',
      'Подготовка к простым письменным коммуникациям:\n' +
      '                        заполнение форм, написание коротких сообщений\n' +
      '                        и эссе.'
    ];
    const teachers = [
      {
        "img":"../../src/assets/cours/comment1.svg",
        "name":"Анна Морозова",
        "text":"Изысканная мотиваторша с глубоким\n" +
            "                    пониманием языка"
      },
      {
        "img":"../../src/assets/cours/comment2.svg",
        "name":"Иван Белов",
        "text":"Энергичный языковед с богатым\n" +
            "                    опытом преподавания"
      },
      {
        "img":"../../src/assets/cours/comment3.svg",
        "name":"Елена Николаева",
        "text":"Терпеливая и креативная педагог,\n" +
            "                    способная адаптироваться к нуждам каждого ученика"
      },
      {
        "img":"../../src/assets/cours/comment4.svg",
        "name":"Дмитрий Ковалев",
        "text":"Заботливый и инновационный учитель,\n" +
            "                    вдохновляющий на достижение лучших результатов"
      }
    ]

    const getCardType = computed(() => {
      let number = cardNumber.value;
      if (/^4/.test(number)) return "visa";
      if (/^(34|37)/.test(number)) return "amex";
      if (/^5[1-5]/.test(number)) return "mastercard";
      if (/^6011/.test(number)) return "discover";
      if (/^9792/.test(number)) return "troy";
      return "visa";
    });

    const generateCardNumberMask = computed(() => {
      return getCardType.value === "amex" ? amexCardMask : otherCardMask;
    });

    const minCardMonth = computed(() => {
      return cardYear.value === minCardYear ? new Date().getMonth() + 1 : 1;
    });

    watch(cardYear, () => {
      if (cardMonth.value < minCardMonth.value) {
        cardMonth.value = "";
      }
    });

    onMounted(() => {
      document.getElementById("cardNumber").focus();
    });

    const openModal = () => {
      isModalOpen.value = true;
    };

    const closeModal = () => {
      isModalOpen.value = false;
    };

    const flipCard = (status) => {
      isCardFlipped.value = status;
    };

    const focusInput = (e) => {
      isInputFocused.value = true;
      const target = e.target;
      focusElementStyle.value = {
        width: `${target.offsetWidth}px`,
        height: `${target.offsetHeight}px`,
        transform: `translateX(${target.offsetLeft}px) translateY(${target.offsetTop}px)`,
      };
    };

    const blurInput = () => {
      setTimeout(() => {
        if (!isInputFocused.value) {
          focusElementStyle.value = null;
        }
      }, 300);
      isInputFocused.value = false;
    };

    return {
      currentCardBackground,
      cardName,
      cardNumber,
      cardMonth,
      cardYear,
      cardCvv,
      minCardYear,
      amexCardMask,
      otherCardMask,
      cardNumberTemp,
      isCardFlipped,
      focusElementStyle,
      isInputFocused,
      isModalOpen,
      getCardType,
      generateCardNumberMask,
      minCardMonth,
      pruposesInfo1,
      teachers,
      openModal,
      closeModal,
      flipCard,
      focusInput,
      blurInput,
    };
  },
};


</script>

<template>

  <!-- HEADER -->

  <div class="wrapper">
    <header>
      <div id="logo">
        <a href="./main.html"><img src="../../src/assets/main/logo.svg" alt="English Expert Logo"></a>
      </div>
      <div class="menu-toggle">
        <img src="../../src/assets/main/header_swip.svg" alt="Menu Icon">
      </div>
      <nav class="menu">
        <a href="./all_courses.html"><img src="../../src/assets/main/all_curs.svg">Все курсы</a>
        <a href="./all_events.html">Мероприятия</a>
        <a href="./about.html">О нас</a>
        <a href="#"><img src="../../src/assets/main/geolocation.svg">Владивосток</a>
        <a href="tel:8005553535">8 800 555-35-35</a>
        <form action="login.php" method="post">
          <a href="./login_registration.html"><img src="../../src/assets/main/person.svg"><input
              type="text" id="login" name="loginname"
              placeholder="Войти"></a>
        </form>
      </nav>
    </header>
  </div>

  <!-- Блок Уровень А1 -->

  <section class="level">

    <div class="card_level" id="levelA1">
      <img src="../../src/assets/cours/levelA1.svg" alt="">
    </div>

  </section>

  <!-- Блок целей -->

  <div class="wrapper">

    <pruposes
    :text-pruposes1="pruposesInfo1">
    </pruposes>

  </div>

  <!-- Блок фото -->

  <section class="photo">
    <div class="wrapper">

      <img src="../../src/assets/cours/photoA1.svg" alt="">

    </div>
  </section>

  <!-- Блок приоритетов -->



  <div class="wrapper">
    <priorities/>
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

    <button @click="openModal" type="button">Записаться на курс</button>

  </section>

  <!-- Модальное окно с банковской картой -->

  <bank-card :isOpen="isModalOpen.value"/>

  <!-- Блок содержание курса -->

  <div class="wrapper">
    <section class="content">

      <div class="content_left">
        <h3>Содержание курса</h3>
        <p>Основы грамматики: алфавит, простые времена, основные части речи.
          Базовая лексика: числа, цвета, дни недели, месяцы, еда, одежда и т.д.
          Устная практика: диалоги на темы повседневной жизни, ролевые игры.
          Чтение: короткие тексты, адаптированные материалы, упражнения по чтению и пониманию текста.
          Письмо: написание коротких сообщений, эссе, заполнение форм.</p>
        <div class="txtcontent">
          <p id="term">Срок обучения:
            1 год</p>
          <p id="mode">Режим занятий:
            2 раза в неделю по 2 академических часа</p>
        </div>
        <h4>от 4 350 ₽ в месяц</h4>
        <button type="submit">Записаться на пробное занятие</button>
      </div>

      <div class="content_right">
        <img src="../../src/assets/cours/rabbit2.svg" alt="">
      </div>

    </section>
  </div>

  <!-- Блок преподавателей -->

  <section class="teachers">
    <div class="wrapper">

      <h3>Наши преподаватели</h3>

      <div class="cards">
        <teacher
        :teachers_info="teachers"
        />
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
          <p>Этот курс идеально подходит для тех, кто только начинает изучать английский язык и хочет быстро и
            эффективно овладеть базовыми навыками чтения, письма, устной и письменной коммуникации.</p>
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
            <li>На нашем сайте: Полный график уроков доступен в разделе "Расписание". Здесь вы найдете дни и время
              занятий для разных групп.
            </li>
            <li>В личном кабинете: Зарегистрируйтесь и войдите в личный кабинет на сайте, чтобы получить доступ к
              расписанию студента, а также уведомления о возможных изменениях.
            </li>
            <li>Через администратора: Вы можете связаться с нашим администратором по телефону или электронной почте для
              получения подробной информации о расписании.
            </li>
            <li>На первом занятии: Учитель представит полное расписание занятий и расскажет о всех предстоящих уроках и
              мероприятиях.
            </li>
          </ul>
        </details>
        <details>
          <summary>Что делать, если пропустил занятие?</summary>
          <ul>
            <li>Просмотреть записи уроков, доступные в личном кабинете.</li>
            <li>Обратиться к преподавателю за дополнительными материалами и заданиями для самостоятельного изучения
              пропущенного материала.
            </li>
            <li>Выполните домашние задания: Важно, чтобы ребенок выполнил все домашние задания, которые задавались на
              пропущенном занятии.
            </li>
            <li>Посетите дополнительные консультации: При необходимости учитель может предложить индивидуальные
              консультации для восполнения пропущенного материала.
            </li>
          </ul>
        </details>
      </div>
    </div>

  </div>

  <!-- FOOTER -->

  <footer>
    <div class="wrapper">
      <div class="info_f">
        <img src="../../src/assets/main/logo_white.svg">
        <p>8 800 555-35-35</p>
        <p>г. Владивосток, ул. Жигура, д. 26</p>
        <p>English_Expert@mail.ru</p>
        <p>© English Expert</p>
      </div>

    </div>
  </footer>
</template>

<style scoped>
body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

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

/* Адаптив header */

@media (max-width: 1000px) {

  .wrapper{
    width: 100%;
    max-width: 600px;
  }

  header {
    flex-direction: row;
    justify-content: space-between;
    position: relative; /* Добавляем позиционирование для родительского header */
  }

  .menu-toggle {
    display: block; /* Показываем кнопку меню */
    cursor: pointer;
  }

  .menu {
    display: none; /* Скрываем основное меню */
    position: absolute;
    top: calc(100% + 10px); /* Меню будет располагаться под кнопкой с отступом 10px */
    right: 0;
    left: 0;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    text-align: center; /* Центрируем элементы внутри меню */
  }

  .menu a {
    display: block;
    padding: 10px 20px;
    text-decoration: none;
    color: black;
    font-size: 14px;
  }

  .menu a:hover {
    background-color: #f0f0f0;
  }

  .menu input {
    max-width: initial; /* Вернуть изначальную ширину для поля ввода */
  }

  .menu.active {
    display: block; /* Показываем меню при активации */
  }
}

/* Скрытие иконки меню при разрешении больше 900px */
@media (min-width: 1000px) {
  .menu-toggle {
    display: none;
  }
}

/* Блок Уровня */

#levelA1 img {
  content: url('../../src/assets/cours/levelA1.svg');
  width: 100%;
}

#levelA2 img {
  content: url('../../src/assets/cours/levelA2.svg');
  width: 100%;
}

#levelB1 img {
  content: url('../../src/assets/cours/levelB1.svg');
  width: 100%;
}

#levelB2 img {
  content: url('../../src/assets/cours/levelB2.svg');
  width: 100%;
}

#levelC1 img {
  content: url('../../src/assets/cours/levelC1.svg');
  width: 100%;
}

#levelC2 img {
  content: url('../../src/assets/cours/levelC2.svg');
  width: 100%;
}

#levelpurpose img {
  content: url('../../src/assets/cours/levelpurpose.svg');
  width: 100%;
}

#levelwork img {
  content: url('../../src/assets/cours/levelwork.svg');
  width: 100%;
}

/* Адаптив блока уровня */

@media (max-width: 1000px) {
  #levelA1 img {
    content: url('../../src/assets/cours/levelA1_small.svg');
    width: 100%;
  }

  #levelA2 img {
    content: url('../../src/assets/cours/levelA2_small.svg');
    width: 100%;
  }

  #levelB1 img {
    content: url('../../src/assets/cours/levelB1_small.svg');
    width: 100%;
  }

  #levelB2 img {
    content: url('../../src/assets/cours/levelB2_small.svg');
    width: 100%;
  }

  #levelC1 img {
    content: url('../../src/assets/cours/levelC1_small.svg');
    width: 100%;
  }

  #levelC2 img {
    content: url('../../src/assets/cours/levelC2_small.svg');
    width: 100%;
  }

  #levelpurpose img {
    content: url('../../src/assets/cours/levelpurposes_small.svg');
    width: 100%;
  }

  #levelwork img {
    content: url('../../src/assets/cours/levelwork_small.svg');
    width: 100%;
  }

}

/* Блок целей */

.purposes{
  display: flex;
  width: 100%;
  margin-top: 5%;
}

.purposes_left{
  padding-right: 7%;
}

.purposes_right{
  display: flex;
  justify-content: space-between;
}

.purposes_card{
  width: 11rem;
  margin-right: 1%;
  margin-left: 1%;
}

.purposes_card h3{
  font-family: bold;
  font-size: 1.5rem;
}

.purposes_card p{
  font-family: regular;
  font-size: 0.88rem;
}

/* Адаптив блока целей */

@media (max-width: 1000px) {

  .purposes{
    flex-direction: column;
  }

  .purposes_right{
    margin-top: 5%;
    width: 100%;
  }

}

/* Адаптив блока фото */

@media (max-width: 1000px) {

  .photo img{
    width: 100%;
  }

}

/* Блок преимуществ */

.benefits {
  width: 100%;
  height: 19.38rem;
  background-image: url('../../src/assets/cours/subtract.svg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  display: flex;
  flex-direction: column;
  margin-top: 5%;
}

.txt {
  display: flex;
  justify-content: space-between;
  margin-top: 2%;
  margin-bottom: 1rem;
}

.txt p {
  font-family: regular;
  font-size: 1.13rem;
  color: white;
  width: 28.63rem;
}

button[type="button"], button[type="submit"] {
  margin-top: 1rem;
  padding: 10px 20px;
  font-size: 0.88rem;
  width: 11.94rem;
  height: 3.13rem;
  cursor: pointer;
  background-color: rgba(247, 148, 29, 1.00);
  color: white;
  border: none;
  border-radius: 10px;
  transition: background-color 0.3s ease;
  align-self: center;
}

button[type="button"]:hover,button[type="submit"]:hover {
  background-color: rgb(218, 120, 0);
}

/* Блок содержание курса */

.content{
  display: flex;
  justify-content: space-between;
}

.content_left{
  margin-right: 3%;
}

.content_right{
  margin-left: 3%;
}

.content_left h3, .content_left h4{
  font-family: bold;
}

.content_left h3{
  font-size: 2.25rem;
}

.content_left p{
  font-family: regular;
  font-size: 1.13rem;
}

.content_left button{
  width: 17.69rem;
}

.txtcontent{
  display: flex;
  justify-content: space-between;
  width: 28.63rem;
}

.txtcontent p{
  font-family: regular;
  font-size: 0.88rem;
}

#term{
  width: 7.44rem;
}

#mode{
  width: 19.31rem;
}

.content_left h4{
  font-size: 1.75rem;
}

.content_right{
  margin-top: auto;
  margin-bottom: auto;
}

/* Адаптив блока содержание курса */

@media (max-width: 1000px) {

  .content{
    flex-direction: column;
  }

  .content_right{
    margin-top: 5%;
  }
}


/* Блок преподавателей */

.teachers{
  width: 100%;
  height: 37.5rem;
  background-image: url('../../src/assets/cours/teacher_background.svg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  margin-top: 5%;
}

.teachers h3{
  font-family: bold;
  font-size: 2.25rem;
  text-align: center;
  color: white;
  margin-bottom: 6%;
}

.cards{
  display: flex;
  justify-content: space-between;
}

.card{
  width: 17.5rem;
  height: 22.5rem;
  background-color: white;
  border-radius: 20px;
  display: flex;
  flex-direction: column; /* Выстраиваем элементы по вертикали */
  justify-content: center; /* Центрируем по вертикали */
  align-items: center; /* Центрируем по горизонтали */
  text-align: center;
}

.card p{
  font-family: medium;
  font-size: 0.88rem;
  padding: 1%;
}

.card h3{
  font-family: bold;
  font-size: 1.13rem;
  color: black;
}

/* адаптив блока преподавателей */

@media (max-width: 1000px) {

  .teachers{
    height: 100%;
  }

  .cards{
    flex-direction: column;
    align-items: center;
  }

  .card{
    margin-bottom: 5%;
  }

}

/*  Блок найди ответ */

.container {
  width: 100%;
  margin-top: 5%
}

.container h1{
  font-family: bold;
  font-size: 1.75rem;
}

.faq-section {
  margin: 20px 0;
}

details {
  border: 1px solid transparent;
  border-radius: 5px;
  padding: 15px;
  background: #fff;
  margin-bottom: 10px;
  position: relative;
  box-shadow: 0 0 10px rgba(39, 170, 225, 0.3), 0 0 10px rgba(247, 148, 29, 0.3);
  transition: box-shadow 0.3s ease;
}

details::before {
  -webkit-mask: linear-gradient(#fff 0 0) padding-box,
  linear-gradient(#fff 0 0);
  mask: linear-gradient(#fff 0 0) padding-box,
  linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
}


summary {
  font-size: 1.13rem;
  font-family: medium;
  font-weight: bold;
  cursor: pointer;
  list-style: none;
}

details summary::after {
  content: url('../../src/assets/cours/stick1.svg');
  float: right;
}

details[open] summary::after {
  content: url('../../src/assets/cours/stick2.svg');
}

details ul,p {
  margin: 10px 0 0;
  font-family: regular;
  font-size: 0.88rem;
}

details[open] {
  box-shadow: 0 0 15px rgba(247, 148, 29, 0.5), 0 0 15px rgba(39, 170, 225, 0.5);
}

/* FOOTER */

footer {
  display: flex;
  flex-direction: row;
  background-color: rgb(0, 9, 60);
  color: #fff;
  text-align: center;
  padding: 20px;
  margin-top: 5%;
}

.info_f{
  display: flex;
  justify-content: space-between;
  align-items:end;
}

.info_f p{
  font-family: medium;
  font-size: 0.88rem;
}

/* Адаптив footer */

@media (max-width: 1000px) {

  .info_f{
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    align-items:center;
  }

}

/* Модальное окно */


</style>