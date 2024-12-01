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

<style>
.testimonials {
    width: 100%;
    height: 37rem;
    ;
    padding: 2em 0;
    background-image: url('./src/img/main/background.svg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: #fff;
    margin-top: 10%;
}

.testimonials h2 {
    font-family: bold;
    font-size: 2.25rem;
    margin-top: 3.5%;
    text-align: center;
}

.slider {
    display: flex;
    gap: 1em;
    overflow-x: auto;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    padding-bottom: 5em;
}

.slider::-webkit-scrollbar {
    height: 6px;
}

.slider::-webkit-scrollbar-track {
    background: #ffffff;
    border-radius: 10px;
}

.slider::-webkit-scrollbar-thumb {
    background: linear-gradient(45deg, rgb(247, 148, 29), rgb(39, 170, 225));
    /* Gradient thumb */
    border-radius: 10px;
}

.slider::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(45deg, rgb(39, 170, 225), rgb(247, 148, 29));
}

.slider::-webkit-scrollbar-button {
    display: none;
}

.testimonial-item {
    width: 17.5rem;
    flex: 0 0 auto;
    border: 1px solid #ddd;
    padding: 1em;
    scroll-snap-align: start;
    background: white;
    border-radius: 10px;
    color: #000;
    margin: 0 2% 0 2%;
}

.testimonial-item p {
    font-family: medium;
    font-size: 0.88rem;
}

.user-info {
    display: flex;
    align-items: center;
    gap: 1em;
}

.user-info h2 {
    font-size: 0.88rem;
    font-family: bold;
}

.user-info img {
    border-radius: 50%;
    width: 50px;
    height: 50px;
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
}

.stars img {
    width: 20px;
}

/* Адаптив Отзывов*/

@media (max-width: 1000px) {

    .testimonials {
        margin-top: 50%;
    }

}
</style>