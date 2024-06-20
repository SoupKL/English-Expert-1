// Получаем ссылки на каждый блок
var i1 = document.getElementById('i1');
var i2 = document.getElementById('i2');
var i3 = document.getElementById('i3');

// Добавляем обработчики кликов для перенаправления
i1.addEventListener('click', function() {
    window.location.href = '/html/test.html'; // Путь к странице с новостями
});

i2.addEventListener('click', function() {
    window.location.href = '/html/contacts.html'; // Путь к странице с новостями, если нужно перенаправить именно на нее
});

i3.addEventListener('click', function() {
    window.location.href = '/html/all_news.html'; // Путь к странице с новостями
});