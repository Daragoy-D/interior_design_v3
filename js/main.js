$(document).ready(function(){
	
	oke = 0;
	$('.scrollup').click(function() {
		$("html, body").animate({
		  scrollTop:0
		},1000);
	  })

	 $(".tel_mask").mask("+38 (999) 999-99-99");

	
	$('a[href^="#"]').click(function () { 
			elementClick = $(this).attr("href");
			destination = $(elementClick).offset().top;
			$('html').animate( { scrollTop: destination }, 2000 );
			return false;
		});
	
	
	if ($(window).width() > 1140){
		let widthWin = $(window).width();
		let d = widthWin-1140;
		d = d/2;
		$('.strt_txt').css({'-webkit-transform' : 'translate(-'+d+'px, -30%)'});
	}
	
	if ($(window).width() < 1140){
		$('.strt_txt').css({'-webkit-transform' : 'translate(0, 65px)'});
	}

	
	$('#strt_btn').click(function(){
		$('.tdd_conteiner').fadeIn(700);
	});
	
	$('.tdd_cls').click(function(){
		$('.tdd_conteiner').fadeOut(700);
	});
	
	
	
	$('.close_icon_code').click(function(){
		$('.code').fadeOut(500);
		});
	
	$('.close_icon').click(function(){
		$('.modalWindow').slideUp();
		$('.modalWindow_background').fadeOut(400);
		$('#otxt').detach();
		$('#odtxt').detach();
		document.body.style.overflow = "auto";
		});

	$('.modalWindow_background').click(function(){
		if (event.target.id == 'modalWindow_background'){
			$('.modalWindow').slideUp();
			$('.modalWindow_background').fadeOut(400);
			$('#otxt').detach();
			$('#odtxt').detach();
			document.body.style.overflow = "auto";
		}
		});
		
	$('.close_icon_kviz').click(function(){
			$('.modalWindow_kviz').slideUp();
			$('.modalWindow_background_kviz').fadeOut(400);
			$('#otxt').detach();
			$('#odtxt').detach();
			document.body.style.overflow = "auto";
		});

	$('.modalWindow_background_kviz').click(function(){
		if (event.target.id == 'modalWindow_background_kviz'){
			if( $('#1_question').is(':hidden')&&
				$('#2_question').is(':hidden')&&
				$('#3_question').is(':hidden')&&
				$('#4_question').is(':hidden')&&
				$('#5_question').is(':hidden')&&
				$('#6_question').is(':hidden')&&
				$('#final').is(':hidden')){
					$('.modalWindow_kviz').slideUp();
					$('.modalWindow_background_kviz').fadeOut(400);
					$('#otxt').detach();
					document.body.style.overflow = "auto";
			}
		}
		});
	  
	$('.knopka').click(function(){
		var button = $(this).attr('id'); 
		if (button == 'kviz'){
			$('.modalWindow_background_kviz').fadeIn(400);
			$('#start_kviz').slideDown(400);
			document.body.style.overflow = "hidden";
		}
		
		if(	(button == 'zamer') ||
			(button == 'order_RP') ||
			(button == 'code') ||
			(button == 'callback') ||
			(button == 'callback_f') ||
			(button == 'order_RPAN') ||
			(button == 'order_KEY') ||
			(button == 'consultation')){
				if(button == 'zamer') {$('.order_form').append('<p id="otxt">Получить бесплатные замеры</p>');}
				
				if(button == 'code') {
						$('.order_form').append('<p id="otxt">Активировать промокод</p>');
						$('#mail_form').css({"display" : "none"});
						$('#code_form').css({"display" : "block"});
					}
				
				if(button == 'order_RP'){
						$('.order_form').append('<p id="otxt">Дизайн-проект интерьера</p>');
						$('.order_form').append('<p id="odtxt">Чтобы получить профессиональную консультацию, оставьте свои контактные данные и мы свяжемся с вами в ближайшее время</p>');
						$('#mail_form').css({"display" : "none"});
						$('#code_form').css({"display" : "none"});
					}
				if(button == 'order_RPAN'){
						$('.order_form').append('<p id="otxt">Ремонт и отделка</p>');
						$('.order_form').append('<p id="odtxt">Чтобы получить профессиональную консультацию и прайс на основные виды работ, оставьте свои контактные данные. Мы свяжемся с Вами в ближайшее время и отправим прайс с актуальными ценами Вам на почту.</p>');
						$('#mail_form').css({"display" : "block"});
						$('#code_form').css({"display" : "none"});
					}
				if(button == 'order_KEY'){
						$('.order_form').append('<p id="otxt">Ремонт с дизайном под ключ</p>');
						$('.order_form').append('<p id="odtxt">Чтобы получить профессиональную консультацию и прайс на основные виды работ, оставьте свои контактные данные. Мы свяжемся с Вами в ближайшее время и отправим прайс с актуальными ценами Вам на почту.</p>');
						$('#mail_form').css({"display" : "block"});
						$('#code_form').css({"display" : "none"});
					}
				if(button == 'callback') {
						$('.order_form').append('<p id="otxt">Заказать обратный звонок</p>');
						$('#mail_form').css({"display" : "none"});
						$('#code_form').css({"display" : "none"});
					}
				if(button == 'callback_f') {
						$('.order_form').append('<p id="otxt">Заказать обратный звонок</p>');
						$('#mail_form').css({"display" : "none"});
						$('#code_form').css({"display" : "none"});
						}
				if(button == 'consultation') {$('.order_form').append('<p id="otxt">Получить консультацию</p>');}
				$('.modalWindow_background').fadeIn(400);
				$('.modalWindow').slideDown(400);
				document.body.style.overflow = "hidden";
				document.forms['order_form'].elements[2].value = button; 
			}
		if ((button == 'strt_btn_send') || 
			(button == 'submit') ||	
			(button == 'rb_btn_send') || 
			(button == 'rb_btn_send_2')){
				if (button != 'submit'){
					document.forms['order_form'].elements[2].value = button; 
				}
				
				test_form(button);
		}

	});


//kviz

	$('.q_chek').click(function(){
		var button = $(this).attr('id');
		if(button == 'q1_1') {
			document.forms['kviz_form'].elements[0].value = '1';
			$("#q1_2").removeClass("checked");
			$("#q1_1").addClass("checked");
			}
		if(button == 'q1_2') {
			document.forms['kviz_form'].elements[0].value = '2';
			$("#q1_1").removeClass("checked");
			$("#q1_2").addClass("checked");
			}
		
		if(button == 'q3_1') {
			document.forms['kviz_form'].elements[2].value = '1';
			$("#q3_2").removeClass("checked");
			$("#q3_3").removeClass("checked");
			$("#q3_4").removeClass("checked");
			$("#q3_5").removeClass("checked");
			$("#q3_6").removeClass("checked");
			$("#q3_1").addClass("checked");
			}		
			
		if(button == 'q3_2') {
			document.forms['kviz_form'].elements[2].value = '2';
			$("#q3_1").removeClass("checked");
			$("#q3_3").removeClass("checked");
			$("#q3_4").removeClass("checked");
			$("#q3_5").removeClass("checked");
			$("#q3_6").removeClass("checked");
			$("#q3_2").addClass("checked");
			}
		if(button == 'q3_3') {
			document.forms['kviz_form'].elements[2].value = '3';
			$("#q3_1").removeClass("checked");
			$("#q3_2").removeClass("checked");
			$("#q3_4").removeClass("checked");
			$("#q3_5").removeClass("checked");
			$("#q3_6").removeClass("checked");
			$("#q3_3").addClass("checked");
			}
		if(button == 'q3_4') {
			document.forms['kviz_form'].elements[2].value = '4';
			$("#q3_1").removeClass("checked");
			$("#q3_2").removeClass("checked");
			$("#q3_3").removeClass("checked");
			$("#q3_5").removeClass("checked");
			$("#q3_6").removeClass("checked");
			$("#q3_4").addClass("checked");
			}
		if(button == 'q3_5') {
			document.forms['kviz_form'].elements[2].value = '5';
			$("#q3_1").removeClass("checked");
			$("#q3_2").removeClass("checked");
			$("#q3_3").removeClass("checked");
			$("#q3_4").removeClass("checked");
			$("#q3_6").removeClass("checked");
			$("#q3_5").addClass("checked");
			}
		if(button == 'q3_6') {
			document.forms['kviz_form'].elements[2].value = '6';
			$("#q3_1").removeClass("checked");
			$("#q3_2").removeClass("checked");
			$("#q3_3").removeClass("checked");
			$("#q3_4").removeClass("checked");
			$("#q3_5").removeClass("checked");
			$("#q3_6").addClass("checked");
			}
			
		if(button == 'q4_1') {
			document.forms['kviz_form'].elements[3].value = '1';
			$("#q4_2").removeClass("checked");
			$("#q4_3").removeClass("checked");
			$("#q4_4").removeClass("checked");
			$("#q4_1").addClass("checked");
			}		
		if(button == 'q4_2') {
			document.forms['kviz_form'].elements[3].value = '2';
			$("#q4_1").removeClass("checked");
			$("#q4_3").removeClass("checked");
			$("#q4_4").removeClass("checked");
			$("#q4_2").addClass("checked");
			}
		if(button == 'q4_3') {
			document.forms['kviz_form'].elements[3].value = '3';
			$("#q4_1").removeClass("checked");
			$("#q4_2").removeClass("checked");
			$("#q4_4").removeClass("checked");
			$("#q4_3").addClass("checked");
			}	
		if(button == 'q4_4') {
			document.forms['kviz_form'].elements[3].value = '4';
			$("#q4_1").removeClass("checked");
			$("#q4_2").removeClass("checked");
			$("#q4_3").removeClass("checked");
			$("#q4_4").addClass("checked");
			}
			
		if(button == 'q5_1') {
			document.forms['kviz_form'].elements[4].value = '1';
			$("#q5_2").removeClass("checked");
			$("#q5_3").removeClass("checked");
			$("#q5_4").removeClass("checked");
			$("#q5_1").addClass("checked");
			}		
		if(button == 'q5_2') {
			document.forms['kviz_form'].elements[4].value = '2';
			$("#q5_1").removeClass("checked");
			$("#q5_3").removeClass("checked");
			$("#q5_4").removeClass("checked");
			$("#q5_2").addClass("checked");
			}
		if(button == 'q5_3') {
			document.forms['kviz_form'].elements[4].value = '3';
			$("#q5_1").removeClass("checked");
			$("#q5_2").removeClass("checked");
			$("#q5_4").removeClass("checked");
			$("#q5_3").addClass("checked");
			}	
		if(button == 'q5_4') {
			document.forms['kviz_form'].elements[4].value = '4';
			$("#q5_1").removeClass("checked");
			$("#q5_2").removeClass("checked");
			$("#q5_3").removeClass("checked");
			$("#q5_4").addClass("checked");
			}
			
		if(button == 'q6_1') {
			document.forms['kviz_form'].elements[5].value = '1';
			$("#q6_2").removeClass("checked");
			$("#q6_3").removeClass("checked");
			$("#q6_1").addClass("checked");
			}		
		if(button == 'q6_2') {
			document.forms['kviz_form'].elements[5].value = '2';
			$("#q6_1").removeClass("checked");
			$("#q6_3").removeClass("checked");
			$("#q6_2").addClass("checked");
			}
		if(button == 'q6_3') {
			document.forms['kviz_form'].elements[5].value = '3';
			$("#q6_1").removeClass("checked");
			$("#q6_2").removeClass("checked");
			$("#q6_3").addClass("checked");
			}	
	});
	

});


