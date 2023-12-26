const mainDiv = document.querySelector('.main');
const lesgoButton = document.querySelector('.lesgo');

// Скрываем элемент main при загрузке страницы
mainDiv.style.display = 'none';
lesgoButton.style.display = 'block';

// Добавляем обработчик события на кнопку lesgo
lesgoButton.addEventListener('click', function() {
  // Показываем элемент main при нажатии на кнопку
  mainDiv.style.display = 'block';
  lesgoButton.style.display = 'none';
});

document.addEventListener('DOMContentLoaded', function () {
    // Находим элементы с классами "close" и "main"
    var closeButton = document.querySelector('.close');
    var mainElement = document.querySelector('.main');

    // Добавляем обработчик события для клика по кнопке "Закрыть"
    closeButton.addEventListener('click', function () {
        // Изменяем значение свойства display на 'none'
        mainElement.style.display = 'none';
        lesgoButton.style.display = 'block';
    });
});