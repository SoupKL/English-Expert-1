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
import Loading from "@/components/loading/loading.vue";


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
  components: {BankCard, Teacher, Priorities, Pruposes, Offers, Loading},
  directives: {
    mask: VueMask.VueMaskDirective,
  },
  setup() {
    const group = window.location.href.split('/')[4];
    const isLoading = ref(true);
    const datePage = ref(null);
    const purposesInfo = ref([]);
    const textGrout = ref([])

    onMounted(async () => {
      try {
        const response = await fetch(`http://127.0.0.1:8000/api/cures-info/${group}`);
        const data = await response.json();

        datePage.value = data;
        purposesInfo.value = data.purposesInfo.split('"').filter((element) => element !== '[' && element !== ', ' && element !== ']');

        textGrout.value = data.textGrout.split('"').filter((element) => element !== '[' && element !== ', ' && element !== ']');
      } catch (error) {
        console.error('Error fetching course data:', error);
      } finally {
        isLoading.value = false;
      }
    });

    const firstImg = '../../src/assets/cours/level' + group.toUpperCase() + '.svg';
    const secondImg = '../../src/assets/cours/photo' + group.toUpperCase() + '.svg';
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

    const teachers = [
      {
        "img": "../../src/assets/cours/comment1.svg",
        "name": "Анна Морозова",
        "text": "Изысканная мотиваторша с глубоким\n" +
            "                    пониманием языка"
      },
      {
        "img": "../../src/assets/cours/comment2.svg",
        "name": "Иван Белов",
        "text": "Энергичный языковед с богатым\n" +
            "                    опытом преподавания"
      },
      {
        "img": "../../src/assets/cours/comment3.svg",
        "name": "Елена Николаева",
        "text": "Терпеливая и креативная педагог,\n" +
            "                    способная адаптироваться к нуждам каждого ученика"
      },
      {
        "img": "../../src/assets/cours/comment4.svg",
        "name": "Дмитрий Ковалев",
        "text": "Заботливый и инновационный учитель,\n" +
            "                    вдохновляющий на достижение лучших результатов"
      }
    ];
    // const textGrout = {
    //   'a1': [
    //     'алфавит, простые времена, основные части речи.',
    //     'числа, цвета, дни недели, месяцы, еда, одежда и т.д.',
    //     'диалоги на темы повседневной жизни, ролевые игры.',
    //     'короткие тексты, адаптированные материалы, упражнения по чтению и пониманию текста.',
    //     'написание коротких сообщений, эссе, заполнение форм.',
    //     '',
    //   ],
    //   'a2': [
    //     'сложные времена, согласование времен, предлоги, более сложные части речи.',
    //     'профессии, транспорт, здоровье, погода и т.д.',
    //     'диалоги на темы повседневной жизни, ролевые игры.',
    //     'тексты средней длины, адаптированные материалы, упражнения по чтению и пониманию текста.',
    //     'написание писем, эссе, заполнение форм.'
    //   ],
    //   'b1': [
    //     'условные предложения, страдательный залог, модальные глаголы.',
    //     'экономика, культура, спорт, технологии и т.д.',
    //     'обсуждение новостей, презентации, дебаты.',
    //     'статьи, рассказы, учебные материалы.',
    //     'написание эссе, отчётов, официальных писем.'
    //   ],
    //   'b2': [
    //     'сложные времена, фразовые глаголы, идиомы.',
    //     'юриспруденция, медицина, инженерия, философия и т.д.',
    //     'дебаты, презентации, переговоры.',
    //     'научные статьи, литературные произведения, документы.',
    //     'написание диссертаций, статей, обзоров.'
    //   ],
    //   'c1': [
    //     'сложные конструкции, согласование времён, условные предложения второго и третьего типа.',
    //     'бизнес, наука, политика, экология и т.д.',
    //     'дискуссии, переговоры, публичные выступления.',
    //     'статьи, научные работы, книги.',
    //     'написание исследований, отчётов, проектов.'
    //   ],
    //   'c2': [
    //     'все аспекты языка на уровне носителя.',
    //     'специализированные области (наука, техника, искусство и т.д.).',
    //     'сложные дискуссии, лекции, презентации.',
    //     'сложные литературные и научные тексты.',
    //     'написание высококачественных научных и профессиональных текстов.'
    //   ],
    // }

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
      document.getElementById("cardNumber");
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
      purposesInfo,
      teachers,
      openModal,
      closeModal,
      flipCard,
      focusInput,
      blurInput,
      firstImg,
      secondImg,
      textGrout,
      group,
      datePage,
      isLoading
    };
  },
};


