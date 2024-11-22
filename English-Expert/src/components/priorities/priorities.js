export default {
    setup() {
        const priorities_info = [
            'Основы английского языка для начинающих',
            'Английский для взрослых и детей',
            'Онлайн-уроки английского языка',
            'Профессиональное обучение английскому',
            'Языковые игры и практические заняти',
            'Сеансы разговорной практики с носителями языка',
        ];

        function getImge(index){
            return "../../src/assets/cours/icon_"+ (index + 1) +".svg"
        }

        return {
            priorities_info,
            getImge
        }
    }
}