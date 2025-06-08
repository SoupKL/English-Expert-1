<template>
  <div class="wrapper">

	<main>
	  <section class="events">
		<h1>Все мероприятия</h1>

		<div class="card-info">
		  <div class="cardtxt">
			<img src="../../src/assets/all_events/25.svg" class="date-image">
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
			  <img src="../../src/assets/all_events/club.svg">
			  <h3>Разговорный Клуб: Практика с Носителями Языка</h3>
			</div>
			<p>Улучшайте свою английскую речь, общаясь с носителями языка. Еженедельные
			  встречи с новыми темами для обсуждения помогут преодолеть языковой барьер
			  и получить ценные советы от опытных преподавателей.</p>
		  </div>

		  <div class="event2" id="webinars">
			<div class="cardtxt2">
			  <img src="../../src/assets/all_events/comp.svg">
			  <h3>Интерактивные Вебинары по Грамматике</h3>
			</div>
			<p>Углубите свои знания грамматики с помощью наших вебинаров. Разбор сложных
			  тем, интерактивные задания и практика с опытными преподавателями помогут
			  вам уверенно использовать английский язык.</p>
		  </div>

		  <div class="event2" id="travel-english">
			<div class="cardtxt2">
			  <img src="../../src/assets/all_events/map.svg" alt="">
			  <h3>Курс "Английский для Путешественников"</h3>
			</div>
			<p>Планируете путешествие за границу? Наш курс поможет вам освоить английский
			  язык, необходимый для общения в поездках: от бронирования отелей до разговоров
			  с местными жителями.</p>
		  </div>

		</div>

		<div class="events3">

		  <div class="event3" id="literature-evenings">
			<img src="../../src/assets/all_events/literature.svg" alt="">
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
			  <img src="../../src/assets/all_events/video.svg" alt="">
			  <h3>Онлайн-курс "Английский через фильмы"</h3>
			</div>
			<p>Учите английский язык, просматривая популярные фильмы и сериалы. Анализ диалогов,
			  изучение идиом и сленга, практика восприятия речи на слух помогут вам лучше
			  понимать носителей языка и говорить свободно.</p>
		  </div>
		  <div class="event4" id="everyday-english">
			<div class="cardtxt4">
			  <img src="../../src/assets/all_events/letter.svg" alt="">
			  <h3>Курс "Письменный английский для повседневной жизни"</h3>
			</div>
			<p>Научитесь писать на английском языке так же легко, как на родном. Упражнения и
			  практика письма помогут вам освоить навыки ведения переписки, написания эссе
			  и деловых писем.</p>
		  </div>
		  <div class="event4" id="writing-workshop">
			<div class="cardtxt4">
			  <img src="../../src/assets/all_events/pan.svg" alt="">
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
	<rabbit-helper/>
</template>

<style lang="scss" scoped>
$main-radius: 20px;
$main-bg: #fff;
$main-blue: rgb(0, 9, 60);
$main-orange: rgb(247, 148, 29);
$main-form-bg: #bebebe;
$main-form-radius: 4px;
$main-form-font: regular;
$main-form-font-bold: bold;
$main-form-font-medium: medium;
$main-form-btn-bg: rgb(247, 148, 29);
$main-form-btn-color: #fff;

h1 {
  font-family: $main-form-font-medium;
}

/* Блок мероприятий */
.events2, .events3, .events4 {
  display: flex;
}

.card-info {
  background-color: #f3a563;
  border-radius: 15px;
  height: 10rem;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;

  .cardtxt {
    display: flex;
    justify-content: space-around;
    width: 43.13rem;
    align-items: center;

    .date-image {
      margin-right: 20px;
      width: 100px;
      height: auto;
    }

    .info {
      text-align: left;
      line-height: 1.5rem;

      .title {
        font-size: 2.25em;
        font-family: $main-form-font-medium;
      }

      .description {
        font-size: 1.13em;
        line-height: 1.5;
        font-family: $main-form-font;
      }
    }
  }
}

.events2, .events4 {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  height: 13.75rem;
  margin-top: 3%;

  h3 {
    font-family: $main-form-font-medium;
    font-size: 1.13rem;
    color: $main-blue;
  }

  p {
    font-family: $main-form-font;
    font-size: 0.75rem;
    color: rgb(79, 79, 79);
  }
}

