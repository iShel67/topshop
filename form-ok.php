<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>Спецпредложение от нашего интернет-магазина, товары по супер цене!</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="upsell/img/favicon.ico" rel="icon" type="image/x-icon">
	<link href="upsell/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<script src="upsell/js/jquery.min.js" type="text/javascript">
	</script>
	<script src="upsell/js/jquery.placeholder.js" type="text/javascript">
	</script>
	<script src="upsell/js/init.js" type="text/javascript">
	</script>
	<script> 
	       var comments = JSON.parse('[]');
	       var openedComments = 0; 
	</script>
	<script src="index_files/jquery.cookie.js"></script> 
	<link href="upsell/css/index.css" media="all" rel="stylesheet" type="text/css">
	
<?

$ling_back = 'index.php';
?>

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
  fbq('init', '<?=$_GET['p']?>');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=<?=$_GET['p']?>&ev=PageView&noscript=1"
/></noscript>
<script>
  fbq('track', 'Lead');
</script>
<!-- End Facebook Pixel Code -->


<?php
$only_phone = preg_replace("/[^0-9]/", '', $_REQUEST['phone']); 
?>
<script type="text/javascript">
$.cookie('duble', <?=$only_phone?>, { expires: 1 });
</script> 
<!-- Global site tag (gtag.js) - Google Ads: 10962435256 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10962435256"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10962435256');
</script>
<!-- Event snippet for Покупка conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-10962435256/8bxGCL3m6tEDELj5peso',
      'transaction_id': ''
  });
</script>

</head> 
<body class="man">
	<img alt="cookie" border="0" height="1" src="index.php" style="display: none;" width="1">
	<div class="section block-1" style='background:rgb(241, 244, 246) none repeat scroll 0% 0%;    '>
		<div class="wrap" style=' height: 415px;'>
			<div class="top-title">
				<h2>Спасибо, Ваш заказ принят!</h2> 
				<div>
					Наш оператор свяжется с вами в течение 30&nbsp;минут
				</div>
				<div>
									<p>Вы указали следующие контактные данные:</p>
									<p><b style='font-weight: bold;'>Имя:</b> <?=$_REQUEST['name']?></p>
									<p><b style='font-weight: bold;'>Телефон:</b> <?=$_REQUEST['phone']?></p> 
				</div>										
									<p>Если вы допустили ошибку, <br>вернитесь на сайт и оставьте заказ еще раз</p>
									<!-- <br>  -->
									<button style='    background: transparent linear-gradient(to bottom, #ff6001 0%, #ff6001 100%) repeat scroll 0 0;border: none;border-bottom: 2px solid #055029;outline: 0 none;padding: 15px 25px;text-transform: uppercase;color: #fff;font-weight: bold;border-radius: 4px;cursor: pointer;}' class=" button thankyou__button" onclick="return location.href = '<?=$ling_back?>'">Вернуться</button>  
				
			</div>
		</div>
	</div>



	<div class="section block-2" id="1">
		<div class="wrap">
			<h1>Для новых клиентов у нас есть эксклюзивные предложения!</h1>
			<p>С индивидуальной скидкой вы можете заказать следующие товары:</p>
		</div>
	</div>
	<div class="section block-3">
		<div class="wrap"> 
			 
 
	

				<div class="tov-item tov-rate-1 clearfix">
				<!--rating 4,5-->  
				<span class="tov-item-sale">-50%</span> 
				<div class="tov-left-cont"> 
					<div class="tov-gal clearfix">
						<div class="tov-gal-big1"><img alt="" class="image3" src="upsell/img/331.jpg?8"></div> 
						<div class="tov-gal-list">
							<span class="animate active" data-target=".image3"><img alt="" src="upsell/img/331.jpg?8"></span>
							<span class="animate active" data-target=".image3"><img alt="" src="upsell/img/332.jpg?8"></span>
							<span class="animate active" data-target=".image3"><img alt="" src="upsell/img/333.jpg?8"></span>
						</div>
					</div>
					<ul class="tov-adv clearfix">
						<li class="hint hint--top hint--info" data-hint="Гарантия возврата 14 дней"></li>
						<li class="hint hint--top hint--info" data-hint="Доставка в течение 5-10 рабочих дней"></li>
						<li class="hint hint--top hint--info" data-hint="Оплата товара при получении"></li>
					</ul>
				</div>
				<div class="tov-info"> 
					<h3>PETER THOMAS ROTH - Крем для лица с эффектом омоложения</h3>  
					<div class="tov-info-rate"></div> 
					<div class=""> 
						<div style="padding-top: 30px;font-size: 23px;padding-bottom: 5px;">Цена</div>
						<span class="old-cost">6660 <small>тг</small></span> <span class="new-cost">3330 <small>тг</small></span> 
					</div>
					<p class="tov-info-text"></p>
					<p><strong></strong> 

