import gavriil from '/public/main/gavriil.jpeg';
import marina from '/public/main/marina.svg';
import elena from '/public/main/elena.svg';
import andre from '/public/main/andre.jpeg';
import alexsandra from '/public/main/alexsandra.jpeg';
import maxim from '/public/main/maxim.svg';
import uliya from '/public/main/uliya.svg';

export default {
    setup() {
        const users = [
            {
                avatar: gavriil,
                name: 'Гавриил Архипов',
                review: 'Рекомендую всем, кто желает выучить английский!',
                rating: '4,87',
            },

            {
                avatar: marina,
                name: 'Марина Смирнова',
                review: 'Я очень довольна результатами, которые удалось достичь благодаря этим курсам английского языка! Преподаватель помогал мне преодолеть все трудности. Теперь я гораздо увереннее общаюсь на английском языке!',
                rating: '4,99',
            },
            {
                avatar: elena,
                name: 'Елена Кузнецова',
                review: 'Я улучшила свои навыки чтения и письма. Советую всем, кто хочет выучить английский язык.',
                rating: '4,87',
            },
            {
                avatar: andre,
                name: 'Алексей Иванов',
                review: 'Все уроки структурированы и легко понять. Я получил много практического опыта и научился говорить на английском более уверенно.',
                rating: '4,7',
            },
            {
                avatar: alexsandra,
                name: 'Александра Макаренко',
                review: 'Эти курсы английского языка превзошли все мои ожидания! Очень понравился подход преподавателя к обучению. Занятия были интересными и практичными, а результаты заметны уже после нескольких уроков.',
                rating: '4,95',
            },
            {
                avatar: maxim,
                name: 'Максим Козлов',
                review: 'Эти курсы английского языка превзошли все мои ожидания! Очень понравился подход преподавателя к обучению. Занятия были интересными и практичными, а результаты заметны уже после нескольких уроков.',
                rating: '5',
            },
            {
                avatar: uliya,
                name: 'Юлия Архипова',
                review: 'Онлайн школа английского языка превзошла мои ожидания! Уроки были очень интересными и информативными.',
                rating: '5',
            },

        ]

        return {
            users
        }
    }



}