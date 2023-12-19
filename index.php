<?php
	
	/* // Блок PHP и запускаем сессию для проверки отправки почты и вывода сообщения об отправке
	session_start();  // Открываем сессию для приема/отправки переменной $_SESSION содержащей переменную $win
	if ($_SESSION['win']) { // Если в переменной $_SESSION содержащая переменную $win существует что-то...
		unset($_SESSION['win']); // Обнуляем переменную $_SESSION содержащая переменную $win
		$display = "block"; // Переменной $display присваиваем значение "block"
	  } else $display = "none"; // Иначе переменной $display присваиваем значение "none"
	*/

	/**
	 * Template Name: Главная
	 * Template Post Type: page
	 */

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>ООО "ВОСТОК". Рельсы, стальные трубы, новые, лежалые, б/у</title>
	
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Рельсы, стальные трубы, новые, лежалые, б/у">
	<meta name="keywords" content="Рельсы, стальные трубы, купить">
    
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	<!-- My CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/theme.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter47972285 = new Ya.Metrika({
						id:47972285,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/47972285" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>
<body>


<!-- Header -->
<section class="bg-dark">
	<div class="container">
		<div class="row justify-content-between align-items-center py-2">
			<div class="col-md-3">
				<h2 class="logo-title">ООО «Восток»</h2>
				<div class="logo-description">Приморский край, г. Артём,</div>
				<div class="logo-description">переулок Заводской, 13«А»</div>
			</div>
			
			<div class="col-md-4 text-md-center">
				<h2 class="header-description">Что бы Ваши деньги не улетели в трубу!</h2>
			</div>
			
			
			<div class="col-md-3 text-md-right">
				<a href="tel:+79089933333" class="header-phone">+7 <span>(908)</span> 99-333-33</a>
				
				<a href="tel:+74232933333" class="header-phone">+7 <span>(423)</span> 29-333-33</a>
				
				<a href="mailto:9089933333@mail.ru" class="header-email">9089933333@mail.ru</a>
				<!--
				<a style="color: white; outline: none;" data-toggle="modal" data-target="#exampleModal" href=""> Заказать обратный звонок</a>
				-->
			</div>
		</div>
	</div>
</section>


<!-- Main -->
<div class="container-fluid" style="padding: 0; overflow: hidden; position: relative;">
	<video autoplay loop playsinline muted>
	   <source src="<?php echo get_template_directory_uri(); ?>/123.mp4">
	</video>
	<div id="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-3" style="margin: auto; padding-top: 15px; padding-bottom: 15px;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/putin-truba.jpg" class="img-thumbnail" style="width: 100%; margin-bottom: 15px;">
				
				<!-- Калькулятор -->
				<script type="text/javascript">
					function CALCULATOR (Type, Params){
						var P = 7800;
					
						if(Params[0]){ Params[0] = parseFloat(Params[0].replace(',', '.')); }
						if(Params[1]){ Params[1] = parseFloat(Params[1].replace(',', '.')); }
						if(Params[2]){ Params[2] = parseFloat(Params[2].replace(',', '.')); }
						if(Params[3]){ Params[3] = parseFloat(Params[3].replace(',', '.')); }
						if(Params[4]){ Params[4] = parseFloat(Params[4].replace(',', '.')); }
						if(Params[5]){ Params[5] = parseFloat(Params[5].replace(',', '.')); }
					
						switch (Type){
							case 'Уголок':					// Высота, Ширина, Толщина стенки, Длина в метрах
								return P * (Params[0] * Params[2] + Params[1] * Params[2] - Params[2] * Params[2]) * 0.000001 * Params[3];
					
							case 'Лист':					// Высота, Ширина, Толщина, Количество || 1
								return P * Params[0] * Params[1] * Params[2] * (Params[3] || 1) * 0.000000001;
					
							case 'Труба':					// Диаметр, Толщина, Длина в метрах, Количество
								P = 7850;
								var R1 = Params[0] / 2;
								var R2 = R1 - Params[1];
								var S1 =  Math.PI * Math.pow(R1, 2);
								var S2 =  Math.PI * Math.pow(R2, 2);
					
								return P * (S1 - S2) * Params[2] * (Params[3] || 1) * 0.000001;
					
							case 'Круг':					// Диаметр, Длина в метрах, Количество
								var R1 = Params[0] / 2;
								var S1 =  Math.PI * Math.pow(R1, 2);
					
								return P * S1 * Params[1] * (Params[2] || 1) * 0.000001;
					
							case 'Профильная труба':		// Высота, Ширина, Толщина стенки, Длина в метрах, Количество
								P = 7850;
							
								return (P / 7850) * 0.0157 * Params[2] * (Params[0] + Params[1] - 2.86 * Params[2]) * Params[3];
					
							case 'Квадрат':					// Стророна, Длина в метрах, Количество
								return P * (Params[0] * Params[0]) * Params[1] * (Params[2] || 1) * 0.000001;
					
							case 'Швеллер':					// Высота, Ширина, Толщина стенки, Длина в метрах, Количество
								return P * ((Params[0] * Params[2]) * 2 + Params[1] * Params[2] - (Params[2] * Params[2]) * 2) * Params[3] * (Params[4] || 1) * 0.000001;
					
							case 'Лента':					// Длина, Ширина, Толщина, Количество || 1
								return P * Params[0] * Params[1] * Params[2] * (Params[3] || 1) * 0.000001;
					
							case 'Балка': // [0]Высота, [1]Ширина, [2]Толщина перемычки, [3]Толщина полки, [4]Длина в метрах, [5]Количество
								var Polki =  (Params[1] *  Params[3] * 2);
								var Perem =  (Params[2] * (Params[0] - Params[3] * 2));
								return  (Polki + Perem)*P * Params[4] * (Params[5] || 1) * 0.000001;
					
							case 'Шестигранник':
								Params[0] = Params[0] * 0.5;
								return P * 2 * Math.sqrt(3) * Math.pow(Params[0],2) * Params[1] * (Params[2] || 1) * 0.000001;
						}
					};
					
					$(document).ready(function(){
						$('.CALC_TYPE_SELECT').change(function(){
							$('.inputs input').val('');
							$('#summ-kg').html('масса'); $('#summ-m3').html('объем');
					
							switch ($('.CALC_TYPE_SELECT').val()){
								case 'Уголок':
									$('.ToHide').hide();    $('.ToUnselect').removeClass('select')
									$('#P-Высота').show();
									$('#P-Ширина').show();
									$('#P-Толщина').show();
									$('#P-Длина').show();
									$('#1_type').addClass('select');
									break;
					
								case 'Лист':
									$('.ToHide').hide();    $('.ToUnselect').removeClass('select')
									$('#P-Высота').show();
									$('#P-Ширина').show();
									$('#P-Толщина').show();
									$('#2_type').addClass('select');
									break;
					
								case 'Труба':
									$('.ToHide').hide();    $('.ToUnselect').removeClass('select')
									$('#P-Диаметр').show();
									$('#P-Толщина').show();
									$('#P-Длина').show();
									$('#3_type').addClass('select');
									break;
					
								case 'Круг':
									$('.ToHide').hide();    $('.ToUnselect').removeClass('select')
									$('#P-Диаметр').show();
									$('#P-Длина').show();
									$('#4_type').addClass('select');
									break;
					
								case 'Профильная труба':
									$('.ToHide').hide();    $('.ToUnselect').removeClass('select')
									$('#P-Высота').show();
									$('#P-Ширина').show();
									$('#P-Толщина').show();
									$('#P-Длина').show();
									$('#5_type').addClass('select');
									break;
					
								case 'Квадрат':
									$('.ToHide').hide();    $('.ToUnselect').removeClass('select')
									$('#P-Высота').show();
									$('#P-Длина').show();
									$('#6_type').addClass('select');
									break;
					
								case 'Швеллер':
									$('.ToHide').hide();    $('.ToUnselect').removeClass('select')
									$('#P-Высота').show();
									$('#P-Ширина').show();
									$('#P-Толщина').show();
									$('#P-Длина').show();
									$('#7_type').addClass('select');
									break;
					
								case 'Лента':
									$('.ToHide').hide();    $('.ToUnselect').removeClass('select')
									$('#P-Ширина').show();
									$('#P-Толщина').show();
									$('#P-Длина').show();
									$('#8_type').addClass('select');
									break;
					
								case 'Балка':
									$('.ToHide').hide();    $('.ToUnselect').removeClass('select')
									$('#P-Высота').show();
									$('#P-Ширина').show();
									$('#P-Толщина-перемычки').show();
									$('#P-Толщина-полки').show();
									$('#P-Длина').show();
									$('#9_type').addClass('select');
									break;
					
								case 'Шестигранник':
									$('.ToHide').hide();    $('.ToUnselect').removeClass('select')
									$('#P-Диаметр').show();
									$('#P-Длина').show();
									$('#10_type').addClass('select');
									break;
					
					
							};
						})
						
						$('.calc-clear').click(function(){
							$('.inputs input').val('');    	$('#summ-kg').html('масса'); $('#summ-m3').html('объем');
						});
					
						$('.calc-send').click(function(){
							switch ($('.CALC_TYPE_SELECT').val()){
								case 'Уголок':
									var Z = CALCULATOR($('.CALC_TYPE_SELECT').val(), [$('#Высота').val(), $('#Ширина').val(), $('#Толщина').val(), $('#Длина').val()]).toFixed(2);
									$('#summ-kg').html(Z);
									$('#summ-m3').html((Z/7800).toFixed(5));
									break;
								case 'Лист':
									var Z = CALCULATOR($('.CALC_TYPE_SELECT').val(), [$('#Высота').val(), $('#Ширина').val(), $('#Толщина').val()]).toFixed(2);
									$('#summ-kg').html(Z);
									$('#summ-m3').html((Z/7800).toFixed(5));
									break;
								case 'Труба':
									var Z = CALCULATOR($('.CALC_TYPE_SELECT').val(), [$('#Диаметр').val(), $('#Толщина').val(), $('#Длина').val()]).toFixed(2);
									$('#summ-kg').html(Z);
									$('#summ-m3').html((Z/7800).toFixed(5));
									break;
								case 'Круг':
									var Z = CALCULATOR($('.CALC_TYPE_SELECT').val(), [$('#Диаметр').val(), $('#Длина').val()]).toFixed(2);
									$('#summ-kg').html(Z);
									$('#summ-m3').html((Z/7800).toFixed(5));
									break;
								case 'Профильная труба':
									var Z = CALCULATOR($('.CALC_TYPE_SELECT').val(), [$('#Высота').val(), $('#Ширина').val(), $('#Толщина').val(), $('#Длина').val()]).toFixed(2);
									$('#summ-kg').html(Z);
									$('#summ-m3').html((Z/7800).toFixed(5));
									break;
								case 'Квадрат':
									var Z = CALCULATOR($('.CALC_TYPE_SELECT').val(), [$('#Высота').val(), $('#Длина').val()]).toFixed(2);
									$('#summ-kg').html(Z);
									$('#summ-m3').html((Z/7800).toFixed(5));
									break;
								case 'Швеллер':
									var Z = CALCULATOR($('.CALC_TYPE_SELECT').val(), [$('#Высота').val(), $('#Ширина').val(), $('#Толщина').val(), $('#Длина').val()]).toFixed(2);
									$('#summ-kg').html(Z);
									$('#summ-m3').html((Z/7800).toFixed(5));
									break;
								case 'Лента':
									var Z = CALCULATOR($('.CALC_TYPE_SELECT').val(), [$('#Длина').val(), $('#Ширина').val(), $('#Толщина').val()]).toFixed(2);
									$('#summ-kg').html(Z);
									$('#summ-m3').html((Z/7800).toFixed(5));
									break;
								case 'Балка':
									var Z = CALCULATOR($('.CALC_TYPE_SELECT').val(), [$('#Высота').val(), $('#Ширина').val(), $('#Толщина-перемычки').val(), $('#Толщина-полки').val(), $('#Длина').val()]).toFixed(2);
									$('#summ-kg').html(Z);
									$('#summ-m3').html((Z/7800).toFixed(5));
									break;
								case 'Шестигранник':
									var Z = CALCULATOR($('.CALC_TYPE_SELECT').val(), [$('#Диаметр').val(), $('#Длина').val()]).toFixed(2);
									$('#summ-kg').html(Z);
									$('#summ-m3').html((Z/7800).toFixed(5));
									break;
					
							};
						});
					
						$('#1_type').click(function(){
							$('.CALC_TYPE_SELECT').val('Уголок').change();
						})
						$('#2_type').click(function(){
							$('.CALC_TYPE_SELECT').val('Лист').change();
						})
						$('#3_type').click(function(){
							$('.CALC_TYPE_SELECT').val('Труба').change();
						})
						$('#4_type').click(function(){
							$('.CALC_TYPE_SELECT').val('Круг').change();
						})
						$('#5_type').click(function(){
							$('.CALC_TYPE_SELECT').val('Профильная труба').change();
						})
						$('#6_type').click(function(){
							$('.CALC_TYPE_SELECT').val('Квадрат').change();
						})
						$('#7_type').click(function(){
							$('.CALC_TYPE_SELECT').val('Швеллер').change();
						})
						$('#8_type').click(function(){
							$('.CALC_TYPE_SELECT').val('Лента').change();
						})
						$('#9_type').click(function(){
							$('.CALC_TYPE_SELECT').val('Балка').change();
						})
						$('#10_type').click(function(){
							$('.CALC_TYPE_SELECT').val('Шестигранник').change();
						})
					})
				</script>

				<div class="metal-calc" style="width: 255px; margin: auto;">
					<img class="title" src="<?php echo get_template_directory_uri(); ?>/img/calc-ttl.png" alt="калькулятор металла">
					
					<select class="CALC_TYPE_SELECT" style="display: none;">
						<option value="Уголок">Уголок</option>
						<option value="Лист">Лист</option>
						<option value="Труба">Труба</option>
						<option value="Круг">Круг / Проволока</option>
						<option value="Профильная труба">Труба профильная</option>
						<option value="Квадрат">Квадрат</option>
						<option value="Швеллер">Швеллер</option>
						<option value="Лента">Лента / Полоса</option>
						<option value="Балка">Балка</option>
						<option value="Шестигранник">Шестигранник</option>
					</select>
					
					<div class="button">
						<a class="ToUnselect select" id="1_type" title="Уголок"></a>
						<a class="ToUnselect" id="2_type" title="Лист"></a>
						<a class="ToUnselect" id="3_type" title="Труба"></a>
						<a class="ToUnselect" id="4_type" title="Круг / Проволока"></a>
						<a class="ToUnselect" id="5_type" title="Труба профильная"></a>
						<a class="ToUnselect" id="6_type" title="Квадрат"></a>
						<a class="ToUnselect" id="7_type" title="Швеллер"></a>
						<a class="ToUnselect" id="8_type" title="Лента / Полоса"></a>
						<a class="ToUnselect" id="9_type" title="Балка"></a>
						<a class="ToUnselect" id="10_type" title="Шестигранник"></a>
						<div style="clear:both"></div>
					</div>
					<div class="inputs">
						<p class="ToHide" id="P-Диаметр" style="display: none; margin-bottom: 0;"><input onkeyup="$(&#39;.calc-send&#39;).click()" id="Диаметр" type="text" placeholder="Диаметр"><label id="Label-Диаметр" for="">мм</label></p>
						
						<p class="ToHide" id="P-Высота" style="display: block; margin-bottom: 0;"><input onkeyup="$(&#39;.calc-send&#39;).click()" id="Высота" type="text" placeholder="Высота"><label id="Label-Высота" for="">мм</label></p>
						
						<p class="ToHide" id="P-Ширина" style="display: block; margin-bottom: 0;"><input onkeyup="$(&#39;.calc-send&#39;).click()" id="Ширина" type="text" placeholder="Ширина"><label id="Label-Ширина" for="">мм</label></p>
						
						<p class="ToHide" id="P-Толщина" style="display: block; margin-bottom: 0;"><input onkeyup="$(&#39;.calc-send&#39;).click()" id="Толщина" type="text" placeholder="Толщина"><label id="Label-Толщина" for="">мм</label></p>
						
						<p class="ToHide" id="P-Толщина-перемычки" style="display: none; margin-bottom: 0;">	<input onkeyup="$(&#39;.calc-send&#39;).click()" id="Толщина-перемычки" type="text" placeholder="Толщина-перемычки"><label id="Label-Толщина-перемычки" for="">мм</label></p>
						
						<p class="ToHide" id="P-Толщина-полки" style="display: none; margin-bottom: 0;">		<input onkeyup="$(&#39;.calc-send&#39;).click()" id="Толщина-полки" type="text" placeholder="Толщина-полки"><label id="Label-Толщина-полки" for="">мм</label></p>
						
						<p class="ToHide" id="P-Длина" style="display: block; margin-bottom: 0;">										<input onkeyup="$(&#39;.calc-send&#39;).click()" id="Длина" type="text" placeholder="Длина"><label id="Label-Длина" for="">м</label></p>
					</div>
					<div class="summ">
						<b>Расчет:</b>
						<span id="summ-kg">масса</span><label for="">кг</label>
						<span id="summ-m3">объем</span><label for="">м<sup>3</sup></label>
					</div>
					<div style="clear:both"></div>
					<img class="calc-send" style="display: none" src="<?php echo get_template_directory_uri(); ?>/img/calc-send.png" alt="посчитать">
					<img class="calc-clear" src="<?php echo get_template_directory_uri(); ?>/img/reset_btn.png" style="width: 100%;"alt="сбросить">
				</div>
			</div>
			
			<div class="col-md-9" id="name" style="padding-top: 75px; padding-bottom: 50px;">
				<h1 class="home-title">
					Рельсы, трубы стальные<br>Новые, лежалые, б/у
					<img id="kredit" src="<?php echo get_template_directory_uri(); ?>/img/kredit.png">
				</h1>
				<h2 class="home-subtitle"><i>Ф</i> 127 159 219 250 273 325 350 377 426 530 630 720 820 920 1020 1220 1420 мм.</h2>
				
				<p style="color: white; font-size: 1.5rem;">Доставка авто, жд и морем.</p>
				<p style="color: white; font-size: 1.5rem;">Выкупаем излишки материалов, складские остатки.</p>
				<!--
				<button style="margin: 25px auto; display: block;" type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal2">Оставить заявку</button>
				-->
			</div>
		</div>
	</div>
</div>


<!-- Content section -->
<section class="container-fluid py-3 py-md-5" style="background: #48474e;">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php
					while( have_posts() ) {
						the_post();
						the_content();
					}
				?>
			</div>
		</div>
	</div>
</section>
<!-- /Content section -->


<!-- Vibropogrujatel shpunta -->
<section class="vibropogrujatel-shpunta-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/section-img.jpg">
			</div>
			<div class="col-md-6">
				<h2 class="mb-5">Вибропогружатель шпунта Ларсена</h2>
				<ul class="mb-5">
					<li class="mb-3">Вибропогружение шпунтов</li>
					<li class="mb-3">Выемка шпунтов</li>
					<li>Аренда вибропогружателя</li>
				</ul>
				<a href="tel:+79089933333" class="header-phone">+7 <span>(908)</span> 99-333-33</a>
				<a href="tel:+74232933333" class="header-phone">+7 <span>(423)</span> 29-333-33</a>
				<a href="mailto:9089933333@mail.ru" class="header-email">9089933333@mail.ru</a>
			</div>
		</div>
	</div>
</section>
<!-- /Vibropogrujatel shpunta -->


<!-- Contacts -->
<section class="contacts-section">
	<div class="container py-4 py-md-5">
		<div class="row justify-content-center pt-3">
			<div class="col-md-3">
				<ul>
					<li>ООО "ВОСТОК"</li>
					<li>ИНН 2543088996</li>
					<li>КПП 254301001</li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul>
					<li>ОГРН 1162543051087</li>
					<li>р/с 40702810445510000377</li>
					<li>Дальневосточный филиал ПАО РОСБАНК</li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul>
					<li>к/с 30101810300000000871</li>
					<li>БИК 040507871</li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div id="im-in-footer">Создание и продвижение сайтов: <a href="https://сайт100.рф" class="text-light">сайт100.рф</a></div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /Footer -->
</section>
<!-- /Contacts -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div style="max-width: 445px;" class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Заказать обратный звонок?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="mail.php" style="text-align: center; margin: auto; padding: 10px 0;">
					<input type="text" class="form-control" name="name" placeholder="Введите Ваше имя" style="width: 100%; display: inline; margin: 10px 0;" required>
					<input type="text" class="form-control" name="tel" placeholder="Введите Ваш телефон" style="width: 100%; display: inline; margin: 10px 0;" required>
					<button type="submit" class="btn btn-danger" style=" min-width: 150px; margin: 10px;">Заказать</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div style="max-width: 445px;" class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Оставить заявку</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="mail.php" style="text-align: center; margin: auto; padding: 10px 0;">
					<input type="text" class="form-control" name="name" placeholder="Введите Ваше имя" style="width: 100%; display: inline; margin: 10px 0;" required>
					<input type="text" class="form-control" name="tel" placeholder="Введите Ваш телефон" style="width: 100%; display: inline; margin: 10px 0;" required>
					<button type="submit" class="btn btn-danger" style=" min-width: 150px; margin: 10px;">Оставить заявку</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Показываем пустой блок содержащий другие блоки
<div style="display: <?php echo $display; ?>;"> <!-- Присваиваем свойству display значение переменной $display --
	<div id="background-msg" style="display: <?php echo $display; ?>;"></div> <!-- Показываем background --
	<!-- Показываем сообщение об успешной отправке данных --
	<div id="message">
		<p>Спасибо, что обратились именно к нам. Мы свяжемся с Вами в ближайшее время.</p>
	</div> 
</div> -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!-- My scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>
</html>