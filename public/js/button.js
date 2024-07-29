// Получаем ссылки на каждый блок
var i1 = document.getElementById('i1');
var i2 = document.getElementById('i2');
var i3 = document.getElementById('i3');

// Добавляем обработчики кликов для перенаправления
i1.addEventListener('click', function() {
    window.location.href = '/test'; // Путь к странице с тестом на определние уровня английского языка
});

i2.addEventListener('click', function() {
    window.location.href = '/contacts'; // Путь к странице контактными данными
});

i3.addEventListener('click', function() {
    window.location.href = '/all_news'; // Путь к странице с новостями
});