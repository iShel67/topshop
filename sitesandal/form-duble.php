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


<?php
$only_phone = preg_replace("/[^0-9]/", '', $_REQUEST['phone']); 
?>
<script type="text/javascript">
$.cookie('duble', <?=$only_phone?>, { expires: 1 });
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