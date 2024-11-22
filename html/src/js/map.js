ymaps.ready(function () {
    var map = new ymaps.Map('map', {
        center: [43.128782, 131.925738], // Координаты центра карты
        zoom: 12 // Уровень масштабирования карты
    });

    // Добавление метки на карту
    var placemark = new ymaps.Placemark(
        [43.128782, 131.925738], // Координаты метки
        { hintContent: 'English Expert', balloonContent: 'Жигура,26' }
    );
    map.geoObjects.add(placemark);
});