</script>

<template>
  <Loading v-if="isLoading"/>
  <div v-else-if="!datePage" class="error">
    Не удалось загрузить данные
  </div>
  <!-- Блок Уровень А1 -->

  <div v-else>
    <section class="level">

      <div class="card_level" id="levelA1">
        <img :src="firstImg" alt="">
      </div>

    </section>

    <!-- Блок целей -->

    <div class="wrapper">
      <pruposes
          :text-pruposes1="purposesInfo">
      </pruposes>
    </div>

    <!-- Блок фото -->

    <section class="photo">
      <div class="wrapper">

        <img :src="secondImg" alt="">

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
      <button onclick="alert('Упс... Что то пошло не так')" @click="openModal" type="button">Записаться на курс</button>
    </section>

    <!-- Модальное окно с банковской картой -->

    <bank-card :isOpen="isModalOpen.value"/>

    <!-- Блок содержание курса -->

    <div class="wrapper">
      <section class="content">

        <div class="content_left">
          <h3>Содержание курса</h3>
          <p>Грамматика: {{ textGrout[0] }}<br><br>
            Лексика: {{ textGrout[1] }}<br><br>
            Устная практика: {{ textGrout[2] }}<br><br>
            Чтение: {{ textGrout[3] }}<br><br>
            Письмо: {{ textGrout[4] }}<br><br>
          </p>
          <div class="txtcontent">
            <p id="term">Срок обучения:
              1 год</p>
            <p id="mode">Режим занятий:
              2 раза в неделю по 2 академических часа</p>
          </div>
          <h4>от 4 350 ₽ в месяц</h4>
          <button @click="console.log(datePage)" type="submit">Записаться на пробное занятие</button>
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
              <li>Через администратора: Вы можете связаться с нашим администратором по телефону или электронной почте
                для
                получения подробной информации о расписании.
              </li>
              <li>На первом занятии: Учитель представит полное расписание занятий и расскажет о всех предстоящих уроках
                и
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
  </div>
</template>

<style lang="scss" scoped>
$main-radius: 20px;
$main-bg: #fff;
$main-blue: rgb(0, 9, 60);
$main-orange: rgb(247, 148, 29);
$main-shadow: 0 0 20px rgba(39, 170, 225, 0.5), 0 0 20px rgba(247, 148, 29, 0.5);
$main-form-bg: #bebebe;
$main-form-radius: 4px;
$main-form-font: regular;
$main-form-font-bold: bold;
$main-form-font-medium: medium;
$main-form-btn-bg: rgb(247, 148, 29);
$main-form-btn-color: #fff;

.loading, .error {
  text-align: center;
  padding: 2rem;
  font-size: 1.2rem;
  font-family: regular;
}

.loading {
  color: #27AAE1;
}

.error {
  color: #F7941D;
}

/* Адаптив блока уровня */

@media (max-width: 1000px) {


}

/* Блок целей */

.purposes {
  display: flex;
  width: 100%;
  margin-top: 5%;

  .purposes_left {
    padding-right: 7%;
  }

  .purposes_right {
    display: flex;
    justify-content: space-between;

    .purposes_card {
      width: 11rem;
      margin-right: 1%;
      margin-left: 1%;

.purposes_card h3 {
  font-family: bold;
  font-size: 1.5rem;
}

      p {
        font-family: regular;
        font-size: 0.88rem;
      }
    }
  }

  @media (max-width: 1000px) {
    flex-direction: column;

    .purposes_right {
      margin-top: 5%;
      width: 100%;
    }
  }
}

