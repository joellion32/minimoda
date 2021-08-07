<?php require_once('layouts/header.php')?>

<div class="page">
			<h6><a href="#">Productos Destacados</a></span></h6>
</div>


<div class="content">

			<div class="col-md-9">
			<div class="shoe">
				<img class="img-responsive" src="<?=base_url?>assets/images/banner.png" alt="" >
				<div class="shop">
					<h4>OFERTA <span>SOLO</span></h4>
					<p>MES DE ABRIL 2021</p>
				</div>
			</div>
				<div class="content-bottom">
					<h3>PRODUCTOS DESTACADOS</h3>
					<div class="bottom-grid">
						<?php while($producto = $resultado->fetch_object()) :?>
						<div class="col-md-4 shirt">
							<div class="bottom-grid-top">
								<a href="<?=base_url?>Home/product_detail&id=<?=$producto->id_producto?>"><img class="img-responsive" src="<?=$producto->imagen_producto?>" alt="" >
								<div class="five">
									<h6 >-50%</h6>
								</div>
								<div class="pre">
									<p><?=$producto->nombre_producto?></p>
									<span>RD$ <?=$producto->precio?></span>
									<div class="clearfix"> </div>
								</div></a>	
							</div>
						 </div>
						 <?php endwhile;?>
						<div class="clearfix"> </div>
					</div>
				</div>
				<ul class="start">
					<li><span>1</span></li>
					<li class="arrow"><a href="#">2</a></li>
					<li class="arrow"><a href="#">3</a></li>
					<li class="arrow"><a href="#">4</a></li>
					<li class="arrow"><a href="#">5</a></li>
					<li class="arrow"><a href="#">6</a></li>
				</ul>
			</div>

			<?php require_once('layouts/section.php')?>			
			<div class="clearfix"> </div>
		</div>









<?php require_once('layouts/footer.php')?>