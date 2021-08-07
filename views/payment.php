<?php require_once('layouts/header.php');?>
<div class="page">
	<h6><a href="#">Completar pago</a></h6>
</div>

<div class="content">

	<?php if(isset($_SESSION['error'])):?>
	<div class="alert alert-danger" role="alert">
		<?php echo $_SESSION['error']?>
	</div>
	<?php endif;?>

	<?php Utils::deletesession('error');?>

	<!---->
	<div class="contact">
		<div class="col-md-12">
			<h4 style="margin-left: 10px">COMPLETAR PAGO</h4>
			<br>
			<form action="<?=base_url?>Pedido/savePayment" method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">País</label>
						<input type="text" class="form-control" name="pais" value="Republica Dominicana">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Provincia o Ciudad</label>
						<input type="text" class="form-control" name="provincia">
					</div>
				</div>


				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="inputEmail4">Dirección</label>
						<input type="text" class="form-control" name="direccion">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Numero de tarjeta</label>
						<input type="text" class="form-control" name="cuenta" value="0011245572">
					</div>
					<div class="form-group col-md-2">
						<label for="inputPassword4">CVC</label>
						<input type="text" class="form-control" name="cvc" value="2141">
					</div>

					<div class="form-group col-md-4">
						<label for="inputPassword4">Fecha</label>
						<input type="text" class="form-control" name="fecha_tarjeta" value="15/04/2025">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<button type="submit" class="btn btn-primary">Completar Pago</button>
						<img style="cursor:pointer; margin-top: 20px" class="img-responsive" src="<?=base_url?>assets/images/p3.png" title="Pagar con paypal" alt="">
					</div>

					<div class="form-group col-md-4">
						<h3 style="top: 30px">Total: RD$ <?=$cart['total']?></h3>
					</div>
				</div>

			</form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<?php require_once('layouts/footer.php')?>