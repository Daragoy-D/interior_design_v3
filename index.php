<?
require_once 'mobDetect.php';
$detect = new Mobile_Detect;
if ( $detect->isMobile() ) { 
	$anim_duration = 'none';
	$mb_img = 'mob';
}
else{
	$anim_duration = '1.5s';
	$mb_img = '';
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PHQZTKP');</script>
<!-- End Google Tag Manager -->


	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '2405044859783090');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=2148442991903393&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->

	
	<script src="https://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="js/main.js?<?php echo(mt_rand(10000, 9999999))?>"></script>
	<script src="js/fotorama.js"></script>
	<script src="js/maskinput.js"></script>
	<script src="js/lazyload.min.js"></script>
	
	
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Студия дизайна интерьера 'PRIDE'. Дизайн интерьера квартир и частных домов, ремонт под ключ, 3D визуализация интерьера." />
	<meta name="keywords" content="дизайн интерьера, дизайн квартиры, дизайн дома, дизайн-проект интерьера, дизайн интерьера квартиры, дизайн интерьера дома, дизайн студия интерьера">
	<meta name='freelancehunt' content='3aad2f5ff13217e' />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nordy.css?<?php echo(mt_rand(10000, 9999999))?>">
	
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/code-fx/Pure-CSS3-Animated-Border@V1.0/css/animated-border/animated-border.min.css" />
	
	
	<link rel="stylesheet" href="css/sld.css">
	<script src="js/modernizr.js"></script>
	<script src="js/modernizr.custom.86080.js"></script>
	
	<?
	if ( $detect->isMobile() ){
		
	}
	else{
		echo '
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		<script src="js/wow.min.js"></script>';
	}
	
	?>

	
	<link rel="apple-touch-icon" sizes="57x57" href="ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="ico/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png">
	<link rel="manifest" href="ico/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="ico/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!--
    <link rel="icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	-->
	
	<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">


    <title>Дизайн интерьера квартир и частных домов, ремонт, 3D визуализация интерьера.</title>
	
</head>


