<template>
  <div class="not-found">
    <div class="not-found-content">
      <h1>404</h1>
      <h2>Страница не найдена</h2>
      <p>Извините, но страница, которую вы ищете, не существует.</p>
      <router-link to="/" class="home-button">
        Вернуться на главную
      </router-link>
    </div>
  </div>
</template>

<script>
export default {
  name: 'NotFound'
}
</script>

<style lang="scss" scoped>
$main-gradient: linear-gradient(45deg, rgb(247, 148, 29), rgb(39, 170, 225));
$main-gradient-hover: linear-gradient(45deg, rgb(39, 170, 225), rgb(247, 148, 29));
$main-blue: rgb(0, 9, 60);
$main-white: #fff;

.not-found {
  min-height: 57.5vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, rgba(0, 9, 60, 0.05), rgba(39, 170, 225, 0.1));
  padding: 20px;
}

.not-found-content {
  text-align: center;
  max-width: 600px;
  padding: 40px;
  background: $main-white;
  border-radius: 20px;
  box-shadow: 0 15px 25px -10px rgba(39, 170, 225, 0.5),
              0 -15px 25px -10px rgba(247, 148, 29, 0.5);
  animation: fadeIn 0.5s ease-out;

  h1 {
    font-size: 120px;
    margin: 0;
    background: $main-gradient;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-family: bold;
    line-height: 1;
  }

  h2 {
    font-size: 32px;
    color: $main-blue;
    margin: 20px 0;
    font-family: medium;
  }

  p {
    font-size: 18px;
    color: #666;
    margin-bottom: 30px;
    font-family: regular;
  }

  .home-button {
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

@media (max-width: 768px) {
  .not-found-content {
    padding: 30px;
    
    h1 {
      font-size: 80px;
    }

    h2 {
      font-size: 24px;
    }

    p {
      font-size: 16px;
    }

    .home-button {
      padding: 10px 25px;
      font-size: 14px;
    }
  }
}

@media (max-width: 480px) {
  .not-found-content {
    padding: 20px;
    
    h1 {
      font-size: 60px;
    }

    h2 {
      font-size: 20px;
    }

    p {
      font-size: 14px;
    }
  }
}
</style> 