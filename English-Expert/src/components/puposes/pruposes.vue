<script>
import './pruposes';
</script>

<template>
    <div class="purposes">

        <div class="purposes_left">
            <img src="../../../src/assets/cours/rabbit1.svg" alt="">
        </div>

        <div class="purposes_right">

            <div class="purposes_card">
                <img src="../../../src/assets/cours/purpose_1.svg" alt="">
                <h3>Цель 1</h3>
                <p>{{ textPruposes1 }}</p>
            </div>

            <div class="purposes_card">
                <img src="../../../src/assets/cours/purpose_2.svg" alt="">
                <h3>Цель 2</h3>
                <p>Формирование навыков простого чтения
                    и понимания базовых текстов на английском языке</p>
            </div>

            <div class="purposes_card">
                <img src="../../../src/assets/cours/purpose_3.svg" alt="">
                <h3>Цель 3</h3>
                <p>Развитие устной речи для уверенного общения
                    в базовых ситуациях: знакомство, путешествия,
                    повседневные дела</p>
            </div>

            <div class="purposes_card">
                <img src="../../../src/assets/cours/purpose_4.svg" alt="">
                <h3>Цель 4</h3>
                <p>Подготовка к простым письменным коммуникациям:
                    заполнение форм, написание коротких сообщений
                    и эссе.</p>
            </div>

        </div>

    </div>

</template>
<style>
.purposes{
    color: black;
    display: flex;
    width: 100%;
    margin-top: 5%;
}

.purposes_left{
    padding-right: 7%;
}

.purposes_right{
    display: flex;
    justify-content: space-between;
}

.purposes_card{
    width: 11rem;
    margin-right: 1%;
    margin-left: 1%;
}

.purposes_card h3{
    font-family: bold;
    font-size: 1.5rem;
}

.purposes_card p{
    font-family: regular;
    font-size: 0.88rem;
}
</style>