function kviz(a){
		if (a == '1q'){
			let i = 1;
			while (i < 3) {
				$('#q1_'+i).removeClass("checked");
				i++;
			}
			$('#q1_'+document.forms['kviz_form'].elements[0].value).addClass("checked");
			$('#start_kviz').fadeOut(100);
			$('#1_question').fadeIn(400);
		}
		if (a == '2q'){
			document.getElementById('q3_s').value = document.forms['kviz_form'].elements[1].value;
			$('#1_question').fadeOut(100);
			$('#2_question').fadeIn(400);
		}
		if (a == '3q'){
			let i = 1;
			while (i < 7) {
				$('#q1_'+i).removeClass("checked");
				i++;
			}
			$('#q3_'+document.forms['kviz_form'].elements[2].value).addClass("checked");
			document.forms['kviz_form'].elements[1].value = document.getElementById('q3_s').value;
			$('#2_question').fadeOut(100);
			$('#3_question').fadeIn(400);
		}
		if (a == '4q'){
			let i = 1;
			while (i < 5) {
				$('#q4_'+i).removeClass("checked");
				i++;
			}
			$('#q4_'+document.forms['kviz_form'].elements[3].value).addClass("checked");
			$('#3_question').fadeOut(100);
			$('#4_question').fadeIn(400);
		}
		if (a == '5q'){
			let i = 1;
			while (i < 5) {
				$('#q5_'+i).removeClass("checked");
				i++;
			}
			$('#q5_'+document.forms['kviz_form'].elements[4].value).addClass("checked");
			$('#4_question').fadeOut(100);
			$('#5_question').fadeIn(400);
		}
		if (a == '6q'){
			let i = 1;
			while (i < 5) {
				$('#q5_'+i).removeClass("checked");
				i++;
			}
			$('#q6_'+document.forms['kviz_form'].elements[5].value).addClass("checked");
			$('#5_question').fadeOut(100);
			$('#6_question').fadeIn(400);
		}
		if (a == 'final'){
			$('#6_question').fadeOut(100);
			$('#final').fadeIn(400);
			let s = document.forms['kviz_form'].elements[1].value;  
				s = parseInt(s) | 0;
			let type = document.forms['kviz_form'].elements[2].value;
			let cost = null;
			let cost_2 = null;
			let proj = null;
			let a = 0;
			if (type == '5'){
				cost = 30;
			}
			if (type == '1'){
				if (s < 101) { cost = 25; }
				if ((s > 100) && (s < 201)) { cost = 22; }
				if (s > 200) { cost = 20; }	
				proj = cost*s;
			}
			if (type == '2'){
				if (s < 101) { cost = 30; }
				if ((s > 100) && (s < 201)) { cost = 26; }
				if (s > 200) { cost = 23; }	
				proj = cost*s;
			}
			if (type == '3'){
				if (s < 101) { cost = 25; }
				if ((s > 100) && (s < 201)) { cost = 22; }
				if (s > 200) { cost = 20; }	
				proj = cost*s;
			}
			if (type == '4'){
				if (s < 101) { cost = 25; }
				if ((s > 100) && (s < 201)) { cost = 22; }
				if (s >= 200) { cost = 20; }	
				proj = cost*s;
			}
			if (type == '5'){
				if (s < 101) { cost = 30; }
				if ((s > 100) && (s < 201)) { cost = 26; }
				if (s >= 200) { cost = 23; }	
				proj = cost*s;
			}
			if (type == '6'){
				if (s < 101) { cost = 25; cost_2 = 30; }
				if ((s > 100) && (s < 201)) { cost = 22; cost_2 = 26; }
				if (s >= 200) { cost = 20; cost_2 = 23; }
				let min = cost*s;
				let max = cost_2*s;
				proj = 'от '+min+' до '+max;
			}
			
			proj = proj+'';
			$('#f_text').text('Стоимость вашего дизайн-проекта:');
			$('#f_cost').text(proj.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+' $');
		}
		if (a == 'send'){
			document.forms['kviz_form'].elements[6].value = document.getElementById('kviz_phone').value;
			document.forms['kviz_form'].elements[7].value = document.getElementById('kviz_name').value;
			valid_phone_kviz();
		}
		
		if (a == 'end'){
			$('.modalWindow_kviz').slideUp();
			$('.modalWindow_background_kviz').fadeOut(400);
			document.body.style.overflow = "auto";
		}
		
		//кнопка назад
		
		if (a == 'start'){
			$('#start_kviz').fadeIn(400);
			$('#1_question').fadeOut(100);
		}
		if (a == '1q_b'){
			let i = 1;
			while (i < 3) {
				$('#q1_'+i).removeClass("checked");
				i++;
			}
			$('#q1_'+document.forms['kviz_form'].elements[0].value).addClass("checked");
			$('#2_question').fadeOut(100);
			$('#1_question').fadeIn(400);
		}
		if (a == '2q_b'){
			document.getElementById('q3_s').value = document.forms['kviz_form'].elements[1].value;
			$('#3_question').fadeOut(100);
			$('#2_question').fadeIn(400);
		}
		if (a == '3q_b'){
			let i = 1;
			while (i < 7) {
				$('#q1_'+i).removeClass("checked");
				i++;
			}
			$('#q3_'+document.forms['kviz_form'].elements[2].value).addClass("checked");
			document.forms['kviz_form'].elements[1].value = document.getElementById('q3_s').value;
			$('#4_question').fadeOut(100);
			$('#3_question').fadeIn(400);
		}
		if (a == '4q_b'){
			let i = 1;
			while (i < 5) {
				$('#q4_'+i).removeClass("checked");
				i++;
			}
			$('#q4_'+document.forms['kviz_form'].elements[3].value).addClass("checked");
			$('#5_question').fadeOut(100);
			$('#4_question').fadeIn(400);
		}
		if (a == '5q_b'){
			let i = 1;
			while (i < 5) {
				$('#q5_'+i).removeClass("checked");
				i++;
			}
			$('#q5_'+document.forms['kviz_form'].elements[4].value).addClass("checked");
			$('#6_question').fadeOut(100);
			$('#5_question').fadeIn(400);
		}
		if (a == '6q_b'){
			let i = 1;
			while (i < 5) {
				$('#q5_'+i).removeClass("checked");
				i++;
			}
			$('#q6_'+document.forms['kviz_form'].elements[5].value).addClass("checked");
			$('#final').fadeOut(100);
			$('#6_question').fadeIn(400);
		}
		
	}
	
