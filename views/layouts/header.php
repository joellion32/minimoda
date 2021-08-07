<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require_once('helpers/util.php');?>
<!DOCTYPE html>
<html>

<head>
	<title>Mini Moda</title>
	<link rel="shortcut icon" href="<?=base_url?>assets/images/logo.png" type="image/x-icon">
	<link href="<?=base_url?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?=base_url?>assets/js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="<?=base_url?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Mihstore Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<!--//fonts-->
	<!--//slider-script-->
	<script>
		$(document).ready(function (c) {
			$('.alert-close').on('click', function (c) {
				$('.message').fadeOut('slow', function (c) {
					$('.message').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.alert-close1').on('click', function (c) {
				$('.message1').fadeOut('slow', function (c) {
					$('.message1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.alert-close2').on('click', function (c) {
				$('.message2').fadeOut('slow', function (c) {
					$('.message2').remove();
				});
			});
		});
	</script>
	<link rel="stylesheet" href="<?=base_url?>assets/css/etalage.css">
		<script src="<?=base_url?>assets/js/jquery.etalage.min.js"></script>
		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

	<script type="text/javascript" src="<?=base_url?>assets/js/move-top.js"></script>
	<script type="text/javascript" src="<?=base_url?>assets/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start menu -->
	<link href="<?=base_url?>assets/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="<?=base_url?>assets/js/megamenu.js"></script>
	<script>
		$(document).ready(function () {
			$(".megamenu").megamenu();
		});
	</script>
	<script src="<?=base_url?>assets/js/function.js"></script>
</head>

<body>
	<!--header-->
	<!--header-->
	<div class="container">
		<div class="header" id="home">
			<div class="header-para">
				<p>Somos la tienda para vestir a tus hijos</p>
			</div>
			<ul class="header-in">
				<li><a href="<?=base_url?>User/index">MI CUENTA</a> </li>
				<li><a href="<?=base_url?>Home/about">SOBRE NOSOTROS</a></li>
				<li><a href="<?=base_url?>Home/contact">CONTACTANOS</a></li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		<!---->
		<div class="header-top">
			<div class="logo">
				<a href="<?=base_url?>"><img witdh="245px" height="100px" src="<?=base_url?>assets/images/logo.png" alt=""></a>
			</div>
			<div class="header-top-on">
				<ul class="social-in">
					<li><a href="#"><i> </i></a></li>
					<li><a href="#"><i class="ic"> </i></a></li>
					<li><a href="#"><i class="ic1"> </i></a></li>
					<li><a href="#"><i class="ic2"> </i></a></li>
					<li><a href="#"><i class="ic3"> </i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="header-bottom">
			<div class="top-nav">

				<ul class="megamenu skyblue">
				 <li class="grid"><a href="<?=base_url?>">INICIO</a></li>

					<li class="active grid"><a href="<?=base_url?>">CATEGORIAS</a>
						<div class="megapanel">
							<div class="row">
								<div class="col1">
									<div class="h_nav">
										<ul>
											<li><a href="<?=base_url?>Home/category&id=1">Tops</a></li>
											<li><a href="<?=base_url?>Home/category&id=2">Pantalónes de niños</a></li>
											<li><a href="<?=base_url?>Home/category&id=4">Gorras y sombreros</a></li>
											<li><a href="<?=base_url?>Home/category&id=5">Camisas y Blusas</a></li>
											<li><a href="<?=base_url?>Home/category&id=6">Trajes de baño</a></li>
											<li><a href="<?=base_url?>Home/category&id=7">Ropa interior y calcetines</a></li>
										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<ul>
											<li><a href="<?=base_url?>Home/category&id=8">Pantalónes para niñas</a></li>
											<li><a href="<?=base_url?>Home/category&id=9">Vestidos</a></li>
											<li><a href="<?=base_url?>Home/category&id=10">Pijamas de niños y niñas</a></li>
											<li><a href="<?=base_url?>Home/category&id=11">Calzados</a></li>
											<li><a href="<?=base_url?>Home/category&id=12">Vestimenta para bebés</a></li>
											<li><a href="<?=base_url?>Home/category&id=13">Accesorios para bebés</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="<?=base_url?>Home/personalizeProduct">PERSONALIZA TU PEDIDO</a></li>
				</ul>
			</div>
			<div class="cart icon1 sub-icon1">
			<?php $cart = Utils::statuscarrito();?>     
				<a href="<?=base_url?>Carrito/index"><h6>Carrito de compras:
				<?php if(isset($_SESSION['carrito']) && isset($cart['total'])):?>
					<span class="item">Productos (<?=$cart['count']?>)</span>
					<span class="rate">Total (RD$<?=$cart['total']?>)</span>
				<?php else:?>
					<span class="item">Productos (0)</span>
					<span class="rate">Total (RD$0)</span>
				<?php endif;?>
				</h6></a>
			</div>
			<div class="clearfix"> </div>
		</div>
		