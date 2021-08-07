<?php require_once('layouts/header.php');?>

<div class="page">
	<h6><a href="#"><?=$producto->nombre_producto?></a></h6>
</div>

<div class="content">

<div class="col-md-9">
<div class="col-md-5 single-top">	
			<ul id="etalage">
				<li>
					<a href="optionallink.html">
						<img class="etalage_thumb_image img-responsive" src="<?=$producto->imagen_producto?>" alt="" >
						<img class="etalage_source_image img-responsive" src="<?=$producto->imagen_producto?>" alt="" >
					</a>
				</li>
			</ul>
		</div>	
		<div class="col-md-7 single-top-in">
			<div class="single-para">
				<h4><?=$producto->nombre_producto?></h4>
				<div class="para-grid">
					<span  class="add-to">RD$<?=$producto->precio?></span>
					<a href="<?=base_url?>Carrito/addcarrito&id=<?=$producto->id_producto?>" class=" cart-to">Agregar al carrito</a>					
					<div class="clearfix"></div>
				 </div>
				<h5><?=$producto->stock?> productos en stock</h5>
				<div class="available">
					<h6>Opciones Disponibles:</h6>
					<ul>
						
					<li>Tamaño:<select>
						<option>Large</option>
						<option>Medium</option>
						<option>small</option>
						<option>Large</option>
						<option>small</option>
					</select></li>
					<li>Costo:
							<select>
							<option>Peso Dominicano</option>
						</select></li>
				</ul>
			</div>
				
					<a href="#" class="cart-an ">Mas detalles</a>
				<div class="share">
				<h4>Compartir Producto :</h4>
				<ul class="share_nav">
					<li><a href="#"><img src="<?=base_url?>assets/images/facebook.png" title="facebook"></a></li>
					<li><a href="#"><img src="<?=base_url?>assets/images/twitter.png" title="Twiiter"></a></li>
					<li><a href="#"><img src="<?=base_url?>assets/images/rss.png" title="Rss"></a></li>
					<li><a href="#"><img src="<?=base_url?>assets/images/gpluse.png" title="Google+"></a></li>
				</ul>
			</div>
			</div>
		</div>
	<div class="clearfix"> </div>
	<br>
<h4>Productos relacionados</h4>
<br>
<ul id="flexiselDemo1">
<?php while($relacionado = $relacionados->fetch_object()) :?>
<a href="<?=base_url?>Home/product_detail&id=<?=$relacionado->id_producto?>">
<li><img src="<?=$relacionado->imagen_producto?>" /><div class="grid-flex"><p>RD$ <?=$relacionado->precio?></p></div></li>
</a>
<?php endwhile;?>
</ul>
<script type="text/javascript">
$(window).load(function() {
$("#flexiselDemo1").flexisel({
	visibleItems: 5,
	animationSpeed: 1000,
	autoPlay: true,
	autoPlaySpeed: 3000,    		
	pauseOnHover: true,
	enableResponsiveBreakpoints: true,
	responsiveBreakpoints: { 
		portrait: { 
			changePoint:480,
			visibleItems: 1
		}, 
		landscape: { 
			changePoint:640,
			visibleItems: 2
		},
		tablet: { 
			changePoint:768,
			visibleItems: 3
		}
	}
});

});
</script>
<script type="text/javascript" src="<?=base_url?>assets/js/jquery.flexisel.js"></script>
<!---->

<!---->
</div>
<?php require_once('layouts/section.php')?>			
<div class="clearfix"></div>
</div>

<?php require_once('layouts/footer.php')?>