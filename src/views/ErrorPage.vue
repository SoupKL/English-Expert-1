<template>
  <div class="error-page">
    <div class="error-content">
      <div class="error-icon">
        <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="url(#gradient)" stroke-width="2"/>
          <path d="M15 9L9 15M9 9L15 15" stroke="url(#gradient)" stroke-width="2" stroke-linecap="round"/>
          <defs>
            <linearGradient id="gradient" x1="2" y1="2" x2="22" y2="22" gradientUnits="userSpaceOnUse">
              <stop offset="0%" stop-color="rgb(247, 148, 29)"/>
              <stop offset="100%" stop-color="rgb(39, 170, 225)"/>
            </linearGradient>
          </defs>
        </svg>
      </div>
      <h1>Ошибка загрузки</h1>
      <h2>Не удалось получить данные</h2>
      <p>К сожалению, произошла ошибка при загрузке данных. Пожалуйста, попробуйте обновить страницу или вернуться позже.</p>
      <div class="button-group">
        <button @click="refreshPage" class="refresh-button">
          Обновить страницу
        </button>
        <router-link to="/" class="home-button">
          Вернуться на главную
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ErrorPage',
  methods: {
    refreshPage() {
      window.location.reload()
    }
  }
}
</script>

<style lang="scss" scoped>
$main-gradient: linear-gradient(45deg, rgb(247, 148, 29), rgb(39, 170, 225));
$main-gradient-hover: linear-gradient(45deg, rgb(39, 170, 225), rgb(247, 148, 29));
$main-blue: rgb(0, 9, 60);
$main-white: #fff;

.error-page {
  min-height: 57.5vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, rgba(0, 9, 60, 0.05), rgba(39, 170, 225, 0.1));
  padding: 20px;
}

.error-content {
  text-align: center;
  max-width: 600px;
  padding: 40px;
  background: $main-white;
  border-radius: 20px;
  box-shadow: 0 15px 25px -10px rgba(39, 170, 225, 0.5),
              0 -15px 25px -10px rgba(247, 148, 29, 0.5);
  animation: fadeIn 0.5s ease-out;

  .error-icon {
    margin-bottom: 20px;
    animation: pulse 2s infinite;
  }

  h1 {
    font-size: 36px;
    margin: 0;
    background: $main-gradient;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-family: bold;
    line-height: 1;
  }

  h2 {
    font-size: 24px;
    color: $main-blue;
    margin: 15px 0;
    font-family: medium;
  }

  p {
    font-size: 16px;
    color: #666;
    margin-bottom: 30px;
    font-family: regular;
    line-height: 1.5;
  }

  .button-group {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;

    .refresh-button, .home-button {
      display: inline-block;
      padding: 12px 30px;
      background: $main-gradient;
      color: $main-white;
      text-decoration: none;
      border-radius: 10px;
      font-family: medium;
      font-size: 16px;
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;

      &:hover {
        background: $main-gradient-hover;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(39, 170, 225, 0.3);
      }
    }
  }
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes pulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.05);
  }
  100% {
    transform: scale(1);
  }
}

@media (max-width: 768px) {
  .error-content {
    padding: 30px;
    
    h1 {
      font-size: 28px;
    }

    h2 {
      font-size: 20px;
    }

    p {
      font-size: 14px;
    }

    .button-group {
      flex-direction: column;
      gap: 10px;

      .refresh-button, .home-button {
        width: 100%;
        padding: 10px 25px;
        font-size: 14px;
      }
    }
  }
}

@media (max-width: 480px) {
  .error-content {
    padding: 20px;
    
    h1 {
      font-size: 24px;
    }

    h2 {
      font-size: 18px;
    }

    p {
      font-size: 14px;
    }
  }
}
</style> 