<script>
import {ref, computed, onMounted, watchEffect} from 'vue';

export default {
	props: {
		isOpen: {
			type:    Boolean,
			default: false
		}
	},
	setup(props) {
		const currentCardBackground = ref(Math.floor(Math.random() * 25 + 1));
		const cardName              = ref("");
		const cardNumber            = ref("");
		const cardMonth             = ref("");
		const cardYear              = ref("");
		const cardCvv               = ref("");
		const minCardYear           = new Date().getFullYear();
		const amexCardMask          = "#### ###### #####";
		const otherCardMask         = "#### #### #### ####";
		const cardNumberTemp        = ref(otherCardMask);
		const isCardFlipped         = ref(false);
		const focusElementStyle     = ref(null);
		const isInputFocused        = ref(false);

		onMounted(() => {
			cardNumberTemp.value = otherCardMask;
			document.getElementById("cardNumber").focus();
		});

		const getCardType = computed(() => {
			const number = cardNumber.value;
			if (/^4/.test(number)) {
				return "visa";
			}
			if (/^(34|37)/.test(number)) {
				return "amex";
			}
			if (/^5[1-5]/.test(number)) {
				return "mastercard";
			}
			if (/^6011/.test(number)) {
				return "discover";
			}
			if (/^9792/.test(number)) {
				return "troy";
			}
			return "visa";
		});

		const generateCardNumberMask = computed(() => {
			return getCardType.value === "amex" ? amexCardMask : otherCardMask;
		});

		const minCardMonth = computed(() => {
			return cardYear.value === minCardYear ? new Date().getMonth() + 1 : 1;
		});

		watchEffect(() => {
			if (cardYear.value && cardMonth.value < minCardMonth.value) {
				cardMonth.value = "";
			}
		});

		const flipCard = (status) => {
			isCardFlipped.value = status;
		};

		const focusInput = (e) => {
			isInputFocused.value    = true;
			const targetRef         = e.target.dataset.ref;
			const target            = e.target.closest('.form-group').querySelector(`[data-ref="${targetRef}"]`);
			focusElementStyle.value = {
				width:     `${target.offsetWidth}px`,
				height:    `${target.offsetHeight}px`,
				transform: `translateX(${target.offsetLeft}px) translateY(${target.offsetTop}px)`
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
			getCardType,
			generateCardNumberMask,
			minCardMonth,
			flipCard,
			focusInput,
			blurInput
		};
	}
};
</script>

<template>
	<div class="wrapper">
		<div class="card-form">
			<!-- Модальное окно -->
			<div class="modal" :class="{ 'modal-open': isOpen }">
				<div class="modal-content">
					<!-- Кнопка для закрытия модального окна -->
					<span class="close" @click="closeModal">&times;</span>

					<!-- Форма кредитной карты -->
					<div class="card-list">
						<div class="card-item" v-bind:class="{ '-active' : isCardFlipped }">
							<div class="card-item__side -front">
								<div class="card-item__focus" v-bind:class="{'-active' : focusElementStyle }"
										 v-bind:style="focusElementStyle" ref="focusElement"></div>
								<div class="card-item__cover">
									<img
											v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master./src/assets/images/' + currentCardBackground + '.jpeg'"
											class="card-item__bg">
								</div>

								<div class="card-item__wrapper">
									<div class="card-item__top">
										<img
												src="https://raw.githubusercontent.com/muhammederdem/credit-card-form/master./src/assets/images/chip.png"
												class="card-item__chip">
										<div class="card-item__type">
											<transition name="slide-fade-up">
												<img
														v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master./src/assets/images/' + getCardType + '.png'"
														v-if="getCardType" v-bind:key="getCardType" alt="" class="card-item__typeImg">
											</transition>
										</div>
									</div>
									<label for="cardNumber" class="card-item__number" ref="cardNumber">
										<template v-if="getCardType === 'amex'">
                          <span v-for="(n, $index) in amexCardMask" :key="$index">
                            <transition name="slide-fade-up">
                              <div class="card-item__numberItem"
																	 v-if="$index > 4 && $index < 14 && cardNumber.length > $index && n.trim() !== ''">*</div>
                              <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" :key="$index"
																	 v-else-if="cardNumber.length > $index">
                                {{ cardNumber[$index] }}
                              </div>
                              <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" v-else
																	 :key="$index + 1">{{ n }}</div>
                            </transition>
                          </span>
										</template>

										<template v-else>
                          <span v-for="(n, $index) in otherCardMask" :key="$index">
                            <transition name="slide-fade-up">
                              <div class="card-item__numberItem"
																	 v-if="$index > 4 && $index < 15 && cardNumber.length > $index && n.trim() !== ''">*</div>
                              <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" :key="$index"
																	 v-else-if="cardNumber.length > $index">
                                {{ cardNumber[$index] }}
                              </div>
                              <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" v-else
																	 :key="$index + 1">{{ n }}</div>
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
                            <span
																class="card-item__nameItem"
																v-for="(n, $index) in cardName.replace(/\s\s+/g, ' ')"
																:v-if="$index === $index"
																v-bind:key="$index + 1">{{ n }}
                            </span>
													</transition-group>
												</div>
												<div class="card-item__name" v-else key="2">Полное Имя</div>
											</transition>
										</label>
										<div class="card-item__date" ref="cardDate">
											<label for="cardMonth" class="card-item__dateTitle">Истекает</label>
											<label for="cardMonth" class="card-item__dateItem">
												<transition name="slide-fade-up">
													<span v-if="cardMonth" v-bind:key="cardMonth">{{ cardMonth }}</span>
													<span v-else key="2">MM</span>
												</transition>
											</label>
											/
											<label for="cardYear" class="card-item__dateItem">
												<transition name="slide-fade-up">
													<span v-if="cardYear" v-bind:key="cardYear">{{ String(cardYear).slice(2, 4) }}</span>
													<span v-else key="2">YY</span>
												</transition>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="card-item__side -back">
								<div class="card-item__cover">
									<img
											v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master./src/assets/images/' + currentCardBackground + '.jpeg'"
											class="card-item__bg">
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
										<img
												v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master./src/assets/images/' + getCardType + '.png'"
												v-if="getCardType" class="card-item__typeImg">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-form__inner">
						<div class="card-input">
							<label for="cardNumber" class="card-input__label">Номер карты</label>
							<input type="text" id="cardNumber" class="card-input__input" v-mask="generateCardNumberMask"
										 v-model="cardNumber" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardNumber"
										 autocomplete="off">
						</div>
						<div class="card-input">
							<label for="cardName" class="card-input__label">Владелец</label>
							<input type="text" id="cardName" class="card-input__input" v-model="cardName" v-on:focus="focusInput"
										 v-on:blur="blurInput" data-ref="cardName" autocomplete="off">
						</div>
						<div class="card-form__row">
							<div class="card-form__col">
								<div class="card-form__group">
									<label for="cardMonth" class="card-input__label">Срок годности</label>
									<select class="card-input__input -select" id="cardMonth" v-model="cardMonth" v-on:focus="focusInput"
													v-on:blur="blurInput" data-ref="cardDate">
										<option value="" disabled selected>Месяц</option>
										<option v-bind:value="n < 10 ? '0' + n : n" v-for="n in 12" v-bind:disabled="n < minCardMonth"
														v-bind:key="n">
											{{ n < 10 ? '0' + n : n }}
										</option>
									</select>
									<select class="card-input__input -select" id="cardYear" v-model="cardYear" v-on:focus="focusInput"
													v-on:blur="blurInput" data-ref="cardDate">
										<option value="" disabled selected>Год</option>
										<option v-bind:value="$index + minCardYear" v-for="(n, $index) in 12" v-bind:key="n">
											{{ $index + minCardYear }}
										</option>
									</select>
								</div>
							</div>
							<div class="card-form__col -cvv">
								<div class="card-input">
									<label for="cardCvv" class="card-input__label">CVV</label>
									<input type="text" class="card-input__input" id="cardCvv" v-mask="'####'" maxlength="4"
												 v-model="cardCvv" v-on:focus="flipCard(true)" v-on:blur="flipCard(false)" autocomplete="off">
								</div>
							</div>
						</div>
						<button class="card-form__button">Отправить</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<style lang="scss" scoped>
@import url("https://fonts.googleapis.com/css?family=Source+Code+Pro:400,500,600,700|Source+Sans+Pro:400,600,700&display=swap");

// Пример переменных
$modal-z: 1000;
$modal-bg: rgba(0,0,0,0.4);
$main-radius: 10px;
$main-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);

