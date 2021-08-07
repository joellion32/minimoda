<?php require_once('layouts/header.php')?>

<div class="page">
	<h6><a href="#">Categorías</a></h6>
</div>

<div class="content">
	<div class="content-bottom store">
		<h3><?=$categoria->nombre_categoria?></h3>
		<div class="bottom-grid">
			<?php while($producto = $productos->fetch_object()) :?>
			<div class="col-md-3 shirt">
				<div class="bottom-grid-top">
					<a href="<?=base_url?>Home/product_detail&id=<?=$producto->id_producto?>"><img class="img-responsive" src="<?=$producto->imagen_producto?>" alt="">
						<div class="five">
							<h6>-50%</h6>
						</div>
						<div class="pre">
							<p><?=$producto->nombre_producto?></p>
							<span>RD$ <?=$producto->precio?></span>
							<div class="clearfix"> </div>
						</div>
					</a>
				</div>
			</div>
			<?php endwhile;?>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<?php require_once('layouts/footer.php')?>