Средство Instant FirmX Eye Temporary Eye Tightener от Peter Thomas Roth мгновенно временно подтягивает, делает упругой и гладкой область под глазами, чтобы уменьшить видимость гусиных лапок, мимических морщинок, глубоких морщин и припухлости под глазами. Трио мгновенных подтяжек помогает временно подтянуть и укрепить кожу, а трио пептидов и омолаживающий регенератор кожи вокруг глаз заметно уменьшают видимость отечности и мешочков под глазами.
 
</p> 
				</div>
			</div>




			<div class="tov-item tov-rate-1 clearfix">
				<!--rating 4,5-->  
				<span class="tov-item-sale">-50%</span> 
				<div class="tov-left-cont"> 
					<div class="tov-gal clearfix">
						<div class="tov-gal-big1"><img alt="" class="image7" src="files/foots.jpg"></div>
						<div class="tov-gal-list">
							<span class="animate active" data-target=".image7"><img alt="" src="files/foots.jpg"></span>
						</div>
					</div>
					<ul class="tov-adv clearfix"> 
						<li class="hint hint--top hint--info" data-hint="Гарантия возврата 14 дней"></li>
						<li class="hint hint--top hint--info" data-hint="Доставка в течение 5-10 рабочих дней"></li>
						<li class="hint hint--top hint--info" data-hint="Оплата товара при получении"></li>
					</ul>
				</div>
				<div class="tov-info"> 
					<h3>Акция 1+1=3</h3> 
					<div class="tov-info-rate"></div> 
					<div class="tov-info-cost"> 
						<span class="old-cost">27980 <small>тг</small></span> <span class="new-cost">13990 <small>тг</small></span> 
					</div> 
					<p class="tov-info-text"></p>
					<p><strong></strong>

Купите 2-ю пару и получите 3ю в подарок!


 
</p> 
				</div>
			</div>

	


			<div class="tov-item tov-rate-1 clearfix">
				<!--rating 4,5--> 
				<span class="tov-item-sale">-50%</span>
				<div class="tov-left-cont"> 
					<div class="tov-gal clearfix">
						<div class="tov-gal-big1"><img alt="" class="image1" src="upsell/img/111.jpg?1"></div>
						<div class="tov-gal-list">
							<span class="animate active" data-target=".image1"><img alt="" src="upsell/img/111.jpg?1"></span>
							<span class="animate" data-target=".image1"><img alt="" src="upsell/img/112.jpg?1"></span>
							<span class="animate" data-target=".image1"><img alt="" src="upsell/img/113.jpg?1"></span>
							<span class="animate" data-target=".image1"><img alt="" src="upsell/img/114.jpg?1"></span>
						</div>
					</div>
					<ul class="tov-adv clearfix">
						<li class="hint hint--top hint--info" data-hint="Гарантия возврата 14 дней"></li>
						<li class="hint hint--top hint--info" data-hint="Доставка в течение 5-10 рабочих дней"></li>
						<li class="hint hint--top hint--info" data-hint="Оплата товара при получении"></li>
					</ul>
				</div>
				<div class="tov-info"> 
					<h3>Весенний шелковый платок</h3> 
					<div class="tov-info-rate"></div>
					<div class="tov-info-cost">
						<span class="old-cost">7780 <small>тг</small></span> <span class="new-cost">3890 <small>тг</small></span> 
					</div>
					<p class="tov-info-text"></p>
					<p><strong></strong>
