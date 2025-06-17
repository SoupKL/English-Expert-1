<script lang="js" src="./review-user.js" />


<template>
    <div v-for="user in users" class="testimonial-item">
        <div class="user-info">
            <img :src="user.avatar" alt="Фото пользователя">
            <h2 class="review-author">{{ user.name }}</h2>
        </div>
        <p class="review-text">{{ user.review }}</p>
        <div class="rating">
            <span class="stars"><img alt="Звезда" src="/src/assets/main/star.svg"></span>
            <span class="score">
                <p>{{ user.rating }}/5</p>
            </span>
        </div>
    </div>
</template>

<style lang="scss">
$main-bg: url('./src/img/main/background.svg');
$main-gradient: linear-gradient(45deg, rgb(247, 148, 29), rgb(39, 170, 225));
$main-gradient-hover: linear-gradient(45deg, rgb(39, 170, 225), rgb(247, 148, 29));
$main-white: #fff;
$main-black: #000;
$main-border: #ddd;
$main-radius: 10px;
$main-orange: rgb(247, 148, 29);
$main-blue: rgb(39, 170, 225);

.testimonials {
    width: 100%;
    max-width: 100vw;
    min-height: 37rem;
    padding: 2em 1em;
    background-image: $main-bg;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: $main-white;
    margin-top: 10%;
    overflow: hidden;
    box-sizing: border-box;

    h2 {
        font-family: bold;
        font-size: clamp(1.5rem, 4vw, 2.25rem);
        margin-top: 3.5%;
        text-align: center;
        padding: 0 1rem;
    }

    @media (max-width: 768px) {
        margin-top: 5%;
        padding: 1em;
    }

    @media (max-width: 480px) {
        margin-top: 3%;
    }

    @media (max-width: 430px) {
        min-height: auto;
        padding: 1em 0.5em;
        margin-top: 2%;

        h2 {
            font-size: 1.5rem;
            margin-top: 2%;
        }
    }
}

.slider {
    display: flex;
    gap: 1em;
    overflow-x: auto;
    margin: 5% auto 0;
    padding: 0 1rem 5em;
    max-width: 100%;
    box-sizing: border-box;
    -webkit-overflow-scrolling: touch;

    @media (max-width: 768px) {
        padding: 0 0.5rem 3em;
    }

    @media (max-width: 480px) {
        gap: 0.5em;
    }

    @media (max-width: 430px) {
        margin: 3% auto 0;
        padding: 0 0.5rem 2em;
        gap: 0.3em;
    }

    &::-webkit-scrollbar {
        height: 6px;
    }

    &::-webkit-scrollbar-track {
        background: $main-white;
        border-radius: $main-radius;
    }

    &::-webkit-scrollbar-thumb {
        background: $main-gradient;
        border-radius: $main-radius;

        &:hover {
            background: $main-gradient-hover;
        }
    }

    &::-webkit-scrollbar-button {
        display: none;
    }
}

.testimonial-item {
    width: min(17.5rem, 90%);
    flex: 0 0 auto;
    border: 1px solid $main-border;
    padding: 1em;
    scroll-snap-align: start;
    background: $main-white;
    border-radius: $main-radius;
    color: $main-black;
    margin: 0 2% 0 2%;
    box-sizing: border-box;

    @media (max-width: 768px) {
        margin: 0 1%;
        padding: 0.8em;
    }

    @media (max-width: 430px) {
        width: 85%;
        margin: 0 0.5%;
        padding: 0.7em;
    }

    p {
        font-family: medium;
        font-size: clamp(0.8rem, 2vw, 0.88rem);
    }
}

.user-info {
    display: flex;
    align-items: center;
    gap: 1em;
    width: 100%;
    box-sizing: border-box;

    @media (max-width: 480px) {
        gap: 0.5em;
    }

    @media (max-width: 430px) {
        gap: 0.3em;
    }

    h2 {
        font-size: clamp(0.8rem, 2vw, 0.88rem);
        font-family: bold;
    }

    img {
        border-radius: 50%;
        width: clamp(40px, 8vw, 50px);
        height: clamp(40px, 8vw, 50px);
        object-fit: cover;

        @media (max-width: 430px) {
            width: 35px;
            height: 35px;
        }
    }
}

.review-author {
    font-size: clamp(1rem, 2.5vw, 1.2em);
    margin: 0;

    @media (max-width: 430px) {
        font-size: 0.9rem;
    }
}

.review-text {
    margin: 1em 0;
    font-size: clamp(0.9rem, 2vw, 1em);
    line-height: 1.4;
    width: 100%;
    box-sizing: border-box;

    @media (max-width: 430px) {
        font-size: 0.8rem;
        margin: 0.7em 0;
    }
}

.rating {
    display: flex;
    align-items: center;
    gap: 0.5em;
    width: 100%;
    box-sizing: border-box;

    @media (max-width: 430px) {
        gap: 0.3em;
    }

    .stars img {
        width: clamp(16px, 3vw, 20px);
        height: auto;

        @media (max-width: 430px) {
            width: 14px;
        }
    }

    .score p {
        font-size: clamp(0.8rem, 2vw, 0.9rem);

        @media (max-width: 430px) {
            font-size: 0.75rem;
        }
    }
}
</style>