.modal {
	display: none;
	position: fixed;
	z-index: $modal-z;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: $modal-bg;

	&-open {
		display: block;
	}

	.modal-content {
		background-color: #fefefe;
		margin: 15% auto;
		border: 1px solid #888;
		width: 50%;
		border-radius: $main-radius;
		box-shadow: $main-shadow;
		position: relative;
		padding: 1%;
	}

	.close {
		color: #aaaaaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
		cursor: pointer;

		&:hover, &:focus {
			color: #000;
			text-decoration: none;
		}
	}
}

.card-form {
	margin: auto;
	width: 50%;

	.open-modal-btn {
		background-color: #4CAF50;
		color: white;
		padding: 10px 20px;
		border: none;
		cursor: pointer;
		border-radius: 5px;
		font-size: 18px;

		&:hover {
			background-color: #45a049;
		}
	}

	.modal {
		// ... вложенность для модального окна внутри card-form ...
	}
}

.card-form__inner {
	background: #fff;
	box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
	border-radius: $main-radius;
	padding: 35px;
	padding-top: 180px;

	@media screen and (max-width: 480px) {
		padding: 25px;
		padding-top: 165px;
	}
	@media screen and (max-width: 360px) {
		padding: 15px;
		padding-top: 165px;
	}
}

// Пример вложенности для карточки
.card-item {
	max-width: 430px;
	height: 270px;
	margin-left: auto;
	margin-right: auto;
	position: relative;
	z-index: 2;
	width: 100%;

	&.-active {
		.card-item__side.-front {
			transform: perspective(1000px) rotateY(180deg) rotateX(0deg) rotateZ(0deg);
		}
		.card-item__side.-back {
			transform: perspective(1000px) rotateY(0) rotateX(0deg) rotateZ(0deg);
		}
	}

	.card-item__side {
		border-radius: 15px;
		overflow: hidden;
		box-shadow: 0 20px 60px 0 rgba(14, 42, 90, 0.55);
		transform: perspective(2000px) rotateY(0deg) rotateX(0deg) rotate(0deg);
		transform-style: preserve-3d;
		transition: all 0.8s cubic-bezier(0.71, 0.03, 0.56, 0.85);
		backface-visibility: hidden;
		height: 100%;

		&.-back {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			transform: perspective(2000px) rotateY(-180deg) rotateX(0deg) rotate(0deg);
			z-index: 2;
			padding: 0;
			height: 100%;

			.card-item__cover {
				transform: rotateY(-180deg);
			}
		}
	}

	// ... и так далее для остальных вложенных элементов ...
}

// Остальные стили переписываются аналогично с вложенностью и переменными

</style>