.photo {
  @media (max-width: 1000px) {
    img {
      width: 100%;
    }
  }
}

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

  .txt {
    display: flex;
    justify-content: space-between;
    margin-top: 2%;
    margin-bottom: 1rem;

    p {
      font-family: regular;
      font-size: 1.13rem;
      color: white;
      width: 28.63rem;
    }
  }

  button[type="button"], button[type="submit"] {
    margin-top: 1rem;
    padding: 10px 20px;
    font-size: 0.88rem;
    width: 11.94rem;
    height: 3.13rem;
    cursor: pointer;
    background-color: $main-orange;
    color: white;
    border: none;
    border-radius: 10px;
    transition: background-color 0.3s ease;
    align-self: center;

    &:hover {
      background-color: rgb(218, 120, 0);
    }
  }
}

.content {
  display: flex;
  justify-content: space-between;

  .content_left {
    margin-right: 3%;

    h3, h4 {
      font-family: bold;
    }

    h3 {
      font-size: 2.25rem;
    }

    p {
      font-family: regular;
      font-size: 1.13rem;
    }

    button {
      width: 17.69rem;
    }

    .txtcontent {
      display: flex;
      justify-content: space-between;
      width: 28.63rem;

      p {
        font-family: regular;
        font-size: 0.88rem;
      }

      #term {
        width: 7.44rem;
      }

      #mode {
        width: 19.31rem;
      }
    }

    h4 {
      font-size: 1.75rem;
    }
  }

  .content_right {
    margin-left: 3%;
    margin-top: auto;
    margin-bottom: auto;
  }

  @media (max-width: 1000px) {
    flex-direction: column;

    .content_right {
      margin-top: 5%;
    }
  }
}

.teachers {
  width: 100%;
  height: 37.5rem;
  background-image: url('../../src/assets/cours/teacher_background.svg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  margin-top: 5%;

  h3 {
    font-family: bold;
    font-size: 2.25rem;
    text-align: center;
    color: white;
    margin-bottom: 6%;
  }

  .cards {
    display: flex;
    justify-content: space-between;

    .card {
      width: 17.5rem;
      height: 22.5rem;
      background-color: white;
      border-radius: $main-radius;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;

      p {
        font-family: medium;
        font-size: 0.88rem;
        padding: 1%;
      }

      h3 {
        font-family: bold;
        font-size: 1.13rem;
        color: black;
      }
    }

    @media (max-width: 1000px) {
      flex-direction: column;
      align-items: center;

      .card {
        margin-bottom: 5%;
      }
    }
  }
}

.container {
  width: 100%;
  margin-top: 5%;

  h1 {
    font-family: bold;
    font-size: 1.75rem;
  }

  .faq-section {
    margin: 20px 0;

    details {
      border: 1px solid transparent;
      border-radius: 5px;
      padding: 15px;
      background: #fff;
      margin-bottom: 10px;
      position: relative;
      box-shadow: 0 0 10px rgba(39, 170, 225, 0.3), 0 0 10px rgba(247, 148, 29, 0.3);
      transition: box-shadow 0.3s ease;

      &::before {
        -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
      }

      summary {
        font-size: 1.13rem;
        font-family: medium;
        font-weight: bold;
        cursor: pointer;
        list-style: none;

        &::after {
          content: url('../../src/assets/cours/stick1.svg');
          float: right;
        }
      }

      &[open] summary::after {
        content: url('../../src/assets/cours/stick2.svg');
      }

      ul, p {
        margin: 10px 0 0;
        font-family: regular;
        font-size: 0.88rem;
      }

      &[open] {
        box-shadow: 0 0 15px rgba(247, 148, 29, 0.5), 0 0 15px rgba(39, 170, 225, 0.5);
      }
    }
  }
}
</style>