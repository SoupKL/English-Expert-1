// Получаем элементы модального окна, кнопки открытия и закрытия
// Corrected modal element selection
var modal = document.querySelector('.modal');
var modalBtn = document.getElementById('modalBtn'); // Assuming this is correctly targeting your button
var closeBtn = document.querySelector('.close'); // Update this selector to target the close button correctly

// Открываем модальное окно при клике на кнопку
modalBtn.onclick = function() {
  modal.style.display = 'block';
}

// Закрываем модальное окно при клике на крестик
closeBtn.onclick = function() {
  modal.style.display = 'none';
}

// Закрываем модальное окно при клике вне модального окна
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
}

// Дополнительно: закрываем модальное окно при нажатии клавиши Esc
window.onkeydown = function(event) {
  if (event.key === 'Escape') {
    modal.style.display = 'none';
  }
}

