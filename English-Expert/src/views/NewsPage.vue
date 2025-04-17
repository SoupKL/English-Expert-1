<script>
export default {
  setup() {
	const newsFirst = {
	  title: 'Онлайн Турнир по Английскому:\n' +
		  '          Призы для Победителей!',
	  date: '16 ноября 2024',
	  description: 'Участвуйте в нашем онлайн турнире по\n' +
		  '          английскому и выигрывайте призы. Регистрация открыта!',
	  textHead: 'Детали турнира:',
	  textBody1: 'Категории и Задания: Турнир включает разнообразные категории\n' +
		  '          заданий, которые покрывают широкий спектр английской грамматики\n' +
		  '          и лексики. Участники будут выполнять задания, специально разработанные\n' +
		  '          для проверки их знаний и умений в языке.',
	  textBody2: 'Призы: Лучшие участники будут вознаграждены ценными призами, подарками\n' +
		  '          и сертификатами от English Expert. Это отличная мотивация для тех, кто\n' +
		  '          стремится улучшить свои языковые навыки и достичь новых высот в изучении\n' +
		  '          английского.',
	  textBody3: 'Условия участия: Регистрация открыта на нашем сайте. Участие в турнире\n' +
		  '          бесплатное и открыто для всех желающих. Просто зарегистрируйтесь, чтобы\n' +
		  '          получить доступ к заданиям и принять участие в захватывающем соревновании.',
	  textBody4: 'Не упустите шанс проверить свои знания, соревнуясь с другими студентами и\n' +
		  '          возможностью выиграть великолепные призы! Регистрируйтесь сегодня и готовьтесь\n' +
		  '          к захватывающему английскому приключению с English Expert!',
	};

	return {
	  newsFirst
	};
  }
}

</script>

<template>
  <div class="news_wrapper">

    <div class="pagination">
      <a href="./all_news.html">Все новости</a>
    </div>



      <div class="container_txt">
        <h3 class="news-title">{{ newsFirst.title }}</h3>
        <span class="news-date">{{ newsFirst.date }}</span>
        <p class="news-description">{{ newsFirst.description }}</p>
      </div>

      <img src="../../src/assets/all_news/new1.svg" alt="">

      <div class="txt">
        <p>{{ newsFirst.textHead }}</p>
        <p>{{ newsFirst.textBody1 }}</p>

        <p>{{ newsFirst.textBody2 }}</p>

        <p>{{ newsFirst.textBody3 }}</p>

        <p>{{ newsFirst.textBody4 }}</p></div>
    </div>


</template>

<style lang="scss" scoped>
$main-width: 1180px;
$main-padding: 20px;
$main-title-size: 2.25rem;
$main-title-size-mobile: 1.5rem;
$main-desc-size: 1.13rem;
$main-desc-size-mobile: 0.8rem;
$main-date-size: 0.75rem;
$main-link-color: rgb(109, 109, 109);
$main-black: rgb(0, 0, 0);

.news_wrapper {
  width: 100%;
  max-width: $main-width;
  margin: 0 auto;
  padding: $main-padding;

  .pagination {
    a {
      text-decoration: none;
      color: $main-link-color;
      font-family: medium;
      font-size: 0.95rem;
    }
  }

  .container_txt {
    .news-title {
      font-family: bold;
      font-size: $main-title-size;
      color: $main-black;
      @media (max-width: 1000px) {
        font-size: $main-title-size-mobile;
      }
    }

    .news-date {
      font-family: regular;
      font-size: $main-date-size;
      color: $main-black;
    }

    .news-description {
      font-family: regular;
      font-size: $main-desc-size;
      color: $main-black;
    }
  }

  img {
    @media (max-width: 1000px) {
      width: 100%;
    }
  }

  .txt {
    font-family: regular;
    font-size: $main-desc-size;
    color: $main-black;
    line-height: 26px;

    @media (max-width: 1000px) {
      font-size: $main-desc-size-mobile;
    }
  }
}
</style>