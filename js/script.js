// Убираем модальное окно об успешной отправки данных
$(document).ready(function() { // Делаем скрипт доступным после полной загрузки сайта
	$("#background-msg").click(function(){ // Ловим клик по фону background-msg
		$("#background-msg, #message").fadeOut(); // Убираем фон background-msg, и сообщение message
	});
});

/* Скрипт для плавной прокрутки к якорю */
$(document).ready(function(){
	$("a[href*=#]").bind("click", function(e){
		var anchor = $(this);
		var name = anchor.attr("href").replace(new RegExp("#", "gi"), "");
	$('html, body').stop().animate({
		scrollTop: $("a[name=" + name + "]").offset().top
	}, 1000); /* Скорость прокрутки */
	e.preventDefault();
	return false;
	});
});