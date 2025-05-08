<script lang="js" src="./review-user.js" />


<template>
    <div v-for="user in users" class="testimonial-item">
        <div class="user-info">
            <img :src="user.avatar" alt="Фото пользователя">
            <h2 class="review-author">{{ user.name }}</h2>
        </div>
        <p class="review-text">{{ user.review }}</p>
        <div class="rating">
            <span class="stars"><img src="/src/assets/main/star.svg"></span>
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
    height: 37rem;
    padding: 2em 0;
    background-image: $main-bg;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: $main-white;
    margin-top: 10%;

    h2 {
        font-family: bold;
        font-size: 2.25rem;
        margin-top: 3.5%;
        text-align: center;
    }

    @media (max-width: 1000px) {
        margin-top: 50%;
    }
}

.slider {
    display: flex;
    gap: 1em;
    overflow-x: auto;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    padding-bottom: 5em;

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
    width: 17.5rem;
    flex: 0 0 auto;
    border: 1px solid $main-border;
    padding: 1em;
    scroll-snap-align: start;
    background: $main-white;
    border-radius: $main-radius;
    color: $main-black;
    margin: 0 2% 0 2%;

    p {
        font-family: medium;
        font-size: 0.88rem;
    }
}

.user-info {
    display: flex;
    align-items: center;
    gap: 1em;

    h2 {
        font-size: 0.88rem;
        font-family: bold;
    }

    img {
        border-radius: 50%;
        width: 50px;
        height: 50px;
    }
}

.review-author {
    font-size: 1.2em;
    margin: 0;
}

.review-text {
    margin: 1em 0;
    font-size: 1em;
}

.rating {
    display: flex;
    align-items: center;
    gap: 0.5em;

    .stars img {
        width: 20px;
    }
}
</style>