function send_kviz(){
	function funcBuy(data){
		$('#final').fadeOut(100);
		$('#kviz_end').fadeIn(400);
	}
			
	var local = document.forms['kviz_form'].elements[0].value;
	var space = document.forms['kviz_form'].elements[1].value;
	var style = document.forms['kviz_form'].elements[2].value;
	var many = document.forms['kviz_form'].elements[3].value;
	var time = document.forms['kviz_form'].elements[4].value;
	var slave = document.forms['kviz_form'].elements[5].value;
	var phone = document.forms['kviz_form'].elements[6].value;
	var name = document.forms['kviz_form'].elements[7].value;
	dataLayer.push({'event': 'kviz'});
		$.ajax({
			type: 'POST',
			url:  "send_kviz.php",
			data: ({local: local,
					space: space, 
					style: style,
					many: many,
					time: time,
					slave: slave,
					name: name,
					phone: phone}),
			dataType: "html",
			success: funcBuy
		});	
}

//проверка адекватности данных
function test_form(button){
	var black_list = ['+38 (067) 625-89-89', '+38 (067) 692-01-88', '+38 (099) 320-72-20'];
	var form_name = 'order_form';
	if (button == 'strt_btn_send') { form_name = 'order_form_strt'; }		
	if (button == 'rb_btn_send') { form_name = 'order_form_prjct'; }		
	if (button == 'rb_btn_send_2') { form_name = 'order_form_price'; }	
	var test = 'ok';
	var name = document.forms[form_name].elements[0].value;
	var phone = document.forms[form_name].elements[1].value;
	//var code = document.forms[form_name].elements[4].value; 
	 

	if(name == ''){
		document.forms[form_name].elements[0].style.border = "1px solid red";
		test = 'error';
	}
	if(phone == ''){
		document.forms[form_name].elements[1].style.border = "1px solid red";
		test = 'error';
	}
	/*if ($('#code_form').css('display') == 'block'){
		if(code != '3173571'){
			document.forms[form_name].elements[4].style.border = "1px solid red";
			test = 'error';
		}
	}*/
	
	for (let i = 0; i < black_list.length; i++) {
		if (black_list[i] == phone) {
			test = 'error';
			alert ('Данный номер телефона находится в черном списке.');
		}
	}
	if (test == 'ok'){
		send(button);
	}
}