Материал: 100% шелк<br>
Размер: 80х100 см<br>
Производство: Италия<br>
Цвет: зеленый, бежевый, оранжевый, черный<br>
</p> 
				</div>
			</div>

			

				<div class="tov-item tov-rate-1 clearfix">
				<!--rating 4,5-->  
				<span class="tov-item-sale">-50%</span> 
				<div class="tov-left-cont"> 
					<div class="tov-gal clearfix">
						<div class="tov-gal-big1"><img alt="" class="image4" src="upsell/img/441.jpg?8"></div> 
						<div class="tov-gal-list">
							<span class="animate active" data-target=".image4"><img alt="" src="upsell/img/441.jpg?8"></span>
						</div>
					</div>
					<ul class="tov-adv clearfix">
						<li class="hint hint--top hint--info" data-hint="Гарантия возврата 14 дней"></li>
						<li class="hint hint--top hint--info" data-hint="Доставка в течение 5-10 рабочих дней"></li>
						<li class="hint hint--top hint--info" data-hint="Оплата товара при получении"></li>
					</ul>
				</div>
				<div class="tov-info"> 
					<h3>Высокопрочные носки</h3>  
					<div class="tov-info-rate"></div> 
					<div class=""> 
						<div style="padding-top: 30px;font-size: 23px;padding-bottom: 5px;">Цена</div>
						<span class="old-cost">7980 <small>тг</small></span> <span class="new-cost">3990 <small>тг</small></span> 
					</div>
					<p class="tov-info-text"></p>
					<p><strong></strong> 

<br>100% хлопок высшего качества 
<br>Носок выполнен по технологии loose fit - бесшовная технология производства 
<br>Производство: Финляндия

 
</p> 
				</div>
			</div>


		



<!-- 


			<div class="tov-item tov-rate-1 clearfix">

				<span class="tov-item-sale">-60%</span>
				<div class="tov-left-cont"> 
					<div class="tov-gal clearfix">
						<div class="tov-gal-big1"><img alt="" class="image2" src="upsell/img/221.jpg?1"></div>
						<div class="tov-gal-list">
							<span class="active animate" data-target=".image2"><img alt="" src="upsell/img/221.jpg?1"></span> 
							<span class="active animate" data-target=".image2"><img alt="" src="upsell/img/222.jpg?1"></span>
							<span class="active animate" data-target=".image2"><img alt="" src="upsell/img/223.jpg?1"></span>
						</div>
					</div>
					<ul class="tov-adv clearfix">
						<li class="hint hint--top hint--info" data-hint="Гарантия возврата 14 дней"></li>
						<li class="hint hint--top hint--info" data-hint="Доставка в течение 5-10 рабочих дней"></li>
						<li class="hint hint--top hint--info" data-hint="Оплата товара при получении"></li>
					</ul>
				</div>
				<div class="tov-info">
					<h3>Портмоне  женское</h3>
					<div class="tov-info-rate"></div>
					<div class="tov-info-cost">
						<span class="old-cost">11580 <small>тг</small></span> <span class="new-cost">5790 <small>тг</small></span>
					</div>
					<p class="tov-info-text"></p>
					<p><strong></strong>
						Состав: 100% кожа <br>
Размер: 10х19 см<br>
Цвет : синий, зеленый, фиолетовый, красный<br>
Производство: Италия<br>
</p>
				</div>
			</div>

 -->


	 <?/*?>
<?*/?>

	</div>

	<script type="text/javascript">
	   jQuery(function($) {
	       $('a.tov-button').on('click', function() {
	           var button = $(this);
	           var upsell = button.data('upsell');
	           var search = location.search.replace('?', '').split('&');
	           var params = {};
	           
	           params.fields = [];
	           params.fields.push({
	               type: 'upsell',
	               name: 'Дозаказ',
	               value: upsell
	           });
	           
	           $.each(search, function(i, val) {
	               var a = val.split('=');
	               var type = decodeURIComponent(a[0]);
	               var name = '';
	               var value = decodeURIComponent(a[1]);
	               switch(type) {
	                   case 'name': name = 'Имя'; break;
	                   case 'phone': name = 'Телефон'; break;
	                   case 'email': name = 'Электронная почта'; break;
	               }
	               params.fields.push({
	                   type: type,
	                   name: name,
	                   value: value
	               });
	           });
	           
	           $.ajax('send.php', {
	               type: "POST",
	               data: JSON.stringify(params),
	               dataType: 'json',
	               contentType: 'application/json',
	               success: function(response) {
	                   button.css({backgroundColor: '#5fd8a6', borderColor: '#49c290'}).find('span').text('Добавлено');
	               },
	               error: function() {
	                   alert('error');
	               }
	           });
	           
	           return false;
	       });
	   });
	</script>


<style type="text/css">
.ups_b{
	font-weight: bold;
}
.man .block-1 .top-title > h2{
	color: #ff6001;
}
</style> 


</body>
</html>