.event2, .event4 {
  width: 21rem;
  height: 15.63rem;
  justify-content: space-between;
  border-radius: $main-radius;
  padding: 2%;

  .cardtxt2, .cardtxt4 {
    display: flex;
    justify-content: space-between;

    img {
      margin-right: 5%;
    }
  }
}

#conversation-club { background-color: rgb(199, 238, 255); }
#webinars { background-color: rgb(255, 227, 142); }
#travel-english { background-color: rgb(221, 221, 255); }
#movies { background-color: rgb(197, 221, 255); }
#everyday-english { background-color: rgb(255, 238, 246); }
#writing-workshop { background-color: rgb(255, 206, 148); }

#literature-evenings {
  width: 48.75rem;
  height: 15.63rem;
  background-color: rgb(184, 239, 207);
  border-radius: $main-radius;
  display: flex;

  h3, p {
    padding-top: 5%;
    text-align: center;
  }
}

.events3 {
  justify-content: space-between;
  margin-top: 10%;
}

#games {
  background-image: url(../../src/assets/all_events/online.svg);
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  width: 23.75rem;
  height: 15.63rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;

  p, h3 {
    color: #fff;
  }
}

/* Адаптив блока мероприятий */
@media (max-width: 1000px) {
  .events {
    margin-bottom: 50%;
  }

  .info h1 {
    font-size: 1.5rem;
  }

  .info p {
    font-size: 0.88rem;
  }

  .events2 {
    flex-direction: column;
    align-items: center;
  }

  .event2 {
    margin-bottom: 5%;
  }

  .events3 {
    display: none;
  }

  .events4 {
    flex-direction: column;
    margin-top: 95%;
    align-items: center;
  }

  .event4 {
    margin-bottom: 5%;
  }
}

/* БЛОК ФОРМЫ */
.rabbit_helper {
  margin-top: 15%;
  width: 100%;
  border-radius: $main-radius;
  display: flex;
  background-color: $main-bg;
  position: relative;
  margin-bottom: -10%;
  z-index: 1;

  .rh_l, .rh_r {
    padding: 2%;
  }

  .rh_r {
    width: 27.5rem;
  }

  form {
    padding: 3%;

    .form-group {
      margin-bottom: 20px;

      &.full-width {
        width: 100%;
      }

      &.horizontal {
        display: flex;
        justify-content: space-between;
        width: 27.5rem;

        div {
          width: 13.13rem;
        }
      }

      &.vertical {
        display: flex;
        justify-content: space-between;
        width: 27.5rem;

        p {
          margin: 0;
          font-size: 0.63rem;
          width: 13.22rem;
        }

        button {
          font-size: 0.88rem;
          font-family: $main-form-font-bold;
          padding: 10px 20px;
          background-color: $main-form-btn-bg;
          color: $main-form-btn-color;
          border: none;
          border-radius: 10px;
          width: 13.22rem;
        }
      }

      input[type="text"],
      input[type="email"],
      input[type="phone"] {
        padding: 8px;
        border: none;
        background-color: $main-form-bg;
        border-radius: $main-form-radius;
        color: #4F4F4F;
        font-size: 0.88rem;
        font-family: $main-form-font;
        height: 3.13rem;
        width: 100%;
      }
    }
  }

  @media (max-width: 1000px) {
    margin-top: 40%;
    flex-direction: column;
    align-items: center;
    margin-bottom: 0%;

    .rh_l img {
      width: 90%;
    }

    .rh_l, .rh_r {
      width: 100%;
      padding: 0;
    }

    .rh_r {
      margin-top: 20px;
    }

    .form-group.horizontal {
      flex-direction: column;
      width: 105%;
    }

    .form-group.full-width {
      margin-bottom: 0%;
    }

    .form-group input[type="email"],
    .form-group input[type="phone"] {
      width: 565px;
      margin-top: 5%;
    }
  }
}
</style>
<script setup lang="ts">
import RabbitHelper from '@/components/rabbit/rabbit.vue';
</script>