<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHQZTKP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
	
	<?
	if ( $detect->isMobile() ){
		
	}
	else{
		echo '<script>
		new WOW().init();
	</script>';
	}
	
	?>
	

	<div class="code">
		<p class="knopka" id="code">У меня есть промокод!</p>
		<div id="code_close" >
			<svg class="close_icon_code" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg>
		</div>
	</div>
	

	<div class="scrollup">
		<div class="scrollup_icon"></div>
	</div>
	
	<div class="our_w_Window">
		<div id="d_i_k">
			<div id="fotorama_1" class="fotorama_1"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/pr/4/1.png"><img data-src="images/pr/4/1.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/2.png"><img data-src="images/pr/4/2.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/3.png"><img data-src="images/pr/4/3.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/4.png"><img data-src="images/pr/4/4.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/5.png"><img data-src="images/pr/4/5.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/6.png"><img data-src="images/pr/4/6.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/7.png"><img data-src="images/pr/4/7.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/8.png"><img data-src="images/pr/4/8.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/9.png"><img data-src="images/pr/4/9.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/10.png"><img data-src="images/pr/4/10.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/11.png"><img data-src="images/pr/4/11.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/12.png"><img data-src="images/pr/4/12.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/13.png"><img data-src="images/pr/4/13.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/14.png"><img data-src="images/pr/4/14.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/15.png"><img data-src="images/pr/4/15.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/16.png"><img data-src="images/pr/4/16.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/17.png"><img data-src="images/pr/4/17.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/18.png"><img data-src="images/pr/4/18.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/19.png"><img data-src="images/pr/4/19.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/20.png"><img data-src="images/pr/4/20.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/4/21.png"><img data-src="images/pr/4/21.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
			</div>
			<div id="fotorama_2" class="fotorama_2"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/pr/1/1.jpg"><img data-src="images/pr/1/1.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гостиная"></a>
				<a href="images/pr/1/2.jpg"><img data-src="images/pr/1/2.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гостиная"></a>
				<a href="images/pr/1/3.jpg"><img data-src="images/pr/1/3.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гостиная"></a>
				<a href="images/pr/1/4.jpg"><img data-src="images/pr/1/4.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гостиная"></a>
				<a href="images/pr/1/5.jpg"><img data-src="images/pr/1/5.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гостиная"></a>
				<a href="images/pr/1/6.jpg"><img data-src="images/pr/1/6.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гостиная"></a>
				<a href="images/pr/1/7.jpg"><img data-src="images/pr/1/7.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гостиная"></a>
				<a href="images/pr/1/8.jpg"><img data-src="images/pr/1/8.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гостиная"></a>
				<a href="images/pr/1/9.jpg"><img data-src="images/pr/1/9.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, кухня"></a>
				<a href="images/pr/1/10.jpg"><img data-src="images/pr/1/10.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, кухня"></a>
				<a href="images/pr/1/11.jpg"><img data-src="images/pr/1/11.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, кухня"></a>
				<a href="images/pr/1/12.jpg"><img data-src="images/pr/1/12.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, кухня"></a>
				<a href="images/pr/1/13.jpg"><img data-src="images/pr/1/13.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, спальня"></a>
				<a href="images/pr/1/14.jpg"><img data-src="images/pr/1/14.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, спальня"></a>
				<a href="images/pr/1/15.jpg"><img data-src="images/pr/1/15.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, спальня"></a>
				<a href="images/pr/1/16.jpg"><img data-src="images/pr/1/16.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, спальня"></a>
				<a href="images/pr/1/17.jpg"><img data-src="images/pr/1/17.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, детская"></a>
				<a href="images/pr/1/18.jpg"><img data-src="images/pr/1/18.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, детская"></a>
				<a href="images/pr/1/19.jpg"><img data-src="images/pr/1/19.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, детская"></a>
				<a href="images/pr/1/20.jpg"><img data-src="images/pr/1/20.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, детская"></a>
				<a href="images/pr/1/21.jpg"><img data-src="images/pr/1/21.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, детская"></a>
				<a href="images/pr/1/22.jpg"><img data-src="images/pr/1/22.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, кабинет"></a>
				<a href="images/pr/1/23.jpg"><img data-src="images/pr/1/23.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, кабинет"></a>
				<a href="images/pr/1/24.jpg"><img data-src="images/pr/1/24.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, кабинет"></a>
				<a href="images/pr/1/25.jpg"><img data-src="images/pr/1/25.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, ванная"></a>
				<a href="images/pr/1/26.jpg"><img data-src="images/pr/1/26.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, ванная"></a>
				<a href="images/pr/1/27.jpg"><img data-src="images/pr/1/27.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, ванная"></a>
				<a href="images/pr/1/28.jpg"><img data-src="images/pr/1/28.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, ванная"></a>
				<a href="images/pr/1/29.jpg"><img data-src="images/pr/1/29.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, ванная"></a>
				<a href="images/pr/1/30.jpg"><img data-src="images/pr/1/30.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, ванная"></a>
				<a href="images/pr/1/31.jpg"><img data-src="images/pr/1/31.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гардеробная"></a>
				<a href="images/pr/1/32.jpg"><img data-src="images/pr/1/32.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гардеробная"></a>
				<a href="images/pr/1/33.jpg"><img data-src="images/pr/1/33.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гардеробная"></a>
				<a href="images/pr/1/34.jpg"><img data-src="images/pr/1/34.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гардеробная"></a>
				<a href="images/pr/1/35.jpg"><img data-src="images/pr/1/35.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гостевая"></a>
				<a href="images/pr/1/36.jpg"><img data-src="images/pr/1/36.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гостевая"></a>
				<a href="images/pr/1/37.jpg"><img data-src="images/pr/1/37.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гостевая"></a>
				<a href="images/pr/1/38.jpg"><img data-src="images/pr/1/38.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, гостевая"></a>
				<a href="images/pr/1/39.jpg"><img data-src="images/pr/1/39.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, сауна"></a>
				<a href="images/pr/1/40.jpg"><img data-src="images/pr/1/40.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, сауна"></a>
				<a href="images/pr/1/41.jpg"><img data-src="images/pr/1/41.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, сауна"></a>
				<a href="images/pr/1/41.jpg"><img data-src="images/pr/1/42.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, сауна"></a>
				<a href="images/pr/1/41.jpg"><img data-src="images/pr/1/43.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, сауна"></a>
				<a href="images/pr/1/41.jpg"><img data-src="images/pr/1/44.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, сауна"></a>
				<a href="images/pr/1/41.jpg"><img data-src="images/pr/1/45.jpg" alt="дизайн интерьера Харьков, современный стиль, поселок Лесное, 3D-визуализация интерьера, сауна"></a>
			</div>
			
			<div id="fotorama_3" class="fotorama_3"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/pr/2/1.jpg"><img data-src="images/pr/2/1.jpg" alt="дизайн интерьера Харьков, современный стиль, ЖК Журавли, 3D-визуализация интерьера, спальня"></a>
				<a href="images/pr/2/2.jpg"><img data-src="images/pr/2/2.jpg" alt="дизайн интерьера Харьков, современный стиль, ЖК Журавли, 3D-визуализация интерьера, гостиная"></a>
				<a href="images/pr/2/3.jpg"><img data-src="images/pr/2/3.jpg" alt="дизайн интерьера Харьков, современный стиль, ЖК Журавли, 3D-визуализация интерьера, гостиная"></a>
				<a href="images/pr/2/4.jpg"><img data-src="images/pr/2/4.jpg" alt="дизайн интерьера Харьков, современный стиль, ЖК Журавли, 3D-визуализация интерьера, гостиная"></a>
				<a href="images/pr/2/5.jpg"><img data-src="images/pr/2/5.jpg" alt="дизайн интерьера Харьков, современный стиль, ЖК Журавли, 3D-визуализация интерьера, спальня"></a>
				<a href="images/pr/2/6.jpg"><img data-src="images/pr/2/6.jpg" alt="дизайн интерьера Харьков, современный стиль, ЖК Журавли, 3D-визуализация интерьера, спальня"></a>
				<a href="images/pr/2/7.jpg"><img data-src="images/pr/2/7.jpg" alt="дизайн интерьера Харьков, современный стиль, ЖК Журавли, 3D-визуализация интерьера, спальня"></a>
				<a href="images/pr/2/8.jpg"><img data-src="images/pr/2/8.jpg" alt="дизайн интерьера Харьков, современный стиль, ЖК Журавли, 3D-визуализация интерьера, ванная"></a>
				<a href="images/pr/2/9.jpg"><img data-src="images/pr/2/9.jpg" alt="дизайн интерьера Харьков, современный стиль, ЖК Журавли, 3D-визуализация интерьера, ванная"></a>
			</div>
			
			<div id="fotorama_4" class="fotorama_4"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/pr/3/1.jpg"><img data-src="images/pr/3/1.jpg" alt=""></a>
				<a href="images/pr/3/2.jpg"><img data-src="images/pr/3/2.jpg" alt=""></a>
				<a href="images/pr/3/3.jpg"><img data-src="images/pr/3/3.jpg" alt=""></a>
				<a href="images/pr/3/4.jpg"><img data-src="images/pr/3/4.jpg" alt=""></a>
				<a href="images/pr/3/5.jpg"><img data-src="images/pr/3/5.jpg" alt=""></a>
				<a href="images/pr/3/6.jpg"><img data-src="images/pr/3/6.jpg" alt=""></a>
				<a href="images/pr/3/7.jpg"><img data-src="images/pr/3/7.jpg" alt=""></a>
				<a href="images/pr/3/8.jpg"><img data-src="images/pr/3/8.jpg" alt=""></a>
				<a href="images/pr/3/9.jpg"><img data-src="images/pr/3/9.jpg" alt=""></a>
				<a href="images/pr/3/10.jpg"><img data-src="images/pr/3/10.jpg" alt=""></a>				
			</div>
			<div id="fotorama_5" class="fotorama_5"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/pr/5/22.jpg"><img data-src="images/pr/5/22.jpg" alt=""></a>
				<a href="images/pr/5/23.jpg"><img data-src="images/pr/5/23.jpg" alt=""></a>
				<a href="images/pr/5/24.jpg"><img data-src="images/pr/5/24.jpg" alt=""></a>
				<a href="images/pr/5/25.jpg"><img data-src="images/pr/5/25.jpg" alt=""></a>
				<a href="images/pr/5/26.jpg"><img data-src="images/pr/5/26.jpg" alt=""></a>
				<a href="images/pr/5/27.jpg"><img data-src="images/pr/5/27.jpg" alt=""></a>
				<a href="images/obg/4/1.jpg"><img data-src="images/obg/4/1.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/2.jpg"><img data-src="images/obg/4/2.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/3.jpg"><img data-src="images/obg/4/3.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/4.jpg"><img data-src="images/obg/4/4.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/5.jpg"><img data-src="images/obg/4/5.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/6.jpg"><img data-src="images/obg/4/6.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/7.jpg"><img data-src="images/obg/4/7.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/8.jpg"><img data-src="images/obg/4/8.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/9.jpg"><img data-src="images/obg/4/9.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/10.jpg"><img data-src="images/obg/4/10.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/11.jpg"><img data-src="images/obg/4/11.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/12.jpg"><img data-src="images/obg/4/12.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/13.jpg"><img data-src="images/obg/4/13.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/14.jpg"><img data-src="images/obg/4/14.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/15.jpg"><img data-src="images/obg/4/15.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/16.jpg"><img data-src="images/obg/4/16.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/17.jpg"><img data-src="images/obg/4/17.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/18.jpg"><img data-src="images/obg/4/18.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/19.jpg"><img data-src="images/obg/4/19.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/20.jpg"><img data-src="images/obg/4/20.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/4/21.jpg"><img data-src="images/obg/4/21.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
			
			</div>
			<div id="fotorama_6" class="fotorama_6"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/pr/6/63.jpg"><img data-src="images/pr/6/63.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/6/64.jpg"><img data-src="images/pr/6/64.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/6/65.jpg"><img data-src="images/pr/6/65.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/6/66.jpg"><img data-src="images/pr/6/66.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/6/67.jpg"><img data-src="images/pr/6/67.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/6/68.jpg"><img data-src="images/pr/6/68.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/6/69.jpg"><img data-src="images/pr/6/69.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/6/70.jpg"><img data-src="images/pr/6/70.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/6/71.jpg"><img data-src="images/pr/6/71.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/1.jpg"><img data-src="images/obg/5/1.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/2.jpg"><img data-src="images/obg/5/2.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/3.jpg"><img data-src="images/obg/5/3.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/4.jpg"><img data-src="images/obg/5/4.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/5.jpg"><img data-src="images/obg/5/5.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/6.jpg"><img data-src="images/obg/5/6.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/7.jpg"><img data-src="images/obg/5/7.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/8.jpg"><img data-src="images/obg/5/8.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/9.jpg"><img data-src="images/obg/5/9.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/10.jpg"><img data-src="images/obg/5/10.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/11.jpg"><img data-src="images/obg/5/11.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/12.jpg"><img data-src="images/obg/5/12.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/13.jpg"><img data-src="images/obg/5/13.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/14.jpg"><img data-src="images/obg/5/14.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/15.jpg"><img data-src="images/obg/5/15.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/16.jpg"><img data-src="images/obg/5/16.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/17.jpg"><img data-src="images/obg/5/17.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/18.jpg"><img data-src="images/obg/5/18.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/19.jpg"><img data-src="images/obg/5/19.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/20.jpg"><img data-src="images/obg/5/20.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/21.jpg"><img data-src="images/obg/5/21.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/22.jpg"><img data-src="images/obg/5/22.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/23.jpg"><img data-src="images/obg/5/23.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/24.jpg"><img data-src="images/obg/5/24.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/25.jpg"><img data-src="images/obg/5/25.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/26.jpg"><img data-src="images/obg/5/26.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/27.jpg"><img data-src="images/obg/5/27.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/28.jpg"><img data-src="images/obg/5/28.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/29.jpg"><img data-src="images/obg/5/29.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/30.jpg"><img data-src="images/obg/5/30.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/31.jpg"><img data-src="images/obg/5/31.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/32.jpg"><img data-src="images/obg/5/32.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/33.jpg"><img data-src="images/obg/5/33.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/34.jpg"><img data-src="images/obg/5/34.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/35.jpg"><img data-src="images/obg/5/35.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/36.jpg"><img data-src="images/obg/5/36.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/37.jpg"><img data-src="images/obg/5/37.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/38.jpg"><img data-src="images/obg/5/38.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/39.jpg"><img data-src="images/obg/5/39.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/40.jpg"><img data-src="images/obg/5/40.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/41.jpg"><img data-src="images/obg/5/41.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/42.jpg"><img data-src="images/obg/5/42.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/43.jpg"><img data-src="images/obg/5/43.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/44.jpg"><img data-src="images/obg/5/44.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/45.jpg"><img data-src="images/obg/5/45.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/46.jpg"><img data-src="images/obg/5/46.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/47.jpg"><img data-src="images/obg/5/47.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/48.jpg"><img data-src="images/obg/5/48.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/49.jpg"><img data-src="images/obg/5/49.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/50.jpg"><img data-src="images/obg/5/50.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/51.jpg"><img data-src="images/obg/5/51.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/52.jpg"><img data-src="images/obg/5/52.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/53.jpg"><img data-src="images/obg/5/53.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/54.jpg"><img data-src="images/obg/5/54.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/55.jpg"><img data-src="images/obg/5/55.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/56.jpg"><img data-src="images/obg/5/56.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/57.jpg"><img data-src="images/obg/5/57.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/58.jpg"><img data-src="images/obg/5/58.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/59.jpg"><img data-src="images/obg/5/59.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/60.jpg"><img data-src="images/obg/5/60.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/61.jpg"><img data-src="images/obg/5/61.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/5/62.jpg"><img data-src="images/obg/5/62.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
			</div>
			<div id="fotorama_7" class="fotorama_7"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/pr/7/1.jpg"><img data-src="images/pr/7/1.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/2.jpg"><img data-src="images/pr/7/2.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/3.jpg"><img data-src="images/pr/7/3.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/4.jpg"><img data-src="images/pr/7/4.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/5.jpg"><img data-src="images/pr/7/5.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/6.jpg"><img data-src="images/pr/7/6.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/7.jpg"><img data-src="images/pr/7/7.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/8.jpg"><img data-src="images/pr/7/8.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/9.jpg"><img data-src="images/pr/7/9.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/10.jpg"><img data-src="images/pr/7/10.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/11.jpg"><img data-src="images/pr/7/11.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/12.jpg"><img data-src="images/pr/7/12.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/13.jpg"><img data-src="images/pr/7/13.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/14.jpg"><img data-src="images/pr/7/14.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/15.jpg"><img data-src="images/pr/7/15.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/16.jpg"><img data-src="images/pr/7/16.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/17.jpg"><img data-src="images/pr/7/17.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/18.jpg"><img data-src="images/pr/7/18.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/19.jpg"><img data-src="images/pr/7/19.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/20.jpg"><img data-src="images/pr/7/20.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/21.jpg"><img data-src="images/pr/7/21.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/22.jpg"><img data-src="images/pr/7/22.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/23.jpg"><img data-src="images/pr/7/23.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/24.jpg"><img data-src="images/pr/7/24.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/25.jpg"><img data-src="images/pr/7/25.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/26.jpg"><img data-src="images/pr/7/26.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/27.jpg"><img data-src="images/pr/7/27.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/7/28.jpg"><img data-src="images/pr/7/28.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
			</div>
			<div id="fotorama_8" class="fotorama_8"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/pr/8/1.jpg"><img data-src="images/pr/8/1.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/2.jpg"><img data-src="images/pr/8/2.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/3.jpg"><img data-src="images/pr/8/3.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/4.jpg"><img data-src="images/pr/8/4.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/5.jpg"><img data-src="images/pr/8/5.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/6.jpg"><img data-src="images/pr/8/6.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/7.jpg"><img data-src="images/pr/8/7.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/8.jpg"><img data-src="images/pr/8/8.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/9.jpg"><img data-src="images/pr/8/9.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/10.jpg"><img data-src="images/pr/8/10.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/11.jpg"><img data-src="images/pr/8/11.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/12.jpg"><img data-src="images/pr/8/12.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/13.jpg"><img data-src="images/pr/8/13.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/14.jpg"><img data-src="images/pr/8/14.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/15.jpg"><img data-src="images/pr/8/15.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/16.jpg"><img data-src="images/pr/8/16.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/17.jpg"><img data-src="images/pr/8/17.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/18.jpg"><img data-src="images/pr/8/18.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/19.jpg"><img data-src="images/pr/8/19.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/20.jpg"><img data-src="images/pr/8/20.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/21.jpg"><img data-src="images/pr/8/21.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/22.jpg"><img data-src="images/pr/8/22.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/23.jpg"><img data-src="images/pr/8/23.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/24.jpg"><img data-src="images/pr/8/24.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/25.jpg"><img data-src="images/pr/8/25.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/26.jpg"><img data-src="images/pr/8/26.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/27.jpg"><img data-src="images/pr/8/27.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/28.jpg"><img data-src="images/pr/8/28.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/29.jpg"><img data-src="images/pr/8/29.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/8/30.jpg"><img data-src="images/pr/8/30.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
			</div>
			<div id="fotorama_9" class="fotorama_9"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/pr/9/1.jpg"><img data-src="images/pr/9/1.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/2.jpg"><img data-src="images/pr/9/2.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/3.jpg"><img data-src="images/pr/9/3.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/4.jpg"><img data-src="images/pr/9/4.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/5.jpg"><img data-src="images/pr/9/5.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/6.jpg"><img data-src="images/pr/9/6.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/7.jpg"><img data-src="images/pr/9/7.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/8.jpg"><img data-src="images/pr/9/8.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/9.jpg"><img data-src="images/pr/9/9.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/10.jpg"><img data-src="images/pr/9/10.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/11.jpg"><img data-src="images/pr/9/11.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/12.jpg"><img data-src="images/pr/9/12.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/13.jpg"><img data-src="images/pr/9/13.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/14.jpg"><img data-src="images/pr/9/14.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/15.jpg"><img data-src="images/pr/9/15.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/16.jpg"><img data-src="images/pr/9/16.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/17.jpg"><img data-src="images/pr/9/17.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/18.jpg"><img data-src="images/pr/9/18.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/19.jpg"><img data-src="images/pr/9/19.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/20.jpg"><img data-src="images/pr/9/20.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/21.jpg"><img data-src="images/pr/9/21.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/22.jpg"><img data-src="images/pr/9/22.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/pr/9/23.jpg"><img data-src="images/pr/9/23.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
			</div>
			
			<div id="fotorama_gp_1" class="fotorama_gp_1"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/obg/1/1.jpg"><img data-src="images/obg/1/1.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/1/2.jpg"><img data-src="images/obg/1/2.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/1/3.jpg"><img data-src="images/obg/1/3.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/1/4.jpg"><img data-src="images/obg/1/4.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/1/5.jpg"><img data-src="images/obg/1/5.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/1/6.jpg"><img data-src="images/obg/1/6.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/1/7.jpg"><img data-src="images/obg/1/7.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/1/8.jpg"><img data-src="images/obg/1/8.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/1/9.jpg"><img data-src="images/obg/1/9.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/1/10.jpg"><img data-src="images/obg/1/10.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/1/11.jpg"><img data-src="images/obg/1/11.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/1/12.jpg"><img data-src="images/obg/1/12.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/1/13.jpg"><img data-src="images/obg/1/13.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/1/14.jpg"><img data-src="images/obg/1/14.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/1/15.jpg"><img data-src="images/obg/1/15.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
			</div>
			<div id="fotorama_gp_2" class="fotorama_gp_2"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/obg/2/1.jpg"><img data-src="images/obg/2/1.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/2.jpg"><img data-src="images/obg/2/2.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/3.jpg"><img data-src="images/obg/2/3.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/4.jpg"><img data-src="images/obg/2/4.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/5.jpg"><img data-src="images/obg/2/5.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/6.jpg"><img data-src="images/obg/2/6.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/7.jpg"><img data-src="images/obg/2/7.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/8.jpg"><img data-src="images/obg/2/8.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/9.jpg"><img data-src="images/obg/2/9.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/10.jpg"><img data-src="images/obg/2/10.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/11.jpg"><img data-src="images/obg/2/11.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/12.jpg"><img data-src="images/obg/2/12.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/13.jpg"><img data-src="images/obg/2/13.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/14.jpg"><img data-src="images/obg/2/14.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/15.jpg"><img data-src="images/obg/2/15.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/2/16.jpg"><img data-src="images/obg/2/16.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
			</div>
			<div id="fotorama_gp_3" class="fotorama_gp_3"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/obg/3/1.jpg"><img data-src="images/obg/3/1.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/3/2.jpg"><img data-src="images/obg/3/2.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/3/3.jpg"><img data-src="images/obg/3/3.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/3/4.jpg"><img data-src="images/obg/3/4.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/3/5.jpg"><img data-src="images/obg/3/5.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/3/6.jpg"><img data-src="images/obg/3/6.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/3/7.jpg"><img data-src="images/obg/3/7.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/3/8.jpg"><img data-src="images/obg/3/8.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/3/9.jpg"><img data-src="images/obg/3/9.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/3/10.jpg"><img data-src="images/obg/3/10.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/3/11.jpg"><img data-src="images/obg/3/11.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/3/12.jpg"><img data-src="images/obg/3/12.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/3/13.jpg"><img data-src="images/obg/3/13.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/3/14.jpg"><img data-src="images/obg/3/14.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
			</div>
			<div id="fotorama_gp_4" class="fotorama_gp_4"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
			</div>
			<div id="fotorama_gp_5" class="fotorama_gp_5"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
			</div>
			<div id="fotorama_gp_6" class="fotorama_gp_6"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/obg/6/1.jpg"><img data-src="images/obg/6/1.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/2.jpg"><img data-src="images/obg/6/2.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/3.jpg"><img data-src="images/obg/6/3.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/4.jpg"><img data-src="images/obg/6/4.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/5.jpg"><img data-src="images/obg/6/5.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/6.jpg"><img data-src="images/obg/6/6.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/7.jpg"><img data-src="images/obg/6/7.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/8.jpg"><img data-src="images/obg/6/8.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/9.jpg"><img data-src="images/obg/6/9.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/10.jpg"><img data-src="images/obg/6/10.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/11.jpg"><img data-src="images/obg/6/11.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/12.jpg"><img data-src="images/obg/6/12.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/13.jpg"><img data-src="images/obg/6/13.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/14.jpg"><img data-src="images/obg/6/14.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/15.jpg"><img data-src="images/obg/6/15.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/16.jpg"><img data-src="images/obg/6/16.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/17.jpg"><img data-src="images/obg/6/17.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/18.jpg"><img data-src="images/obg/6/18.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/19.jpg"><img data-src="images/obg/6/19.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/20.jpg"><img data-src="images/obg/6/20.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/6/21.jpg"><img data-src="images/obg/6/21.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
			</div>
			<div id="fotorama_gp_7" class="fotorama_gp_7"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/obg/7/1.jpg"><img data-src="images/obg/7/1.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/7/2.jpg"><img data-src="images/obg/7/2.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/7/3.jpg"><img data-src="images/obg/7/3.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/7/4.jpg"><img data-src="images/obg/7/4.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/7/5.jpg"><img data-src="images/obg/7/5.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/7/6.jpg"><img data-src="images/obg/7/6.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/7/7.jpg"><img data-src="images/obg/7/7.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/7/8.jpg"><img data-src="images/obg/7/8.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/7/9.jpg"><img data-src="images/obg/7/9.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/7/10.jpg"><img data-src="images/obg/7/10.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/7/11.jpg"><img data-src="images/obg/7/11.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/7/12.jpg"><img data-src="images/obg/7/12.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/7/13.jpg"><img data-src="images/obg/7/13.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
			</div>
			<div id="fotorama_gp_8" class="fotorama_gp_8"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/obg/8/1.jpg"><img data-src="images/obg/8/1.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/2.jpg"><img data-src="images/obg/8/2.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/3.jpg"><img data-src="images/obg/8/3.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/4.jpg"><img data-src="images/obg/8/4.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/5.jpg"><img data-src="images/obg/8/5.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/6.jpg"><img data-src="images/obg/8/6.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/7.jpg"><img data-src="images/obg/8/7.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/8.jpg"><img data-src="images/obg/8/8.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/9.jpg"><img data-src="images/obg/8/9.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/10.jpg"><img data-src="images/obg/8/10.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/11.jpg"><img data-src="images/obg/8/11.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/12.jpg"><img data-src="images/obg/8/12.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/13.jpg"><img data-src="images/obg/8/13.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/14.jpg"><img data-src="images/obg/8/14.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/15.jpg"><img data-src="images/obg/8/15.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/16.jpg"><img data-src="images/obg/8/16.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/17.jpg"><img data-src="images/obg/8/17.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/18.jpg"><img data-src="images/obg/8/18.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/19.jpg"><img data-src="images/obg/8/19.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/20.jpg"><img data-src="images/obg/8/20.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/21.jpg"><img data-src="images/obg/8/21.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/22.jpg"><img data-src="images/obg/8/22.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/23.jpg"><img data-src="images/obg/8/23.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/24.jpg"><img data-src="images/obg/8/24.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/25.jpg"><img data-src="images/obg/8/25.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/26.jpg"><img data-src="images/obg/8/26.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/8/27.jpg"><img data-src="images/obg/8/27.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
			</div>
			<div id="fotorama_gp_9" class="fotorama_gp_9"
				data-auto="false"
				data-loop="true"
				data-nav="thumbs"
				data-clicktransition="dissolve"
				data-transition="slide"
				data-allowfullscreen="native">
				<a href="images/obg/9/1.jpg"><img data-src="images/obg/9/1.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/2.jpg"><img data-src="images/obg/9/2.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/3.jpg"><img data-src="images/obg/9/3.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/4.jpg"><img data-src="images/obg/9/4.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/5.jpg"><img data-src="images/obg/9/5.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/6.jpg"><img data-src="images/obg/9/6.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/7.jpg"><img data-src="images/obg/9/7.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/8.jpg"><img data-src="images/obg/9/8.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/9.jpg"><img data-src="images/obg/9/9.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/10.jpg"><img data-src="images/obg/9/10.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/11.jpg"><img data-src="images/obg/9/11.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/12.jpg"><img data-src="images/obg/9/12.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/13.jpg"><img data-src="images/obg/9/13.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/14.jpg"><img data-src="images/obg/9/14.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/15.jpg"><img data-src="images/obg/9/15.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/16.jpg"><img data-src="images/obg/9/16.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/17.jpg"><img data-src="images/obg/9/17.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/18.jpg"><img data-src="images/obg/9/18.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/19.jpg"><img data-src="images/obg/9/19.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/20.jpg"><img data-src="images/obg/9/20.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/21.jpg"><img data-src="images/obg/9/21.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/22.jpg"><img data-src="images/obg/9/22.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				<a href="images/obg/9/23.jpg"><img data-src="images/obg/9/23.jpg" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"></a>
				</div>
			
		</div>
	</div>
	
	<div class="modalWindow_background" id="modalWindow_background">
	<svg class="close_icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg>
		<div class="modalWindow">
			<form method="post" id="ajax_form" name="order_form" >
				<div class="order_form"></div>
				<!--<p>Оставьте свои контактные данные и наши специалисты свяжутся с Вами в ближайшее время.</p>-->
				<input onclick="clear_bord('order_form',0);" type="text" name="name" placeholder="Ваше имя" /><br>
				<input class="tel_mask" onclick="clear_bord('order_form',1);" type="text" name="phonenumber" placeholder="Телефон" /><br>
				<input type="hidden" name="button" value=""/>
				<input id="mail_form" onclick="clear_bord('order_form',3);" type="text" name="mail_qq" placeholder="E-mail" /><br>
				<input id="code_form" onclick="clear_bord('order_form',4);" type="text" name="code_qq" placeholder="Ваш промокод" style="display: none; margin-top: 0;" /><br>
				
				<div class="knopka" id="submit">
					<a href="javascript:void(0);" class="knopka_bl_2">Отправить</a>
				</div>
			</form>
		</div>
	</div>
	<div class="modalWindow_background_kviz" id="modalWindow_background_kviz">
	<svg class="close_icon_kviz" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg>
		<div class="modalWindow_kviz" id="start_kviz" style="display: none;">
			<p style="text-align: center;">Пройдите простой тест из 7 вопросов и получите примерную стоимость вашего пректа</p>
			<div class="button_kviz" id="next_1">
				<a href="javascript: kviz('1q');">Начать тест</a>
			</div>
		</div>
		
		<div class="modalWindow_kviz" id="1_question" style="display: none;">
			<p>Вам нужен дизайн</p>
			<div class="kviz_progress" id="pr_14"></div>
			<div class="question">
				<div class="question_wrap" style="display: flex">
					<div class="q_chek checked" id="q1_1"><div></div>Квартиры</div>
					<div class="q_chek" id="q1_2"><div></div>Дома</div>
				</div>
			</div>
			<div class="wrap" style="display: flex;">
				<div class="button_kviz" id="back">
					<a href="javascript: kviz('start');">&#8592; Назад</a>
				</div>
				<div class="button_kviz" id="next">
					<a href="javascript: kviz('2q');">Далее &#8594;</a>
				</div>
			</div>
		</div>
		
		<div class="modalWindow_kviz" id="2_question" style="display: none;">
			<p>Какая площадь помещения</p>
			<div class="kviz_progress" id="pr_28"></div>
			<div class="question">
				<div class="question_wrap" style="display: flex">
					<input id="q3_s" type="text" placeholder="100" onkeyup = "this.value=parseInt(this.value) | 0" style="margin: 0; height: 45px;"/>
					<div style="border: none;
								font-size: 25px;
								font-weight: 300;
								padding-top: 2px;
								padding-left: 15px;
								width: 50px;">м&sup2;</div>
				</div>
			</div>
			<div class="wrap" style="display: flex;">
				<div class="button_kviz" id="back">
					<a href="javascript: kviz('1q_b');">&#8592; Назад</a>
				</div>
				<div class="button_kviz" id="next">
					<a href="javascript: kviz('3q');">Далее &#8594;</a>
				</div>
			</div>
		</div>
		
		<div class="modalWindow_kviz" id="3_question" style="display: none;">
			<p>В каком стиле вы хотите интерьер</p>
			<div class="kviz_progress" id="pr_42"></div>
			<div class="question">
				<div class="question_wrap" style="display: flex">
					<div class="q_chek checked" id="q3_1"><div></div>Минимализм</div>
					<div class="q_chek" id="q3_2"><div></div>Эко-стиль</div>
				</div>
				<div class="question_wrap" style="display: flex">
					<div class="q_chek" id="q3_3"><div></div>Лофт</div>
					<div class="q_chek" id="q3_4"><div></div>Скандинавский</div>
				</div>
				<div class="question_wrap" style="display: flex">
					<div class="q_chek" id="q3_5"><div></div>Нео-классика</div>
					<div class="q_chek" id="q3_6"><div></div>Не знаю</div>
				</div>
			</div>
			<div class="wrap" style="display: flex;">
				<div class="button_kviz" id="back">
					<a href="javascript: kviz('2q_b');">&#8592; Назад</a>
				</div>
				<div class="button_kviz" id="next">
					<a href="javascript: kviz('4q');">Далее &#8594;</a>
				</div>
			</div>
		</div>
		
		<div class="modalWindow_kviz" id="4_question" style="display: none;">
			<p>Какой бюджет планируете потратить на реализацию проекта</p>
			<div class="kviz_progress" id="pr_56"></div>
			<div class="question">
				<div class="question_wrap" style="display: flex">
					<div class="q_chek checked" id="q4_1"><div></div>5 000 - 10 000$</div>
					<div class="q_chek" id="q4_2"><div></div>10 000 - 20 000$</div>
				</div>
				<div class="question_wrap" style="display: flex">
					<div class="q_chek" id="q4_3"><div></div>20 000 - 30 000$</div>
					<div class="q_chek" id="q4_4"><div></div>Более 30 000$</div>
				</div>
			</div>
			<div class="wrap" style="display: flex;">
				<div class="button_kviz" id="back">
					<a href="javascript: kviz('3q_b');">&#8592; Назад</a>
				</div>
				<div class="button_kviz" id="next">
					<a href="javascript: kviz('5q');">Далее &#8594;</a>
				</div>
			</div>
		</div>
		
		<div class="modalWindow_kviz" id="5_question" style="display: none;">
			<p>Когда вы хотите начать ремонтные работы</p>
			<div class="kviz_progress" id="pr_70"></div>
			<div class="question">
				<div class="question_wrap w100" style="display: block">
					<div class="q_chek checked" id="q5_2"><div></div>Сразу по готовности дизайн проекта</div>
				</div>
				<div class="question_wrap w100" style="display: block">
					<div class="q_chek" id="q5_3"><div></div>В течении года</div>
					<div class="q_chek" id="q5_4"><div></div>Через год и более</div>
				</div>
			</div>
			<div class="wrap" style="display: flex;">
				<div class="button_kviz" id="back">
					<a href="javascript: kviz('4q_b');">&#8592; Назад</a>
				</div>
				<div class="button_kviz" id="next">
					<a href="javascript: kviz('6q');">Далее &#8594;</a>
				</div>
			</div>
		</div>
		
		<div class="modalWindow_kviz" id="6_question" style="display: none;">
			<p>Насколько вы готовы учавствовать в процессе ремонтных работ</p>
			<div class="kviz_progress" id="pr_84"></div>
			<div class="question">
				<div class="question_wrap w100" style="display: block">
					<div class="q_chek checked" id="q6_1"><div></div>Хочу контролировать весь процесс</div>
					<div class="q_chek" id="q6_2"><div></div>Моё участие + помощь дизайнера</div>
				</div>
				<div class="question_wrap w100" style="display: block">
					<div class="q_chek" id="q6_3"><div></div>Хочу работу "под ключ"</div>
				</div>
			</div>
			<div class="wrap" style="display: flex;">
				<div class="button_kviz" id="back">
					<a href="javascript: kviz('5q_b');">&#8592; Назад</a>
				</div>
				<div class="button_kviz" id="next">
					<a href="javascript: kviz('final');">Далее &#8594;</a>
				</div>
			</div>
		</div>
		
		<div class="modalWindow_kviz" id="final" style="display: none;">
			<p id="f_text" style="text-align: center;"></p>
			<p id="f_cost" 
				style="	width: fit-content;
						margin: auto;
						padding: 2px 10px;
						margin-bottom: 10px;"></p>
			<p style="font-weight: normal; font-size: 15px;">Чтобы получить более подробную информацию - оставьте свои контактные данные.</p>
			<div class="kviz_progress" id="pr_100"></div>
			<div class="question">
				<div class="question_wrap" style="display: block">
					<input onclick="clear_bord_kviz_name();" id="kviz_name" type="text" placeholder="Ваше имя" style="margin: 0 0 10px 0; height: 45px;"/><br>
					<input class="tel_mask" onclick="clear_bord_kviz();" id="kviz_phone" type="text" placeholder="Телефон" style="margin: 0; height: 45px;"/>
				</div>
			</div>
			<div class="wrap" style="display: flex;">
				<div class="button_kviz" id="back">
					<a href="javascript: kviz('6q_b');">&#8592; Назад</a>
				</div>
				<div class="button_kviz" id="next">
					<a href="javascript: kviz('send');">Далее &#8594;</a>
				</div>
			</div>
		</div>
		
		<div class="modalWindow_kviz" id="kviz_end" style="display: none;">
			<p style="text-align: center; font-size: 30px;">Спасибо!</p>
			<p style="text-align: center; font-weight: 500; margin-bottom: 40px;">Мы обработаем ваши данные и свяжемся с вами в ближайшее время</p>
			
			<div class="wrap" style="display: flex;">
				<div class="button_kviz" id="next">
					<a href="javascript: kviz('end');">Закрыть</a>
				</div>
			</div>
		</div>		
	</div>
	<form method="post" name="kviz_form" >
		<input type="hidden" name="q1" value="1"/>
		<input type="hidden" name="q2" value="100"/>
		<input type="hidden" name="q3" value="1"/>
		<input type="hidden" name="q4" value="1"/>
		<input type="hidden" name="q5" value="2"/>
		<input type="hidden" name="q6" value="1"/>
		<input type="hidden" name="q7" value=""/>
		<input type="hidden" name="q8" value=""/>
	</form>
    <header class="header">
        <div class="menu wow animate_animated animate__fadeInDown" data-wow-duration="<?echo $anim_duration;?>">
			<div class="menu_wrap">
				<p class="top_text_head">студия дизайна интерьера "pride"</p>
				<div class="left_m"><img src="img/logo_p.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/></div>
				<div class="center_m">
					<ul id="nav">
						<li><a class="nav_lnk" href="#cost">Услуги</a></li>
						<li><a class="nav_lnk" href="#portfolio">примеры работ</a></li>
						<!--<li><a class="nav_lnk" href="#gpr">объекты</a></li>-->
						<li><a class="nav_lnk" href="#steps">этапы работ</a></li>
					</ul>
				</div>
				<div class="right_m">
					<p class="telt">
						<a onclick="dataLayer.push({'event': 'call'});" href="viber://chat?number=+380964011697" target="blank">Viber&nbsp;/&nbsp;</a> 
						<a onclick="dataLayer.push({'event': 'call'});" href="https://t.me/@Interior_Design_PrideStudio" target="blank">Telegram</a>
					</p>
					<a onclick="dataLayer.push({'event': 'call'});" class="tel" href="tel:+380964011697">+38 096 401 16 97</a>
					<div class="knopka" id="callback">
					  <a href="javascript:void(0);" class="knopka_bl">Обратный звонок</a>
					</div>
				</div>
			</div>
		</div>
		<div class="menu_mob wow animate_animated animate__fadeInDown" data-wow-duration="<?echo $anim_duration;?>">
			<div class="left_m_mob"><img src="img/logo.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/></div>
			<div class="right_m">
				<p class="telt">
					<a onclick="dataLayer.push({'event': 'call'});" href="viber://add?number=+380964011697" target="blank"><img src="img/viber.png"></a> 
					<a onclick="dataLayer.push({'event': 'call'});" href="https://t.me/Interior_Design_PrideStudio" target="blank"><img src="img/teleg.png"></a>
				</p>
				<a onclick="dataLayer.push({'event': 'call'});" class="tel" href="tel:+380964011697">+38 096 401 16 97</a>		
			</div>
		</div>
    </header>
	<div class="tdd_conteiner">
		<div class="tdd">
		<svg class="tdd_cls" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg>
			<p class="ghhh">Тест-драйв дизайнера</p>
			<div class="hhhh">
				<p class="sas">Мы хотим, чтобы вы жили в комфорте и красоте. Поэтому мы предлагаем новые идеи 
					дизайна до тех пор, пока вам не будет нравиться <span>абсолютно ВСЁ</span>. <br><br>
					А для того, чтобы вы убедились в нашем профессионализме, мы не берем с вас денег за
					выезд на замеры, консультацию дизайнера и разработку планировочного решения. <br><br>
					Подписание договора и внесение предоплаты только <span>ПОСЛЕ УТВЕРЖДЕНИЯ</span> планировки.</p>
				<form method="post" id="ajax_form_1" name="order_form_strt" >	
					<div class="tdd_form">
						<p class="mob_displ_none">Чтобы заказать <span>ТЕСТ-ДРАЙВ</span> дизайнера <span>БЕСПЛАТНО</span> заполните форму и оставьте заявку:</p>
						<p class="mob_displ_block">Чтобы заказать <span>консультацию</span> дизайнера, выезд на замеры, 3 варианта планировки <span>бесплатно</span> заполните форму и оставьте заявку:</p>
						<p>Имя:</p>
						<input id="tdd_name" type="text" placeholder="Ваше имя"/>
						<p>Телефон:</p>
						<input class="tel_mask" id="tdd_phone" type="text" placeholder="Телефон"/>
						<p>Почта:</p>
						<input id="tdd_mail" type="mail" placeholder="E-mail"/>
						<div class="knopka" id="strt_btn_send">
							<a class="knopka_bl">оставить заявку</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<section id="page">
        <ul class="cb-slideshow">
            <li><span></span><div><h3>Дизайн интерьера и ремонт в Харькове и области</h3></div></li>
            <li><span></span><div><h3>Разработаем яркий и профессиональный дизайн</h3></div></li>
            <li><span></span><div><h3>Удобное планировочное решение для комфортной жизни</h3></div></li>
            <li><span></span><div><h3>Всегда высокое качество визуализаций</h3></div></li>
            <li><span></span><div><h3>Полный пакет чертежей и рабочей документации</h3></div></li>
            <li><span></span><div><h3>Скидки на отделочный материалы и комплектующие</h3></div></li>
        </ul>
        <div class="container_1">
            <div class="strt_txt">
				<div style="display:none;" class="knopka wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>" id="strt_btn">
					<a class="knopka_bl">узнать подробнее</a>
				</div>
			</div>
        </div>
    </section>
	
	<section class="uniquedisign" style="display: none;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="strt_txt">
					<h1>Дизайн интерьера и ремонт частных домов и квартир под ключ в Харькове</h1>
					<p class="strt_txt_p desc_on">Разработаем яркий и профессиональный дизайн<br>который понравится вам на вcе 100% или <span>вернем деньги</span></p>
					<p class="strt_txt_p mob_on">100% яркий и профессиональный дизайн или<br><span>вернем деньги</span></p>
					<h2 class="desc_on">закажите тест-драйв дизайнера<br>и получите 3 варианта удобной планировки<br>бесплатно всего за 3 дня</h2>
					<h2 class="mob_on">тест-драйв дизайнера<br>бесплатно</h2>
					
					<div class="knopka wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>" id="strt_btn">
						<a class="knopka_bl">узнать подробнее</a>
					</div>
				</div>
            </div>
        </div>
    </section>

	
	<section class="pricebox" id="cost">
            <h2 class="text-center text-uppercase wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>" style="font-weight: 600">НАШИ УСЛУГИ</h2>
				<p class="n_text wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>">Студия дизайна интерьера PRIDE - компания полного цикла,<br> которая специализируется на дизайне и ремонте жилых квартир и домов.<br>
								Обратившись к нам, вы можете заказать весь комплекс услуг под ключ или отдельную часть работ.<br>
	                           </p>
				<div class="rect_1_ggg_cont">
					<div class="rect_1_ggg wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>">
						<div class="brd-win">
							<h3 class="mb-3 text-center title-packet">Дизайн-проект<br>интерьера</h3>
							<ul class="list-unstyled gall__list qqq_list">
								<li>Разработка планировочного решения</li>
								<li>3D-визуализация всех помещений</li>
								<li>Интерактивная 3D модель Вашего дома/квартиры</li>
								<li>Рабочая документация</li>
								<li>Спецификация мебели и материалов</li>
							</ul>
							<div class="knopka" id="order_RP">
								<a href="javascript:void(0);" class="knopka_bl_3">Обсудить проект</a>
							</div>
						</div>
					</div>
					<div class="rect_1_ggg wow animate_animated animate__fadeInUp" data-wow-duration="<?echo $anim_duration;?>">
						<div class="brd-win">
							<h3 class="ttt_ctr_2 mb-3 text-center title-packet">Ремонт с дизайном<br>под ключ</h3>
							<ul class="ttt_ctr list-unstyled gall__list ">
								<li>Дизайн-проект интерьера</li>
								<li>Ремонтно-отделочные работы</li>
								<li>Полная комплектация объекта оборудованием, мебелью и декором</li>
								<li>Авторское сопровождение дизайнера</li>
								<li>Еженедельный отчет о выполненных работах</li>
								<li>Персональный менеджер</li>
							</ul>
							<div class="knopka" id="order_KEY">
								<a href="javascript:void(0);" class="knopka_bl_3">Обсудить проект</a>
							</div>
						</div>
					</div>
					<div class="rect_1_ggg wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>">
						<div class="brd-win effect7">
							<h3 class="mb-3 text-center title-packet">Ремонт и отделка</h3>
							<ul class="list-unstyled gall__list qqq_list marg_listMob">
								<li>Все виды ремонтно-строительных работ:</li>
									<ol class="sub_list">
										<li>Общестроительные работы</li>
										<li>Электромонтажные работы</li>
										<li>Сантехнические работы</li>
										<li>Отделочные работы</li>
									</ol>
								<li>Закупка и доставка материалов</li>
								<li>Установка оборудования</li>
								<li>Еженедельный отчет о выполненных работах</li>
								<li>Персональный менеджер</li>
							</ul>
							<div class="knopka" id="order_RPAN">
								<a href="javascript:void(0);" class="knopka_bl_3">Получить прайс</a>
							</div>
						</div>
					</div>
				</div>
    </section>
	
		
	<section class="manysliders" id="portfolio" >
	
            <h2 class="text-center text-uppercase wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>"><b>примеры наших работ</b></h2>
			
			<div class="our_w_blc_wrap">
				
				<div class="our_w_blc wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/pr/7/1<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_7 = $('#fotorama_7').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_7.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>2-х комнатная квартира, 81м², по улице Родниковая</p>
				</div>
				
				<div class="our_w_blc wow animate_animated animate__fadeInUp" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/pr/1/1<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_2 = $('#fotorama_2').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_2.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>Дом в коттеджном поселке "Лесное", 5 комнат, 200м²</p>
				</div>
				
				<div class="our_w_blc wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/pr/8/1<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_8 = $('#fotorama_8').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_8.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>3-х комнатная квартира, 88м², Пл. Конституции</p>
				</div>
				<!--
				<div style="display:none;" class="our_w_blc wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/pr/2/1<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_3 = $('#fotorama_3').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_3.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>2-х комнатная квартира, 65м², ЖК Журавли</p>
				</div>-->
			</div>
			
			<div class="our_w_blc_wrap">
				<div class="our_w_blc wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/pr/3/1<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_4 = $('#fotorama_4').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_4.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>3-х комнатная квартира, 150м², проспект Науки</p>
				</div>
				
				<div class="our_w_blc wow animate_animated animate__fadeInUp" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/pr/5/22<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_5 = $('#fotorama_5').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_5.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>3-х комнатная квартира, 100м², улица Космическая</p>
				</div>
				
				<div class="our_w_blc wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/pr/6/63<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_6 = $('#fotorama_6').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_6.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>5-ти комнатная квартире, 180 м², ЖК Пролисок</p>
				</div>
			</div>
			
			<div class="our_w_blc_wrap">
				<!--
				<div style="display:none;" class="our_w_blc wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/pr/4/1<?echo $mb_img;?>.png"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" 
							onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_1 = $('#fotorama_1').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_1.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>ЖК Континенталь, Харьков, 3-х комнатная квартира</p>
				</div>-->
			</div>
			
			<div class="our_w_blc_wrap">
				<div class="our_w_blc wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/obg/1/1<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_gp_1 = $('#fotorama_gp_1').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_gp_1.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>Квартира 102 м² на Героев Сталинграда </p>
				</div>
				
				<div class="our_w_blc wow animate_animated animate__fadeInUp" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/obg/2/1<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_gp_2 = $('#fotorama_gp_2').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_gp_2.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>Квартира, 100м² в ЖК Авангард </p>
				</div>
				
				<div class="our_w_blc wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/pr/9/12<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_9 = $('#fotorama_9').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_9.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>4-х комнатная квартира, 120м², по улице Кацарская</p>
				</div>
				<!--
				<div style="display:none;" class="our_w_blc wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/obg/6/1<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_gp_6 = $('#fotorama_gp_6').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_gp_6.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>3-х комнатная квартира, 100м², ЖК Фламинго</p>
				</div>
				
				<div style="display:none;" class="our_w_blc wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/obg/3/1<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_gp_3 = $('#fotorama_gp_3').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_gp_3.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>2-х комнатная квартира под ключ в ЖК Садовый</p>
				</div>
			</div>
			
			<div class="our_w_blc_wrap">
				<div style="display:none;" class="our_w_blc wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/obg/4/1<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_gp_4 = $('#fotorama_gp_4').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_gp_4.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>3-х комнатная квартира, 100м², улица Космическая</p>
				</div>
				
				<div style="display:none;" class="our_w_blc wow animate_animated animate__fadeInUp" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/obg/5/1<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_gp_5 = $('#fotorama_gp_5').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_gp_5.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>5-ти комнатная квартире, 180 м², ЖК Пролисок</p>
				</div>-->
				
			</div>
			
			<div class="our_w_blc_wrap">
				<div class="our_w_blc wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/obg/7/1<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_gp_7 = $('#fotorama_gp_7').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_gp_7.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>2-х комнатная квартира на улице Малышева</p>
				</div>
				
				<div class="our_w_blc wow animate_animated animate__fadeInUp" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/obg/8/1<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_gp_8 = $('#fotorama_gp_8').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_gp_8.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>3-х комнатная квартира, 100м², МЖК Интернационалист</p>
				</div>
				
				<div class="our_w_blc wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>">
					<img class="lazy" src="img/tmb.gif" data-src="images/obg/9/1<?echo $mb_img;?>.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
					<div class="knopka gfd" onclick="
										$('.our_w_Window').css({'display' : 'block'});
										fotorama_gp_9 = $('#fotorama_gp_9').fotorama({allowfullscreen: true}).data('fotorama');
										fotorama_gp_9.requestFullScreen();
									">
						<a href="javascript:void(0);" class="gala">Смотреть</a>
					</div>
					<p>Дом в коттеджном поселке "Сокольники", 200м²</p>
				</div>
			</div>
			
			<p class="n_text wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>">Пройдите тест из 7 вопросов и получите стоимость вашего проекта прямо сейчас</p>
			<div class="knopka wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>" id="kviz">
				<a href="javascript:void(0);" class="knopka_bl">Просчитать стоимость проекта</a>
			</div>

    </section>

	<section class="interakt3D">
		<h2 style="margin: 70px 0 0 0;" class="padd_20 text-center text-uppercase marg_0_mob wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>"><b>Интерактивная 3D модель интерьера</b></h2>
		<p class="mt-3 header-text wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>"
				style="max-width: 1140px; text-align: center; margin: auto; margin-bottom: 40px;">Для того, чтобы вы могли полностью погрузиться в атмосферу и почувствовать себя внутри вашего будущего жилища, мы обязательно даем вам интерактивную 3D модель интерьера на этапе удтверждения дизайна.</p>
		
		<script src="https://static.kuula.io/embed.js" data-kuula="https://kuula.co/share/collection/7lcmf?fs=1&vr=0&sd=1&thumbs=0&info=1&logo=1" data-width="100%" data-height="400px"></script>
	</section>
	
	<section class="rbp">
		
		<div class="jhj">
			<h2 class="text-center text-uppercase marg_0_mob wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>"><b>Техническая часть</b></h2>
			<img class="img_rbp lazy wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>" src="img/tmb.gif" data-src="img/note.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
			
			<p class="n_text_1 wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>">Работая над дизайн-проектом интерьера наша основная задача дать вам не просто красивые картинки, а создать наиболее функциональное и выгодное решение, которое на все 100% порадует вас и ваших близких.
			<br>Мы уделяем большое внимание техническим нюансам и реальному бюджету вашего проекта.<br>
			Заказав дизайн-проект интерьера в нашей студии, вы получите четкое понимание того, как будет выглядеть ваш дом после ремонта, где и в каком количестве разместить светильники, розетки, выключатели, какие материалы и мебель необходимо покупать и в каком количестве.</p>
			<p class="n_text_1 tac1 mw_7 wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>">Получите пример РАБОЧЕГО ПРОЕКТА и посмотрите своими глазами из
						чего состоит дизайн-проект интерьера.</p>
		
			
			<p class="n_text_1 wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>">Нам также важно, чтобы вы могли позволить себе реализовать разработанный дизайн-проект.
									Именно поэтому, мы заранее согласовываем бюджет на ремонт и учитываем его при создании проекта.
									Вы получите спецификации по всем отделочным и строительным материалам и мебели.
									</p>
		</div>
	</section>
	
	<section class="form_kk wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>">
		<div class="rb_form">
			<p class="rb_form_title">пример проекта</p>
			<p class="n_text ds">Заполните форму и получите PDF файл с рабочим проектом <span>ПРЯМО СЕЙЧАС</span>:</p>
			<form method="post" id="ajax_form_2" name="order_form_prjct" >
				<div class="rb_form_input">
					<input id="rp_name" type="text" placeholder="Ваше имя"/>
					<input class="tel_mask" id="rp_phone" type="text" placeholder="Телефон"/>
					<input id="rp_mail" type="mail" placeholder="E-mail"/>
					<div class="knopka" id="rb_btn_send">
						<a class="knopka_bl">получить пример</a>
					</div>
				</div>
			</form>
		</div>
	</section>
	
	<section class="rbp">
		<div class="jhj">
			<h2 class="text-center text-uppercase marg_0_mob wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>"><b>ремонт и отделка</b></h2>
			<img class="img_rbp lazy wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>" src="img/tmb.gif" data-src="images/obg/5/57.jpg"  alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/>
			
			<p class="n_text_1 wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>">Получите комплекс ремонтно-отделочных работ, их организацию и управление:</p>
					<ul class="list_main wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>">
						<li>Все виды ремонтно-строительных работ: электромонтажные работы, сантехнические работы, отделочные работы, общестроительные работы, изготовление мебели</li>
						<li>Каждый этап ремонтных работ идет под контролем руководителя строительного отдела, дизайнера, а также узких специалистов</li>
						<li>Закупки и коммуникации со всеми поставщиками и производителями</li>
						<li>Грузоперевозки, доставка и все вопросы логистики</li>
						<li>Еженедельный отчет о выполненных работах, а также постоянный онлайн доступ к ведомости ведения работ в текущем времени</li>
						<li>Персональный менеджер, который всегда на связи</li>
					</ul>
		</div>
	</section>
	
	<section class="form_kk wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>">
		<div class="rb_form">
			<p class="rb_form_title">узнать подробнее</p>
			<p class="n_text ds">Чтобы получить консультацию и скачать <span>АКТУАЛЬНЫЙ ПРАЙС</span> на виды услуг - заполните форму:</p>
			<form method="post" id="ajax_form_3" name="order_form_price" >	
				<div class="rb_form_input">
					<input id="pk_name" type="text" placeholder="Ваше имя"/>
					<input class="tel_mask" id="pk_phone" type="text" placeholder="Телефон"/>
					<input id="pk_mail" type="mail" placeholder="E-mail"/>
					<div class="knopka" id="rb_btn_send_2">
						<a class="knopka_bl">получить прайс</a>
					</div>
				</div>
			</form>
		</div>
	</section>
	
	<section class="manysliders" id="pls">
			<div class="jhj">
				<h2 class="text-center text-uppercase wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>"><b>Делаем то, что не делает 95% компаний</b></h2>
			   
				<div class="cells_wrap padd_bott_0_mob">
					<div class="cells wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>">
						<div class="cells_img"><img class="lazy" src="img/tmb.gif" data-src="img/opit.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/></div>
						<div class="cells_txt">
							<p>ПРОЗРАЧНАЯ СХЕМА РАБОТЫ</p>
							<p>Еженедельная отчетность о выполненной работе и затратах</p>
						</div>
					</div>
					<div class="cells wow animate_animated animate__fadeInUp" data-wow-duration="<?echo $anim_duration;?>">
						<div class="cells_img"><img class="lazy" src="img/tmb.gif" data-src="img/team.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/></div>
						<div class="cells_txt">
							<p>СРОКИ</p>
							<p>Четкое соблюдение сроков согласно календарному графику работ</p>
						</div>
					</div>
					<div class="cells wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>">
						<div class="cells_img"><img class="lazy" src="img/tmb.gif" data-src="img/personalize.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/></div>
						<div class="cells_txt">
							<p>ЭКОНОМИМ ВАШЕ ВРЕМЯ И НЕРВЫ</p>
							<p>Ваше участие в процессе ремонта минимально - мы берем на себя всю "головную боль"</p>
						</div>
					</div>
				</div>
				
				<div class="cells_wrap padd_top_0_mob padd_bott_0_mob">
					<div class="cells wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>">
						<div class="cells_img"><img class="lazy" src="img/tmb.gif" data-src="img/sale.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/></div>
						<div class="cells_txt">
							<p>СКИДКИ</p>
							<p>Скидки на строительные материалы за счет наших партнерских связей с поставщиками и производителями</p>
						</div>
					</div>
					<div class="cells wow animate_animated animate__fadeInUp" data-wow-duration="<?echo $anim_duration;?>">
						<div class="cells_img"><img class="lazy" src="img/tmb.gif" data-src="img/garant.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/></div>
						<div class="cells_txt">
							<p>ГАРАНТИЯ</p>
							<p>Даем гарантию 12 месяцев на выполненные работы</p>
						</div>
					</div>
					<div class="cells wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>">
						<div class="cells_img"><img class="lazy" src="img/tmb.gif" data-src="img/komfort.png" alt="дизайн интерьера харьков, ремонт под ключ, 3D-визуализация интерьера, дизайн проект квартиры, дизайн проект квартиры харьков"/></div>
						<div class="cells_txt">
							<p>КОМФОРТ х 3</p>
							<p>Вы получаете все виды услуг в одной компании</p>
						</div>
					</div>
				</div>
				
				<div class="knopka wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>" id="order_RP">
					<a href="javascript:void(0);" class="knopka_bl_3">оставить заявку</a>
				</div>
			</div>	
      
    </section>
	
	

	<section class="steps" id="steps">
		<div class="jhj">    
			<h2 class="text-center text-uppercase txt_clr_white wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>" style="margin-bottom: 70px;">как все будет происходить</h2>
			<div class="flajok_wrap flajok_mob">
				<div class="mob_trig">
					<div class="flajok chet wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>">
						<div>
							<p class="st_number">01</p>
						</div>
						<div class="flakshtok chet">
							<p>Замеры и консультация</p>
							<p>Выезд дизайнера на замеры объекта. Составление обмерочного плана.</p>
						</div>
					</div>
					<div class="flajok nechet wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>">
						<div class="flakshtok nechet bord_left bord_right_none">
							<p class="tal">Предварительный эскиз</p>
							<p class="tal">Определение стилистического решения интерьера, подготовка технических заданий, планировочных решений, разработка концепции дизайна.</p>
						</div>
						<div>
							<p class="st_number">02</p>
						</div>
					</div>
				</div>
				<div class="mob_trig">
					<div class="flajok chet wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>">
						<div>
							<p class="st_number">03</p>
						</div>
						<div class="flakshtok chet">
							<p>Визуализация проекта</p>
							<p>3D визуализации интерьера каждого помещения согласно утвержденной концепции дизайна.</p>
						</div>
					</div>
					<div class="flajok nechet wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>">
						<div class="flakshtok nechet bord_left bord_right_none">
							<p class="tal">Рабочая документация</p>
							<p class="tal">Разработка полного пакета рабочих чертежей и спецификаций.</p>
						</div>
						<div>
							<p class="st_number">04</p>
						</div>
					</div>
				</div>
			</div>
			<div class="flajok_wrap flajok_mob">
				<div class="mob_trig">
					<div class="flajok chet wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>">
						<div>
							<p class="st_number">05</p>
						</div>
						<div class="flakshtok chet">
							<p>Смета</p>
							<p>Подготовка сметы и согласование материалов.</p>
						</div>
					</div>
					<div class="flajok nechet wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>">
						<div class="flakshtok nechet bord_left bord_right_none">
							<p class="tal">Ремонт</p>
							<p class="tal">Ведение ремонтно-строительных работ.</p>
						</div>
						<div>
							<p class="st_number">06</p>
						</div>
					</div>
				</div>
				<div class="mob_trig">
					<div class="flajok chet wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>">
						<div>
							<p class="st_number">07</p>
						</div>
						<div class="flakshtok chet">
							<p>Авторский надзор</p>
							<p>Контроль соответствия строительных работ проектному плану. Закупка материалов. Общение с подрядчиками. Комплектация объекта мебелью и декором.</p>
						</div>
					</div>
					<div class="flajok nechet wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>">
						<div class="flakshtok nechet bord_left bord_right_none">
							<p class="tal">Сдача объекта</p>
							<p class="tal">Можно праздновать новоселье.</p>
						</div>
						<div>
							<p class="st_number">08</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="flajok_wrap desctop">
				<div class="flajok chet wow animate_animated animate__fadeIn" data-wow-duration="0.5s">
					<div>
						<p class="st_number">01</p>
					</div>
					<div class="flakshtok chet">
						<p>Замеры и консультация</p>
						<p>Выезд дизайнера на замеры объекта. Составление обмерочного плана.</p>
					</div>
				</div>
				<div class="flajok nechet padd_top_150 wow animate_animated animate__fadeIn" data-wow-duration="1.0s">
					<div>
						<p class="st_number">02</p>
					</div>
					<div class="flakshtok nechet">
						<p>Предварительный эскиз</p>
						<p>Определение стилистического решения интерьера, подготовка технических заданий, планировочных решений, разработка концепции дизайна.</p>
					</div>
				</div>
				<div class="flajok chet wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>">
					<div>
						<p class="st_number">03</p>
					</div>
					<div class="flakshtok chet">
						<p>Визуализация проекта</p>
						<p>3D визуализации интерьера каждого помещения согласно утвержденной концепции дизайна.</p>
					</div>
				</div>
				<div class="flajok nechet padd_top_150 wow animate_animated animate__fadeIn" data-wow-duration="2.0s">
					<div>
						<p class="st_number">04</p>
					</div>
					<div class="flakshtok nechet">
						<p>Рабочая документация</p>
						<p>Разработка полного пакета рабочих чертежей и спецификаций.</p>
					</div>
				</div>
			</div>
			<div class="flajok_wrap desctop">
				<div class="flajok chet wow animate_animated animate__fadeIn" data-wow-duration="2.5s">
					<div>
						<p class="st_number">05</p>
					</div>
					<div class="flakshtok chet">
						<p>Смета</p>
						<p>Подготовка сметы и согласование материалов.</p>
					</div>
				</div>
				<div class="flajok nechet padd_top_150 wow animate_animated animate__fadeIn" data-wow-duration="3.0s">
					<div>
						<p class="st_number">06</p>
					</div>
					<div class="flakshtok nechet">
						<p>Ремонт</p>
						<p>Ведение ремонтно-строительных работ.</p>
					</div>
				</div>
				<div class="flajok chet wow animate_animated animate__fadeIn" data-wow-duration="3.5s">
					<div>
						<p class="st_number">07</p>
					</div>
					<div class="flakshtok chet">
						<p>Авторский надзор</p>
						<p>Контроль соответствия строительных работ проектному плану. Закупка материалов. Общение с подрядчиками. Комплектация объекта мебелью и декором.</p>
					</div>
				</div>
				<div class="flajok nechet padd_top_150 wow animate_animated animate__fadeIn" data-wow-duration="4.0s">
					<div>
						<p class="st_number">08</p>
					</div>
					<div class="flakshtok nechet">
						<p>Сдача объекта</p>
						<p>Можно праздновать новоселье.</p>
					</div>
				</div>
			</div>
        </div>
    </section>
	
	
	<footer class="footer">
        <div class="container">
            <div class="footer_wrap">
                <div class="left_f wow animate_animated animate__fadeInLeftBig" data-wow-duration="<?echo $anim_duration;?>">
                    <img class="lazy" src="img/tmb.gif" data-src="img/logo.png" id="logo_bottom">
                </div>
                <div class="center_f wow animate_animated animate__fadeIn" data-wow-duration="<?echo $anim_duration;?>" style="text-align: center;">
                    <p>Остались вопросы? Звоните!</p>
					<a href="javascript:void(0);" class="knopka" id="callback_f">Бесплатный обратный звонок</a><br>
					<a onclick="dataLayer.push({'event': 'call'});" href="tel:+380964011697" class="tel_f">+38 (096) 401-16-97</a>
                </div>
                <div class="right_f wow animate_animated animate__fadeInRightBig" data-wow-duration="<?echo $anim_duration;?>">
                    <div class="links">
                        <a onclick="dataLayer.push({'event': 'inst'});" href="https://www.instagram.com/interior_design_pride" target="blank" style="filter: invert(1)"><img data-src="img/inst.png"></a>
                        <a onclick="dataLayer.push({'event': 'call'});" href="https://t.me/Kirilyeva" target="blank" style="margin-left:14px;"><img src="img/teleg.png"></a>
                        <a onclick="dataLayer.push({'event': 'call'});" href="viber://add?number=+380964011697" style="margin-left:14px;"><img src="img/viber.png"></a>
                    </div>
                    <a href="mailto:pridedesignstudio@gmail.com" class="mail">pridedesignstudio@gmail.com</a>
                </div>
            </div>
        </div>
    </footer>
	
	<script src="js/lazyload.min.js"></script>

	<script>
		var lazyLoadInstance = new LazyLoad({
			elements_selector: ".lazy"
		});

		$(window).scroll(function() {
	
			if ($(window).width() > 1000){
				if ($(this).scrollTop()>200) {
					$('.scrollup').fadeIn(500);
				}
				else {
					$('.scrollup').fadeOut(500);
				}
			}
	
	

		oke = 1;
		
		
	
  
		});
	</script>

</body>

</html>
