<script setup>

</script>

<template>
  <div class="wrapper">
	<div class="rabbit_helper">
	  <div class="rh_l">
		<img src="../../../src/assets/main/rabbit2.svg" alt="кролик помощник нижний">
	  </div>
	  <div class="rh_r">

		<div class="form-group full-width">
		  <input type="text" id="name" name="name" placeholder="Ваше имя">
		</div>
		<div class="form-group horizontal">
		  <div>
			<input type="phone" id="phone" name="phone" placeholder="Ваш телефон">
		  </div>
		  <div>
			<input type="email" id="email" name="email" placeholder="Ваш e-mail">
		  </div>
		</div>
		<div class="form-group vertical">
		  <p>Нажимая на кнопку, я соглашаюсь на обработку персональных данных и с правилами пользования Платформой</p>
		  <button onclick="alert('Упс... Что то пошло не так')" type="submit">Отправить</button>
		</div>
	  </div>
	</div>
  </div>
</template>

<style lang="scss" scoped>
$rabbit-bg: #fff;
$rabbit-radius: 20px;
$rabbit-shadow: none;
$rabbit-form-font: regular;
$rabbit-form-font-bold: bold;
$rabbit-form-color: #4F4F4F;
$rabbit-form-bg: rgba(0, 9, 60, 0.1);
$rabbit-form-btn-bg: rgb(247, 148, 29);
$rabbit-form-btn-color: #fff;

.rabbit_helper {
  margin-top: 15%;
  width: 100%;
  border-radius: $rabbit-radius;
  display: flex;
  background-color: $rabbit-bg;
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
  }

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
        font-family: $rabbit-form-font-bold;
        padding: 10px 20px;
        background-color: $rabbit-form-btn-bg;
        color: $rabbit-form-btn-color;
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
      background-color: $rabbit-form-bg;
      border-radius: 4px;
      color: $rabbit-form-color;
      font-size: 0.88rem;
      font-family: $rabbit-form-font;
      height: 3.13rem;
      width: 100%;
    }
  }

  // Large tablets and small desktops
  @media (max-width: 1200px) {
    margin-top: 10%;
    margin-bottom: -5%;
    
    .rh_r {
      width: 25rem;
    }
    
    .form-group {
      &.horizontal,
      &.vertical {
        width: 25rem;
      }
    }
  }

  // Tablets
  @media (max-width: 992px) {
    margin-top: 8%;
    margin-bottom: -3%;
    
    .rh_r {
      width: 22rem;
    }
    
    .form-group {
      &.horizontal,
      &.vertical {
        width: 22rem;
      }
      
      &.horizontal div {
        width: 10.5rem;
      }
      
      &.vertical {
        p {
          width: 11rem;
        }
        
        button {
          width: 11rem;
        }
      }
    }
  }

  // Large phones
  @media (max-width: 768px) {
    margin-top: 5%;
    margin-bottom: 0;
    flex-direction: column;
    
    .rh_l {
      display: none;
    }
    
    .rh_r {
      width: 100%;
      padding: 20px;
    }

    .form-group {
      margin-bottom: 15px;

      &.horizontal {
        flex-direction: column;
        width: 100%;
        gap: 15px;

        div {
          width: 100%;
        }
      }

      &.vertical {
        flex-direction: column;
        width: 100%;
        gap: 15px;

        p {
          width: 100%;
          font-size: 0.7rem;
          text-align: center;
        }

        button {
          width: 100%;
          padding: 12px;
          font-size: 1rem;
        }
      }
    }
  }

  // Small phones
  @media (max-width: 430px) {
    .rh_r {
      padding: 15px;
    }

    .form-group {
      input[type="text"],
      input[type="email"],
      input[type="phone"] {
        height: 2.8rem;
        font-size: 0.9rem;
      }
    }
  }
}
</style>