$(document).ready(function() {
    // При клике на кнопку "Scroll to Target"
    $("#scrollButton").click(function() {
      // Получаем позицию верхней границы целевого элемента
      var targetPosition = $("#target").offset().top;
      
      // Выполняем плавный скролл к целевому элементу
      $("html, body").animate({
        scrollTop: targetPosition
      }, 1000); // 1000 мс = 1 секунда (задержка скролла)
    });
  });
  