function valid_phone_kviz(){
	
	var test = 'ok';
	var phone = document.forms['kviz_form'].elements[6].value;
	var name = document.forms['kviz_form'].elements[7].value;
	
	if(phone == ''){
		$("#kviz_phone").css("border", "1px solid red");
		test = 'error';
	}
	if(name == ''){
		$("#kviz_name").css("border", "1px solid red");
		test = 'error';
	}
	if (test == 'ok'){
		send_kviz();
	}
}

//сброс стиля инпутов
function clear_bord(f_n,a){
	document.forms[f_n].elements[a].style.border = "1px solid #cccccc";	
}

function clear_bord_kviz(){
	$("#kviz_phone").css("border", "1px solid #c9c9c9");
}

function clear_bord_kviz_name(){
	$("#kviz_name").css("border", "1px solid #c9c9c9");
}


function send(button){
	function funcBuy(data){
		$('.modalWindow_background').fadeOut();
		document.location.replace("thank.php");
	}
			
	var form_name = 'order_form';
	if (button == 'strt_btn_send') { form_name = 'order_form_strt'; }		
	if (button == 'rb_btn_send') { form_name = 'order_form_prjct'; }		
	if (button == 'rb_btn_send_2') { form_name = 'order_form_price'; }		
	var name = document.forms[form_name].elements[0].value;
	var phone = document.forms[form_name].elements[1].value;
	var button = document.forms['order_form'].elements[2].value;
	var mail = document.forms['order_form'].elements[3].value;
	if(document.forms['order_form'].elements[2].value == 'zamer'){dataLayer.push({'event': 'FormSend'}); button = "Получить замер"; }
	if(document.forms['order_form'].elements[2].value == 'code'){dataLayer.push({'event': 'FormSend'}); button = "Промокод"; }
	if(document.forms['order_form'].elements[2].value == 'callback'){dataLayer.push({'event': 'FormSend'}); button = "Обратный звонок"; }
	if(document.forms['order_form'].elements[2].value == 'callback_f'){dataLayer.push({'event': 'FormSend'}); button = "Обратный звонок (снизу нажал)"; }
	if(document.forms['order_form'].elements[2].value == 'order_RP'){dataLayer.push({'event': 'FormSend'}); button = "Рабочий прект"; }
	if(document.forms['order_form'].elements[2].value == 'order_RPAN'){dataLayer.push({'event': 'FormSend'}); button = "Рабочий прект с авторским надзором"; }
	if(document.forms['order_form'].elements[2].value == 'order_KEY'){dataLayer.push({'event': 'FormSend'}); button = "Работа под ключ"; }
	if(document.forms['order_form'].elements[2].value == 'consultation'){dataLayer.push({'event': 'FormSend'}); button = "Получить консультацию"; }
	if(document.forms['order_form'].elements[2].value == 'strt_btn_send'){dataLayer.push({'event': 'FormSend'}); button = "Тест-драйв дизайнера"; }
	if(document.forms['order_form'].elements[2].value == 'rb_btn_send'){button = "Пример проекта"; }
	if(document.forms['order_form'].elements[2].value == 'rb_btn_send_2'){dataLayer.push({'event': 'FormSend'}); button = "Получить прайс"; }

		$.ajax({
			type: 'POST',
			url:  "send.php",
			data: ({name: name, phone: phone, mail: mail, button: button}),
			dataType: "html",
			success: funcBuy
		});	
	}