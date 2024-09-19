<script lang="js" src="./priorities.js" />

<template>
    <section class="photo">
        <div class="wrapper">

            <img src="../../assets/cours/photoA1.svg" alt="">
            rgergwegewgewggeg

        </div>
    </section>

    <!-- Блок приоритетов -->

    <div class="wrapper">
        <section class="priorities">
            <div v-for="(prior,index) in priorities_info" class="priority" style="color: red;">
                <img :src=getImge(index) alt="">
                <p> {{ prior }}</p>
            </div>

            <!-- <div class="priority">
            <img src="./src/img/cours/icon_1.svg" alt="">
            <p>Основы английского языка для начинающих</p>
        </div>

        <div class="priority">
            <img src="./src/img/cours/icon_2.svg" alt="">
            <p>Английский для взрослых и детей</p>
        </div>

        <div class="priority">
            <img src="./src/img/cours/icon_3.svg" alt="">
            <p>Онлайн-уроки английского языка</p>
        </div>

        <div class="priority">
            <img src="./src/img/cours/icon_4.svg" alt="">
            <p>Профессиональное обучение английскому</p>
        </div>

        <div class="priority">
            <img src="./src/img/cours/icon_5.svg" alt="">
            <p>Языковые игры и практические занятия</p>
         </div> -->

         <div class="priority">
            <img src="../../assets/cours/icon_4.svg" alt="">
            <p>Сеансы разговорной практики с носителями языка</p>
        </div>

        </section>
    </div>
</template>

<style></style>