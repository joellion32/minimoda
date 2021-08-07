<?php require_once('layouts/header.php');?>
<?php if($_SESSION['identificar']) :?>
<div class="page">
	<h6><a href="#">Panel de usuario</a></span></h6>
</div>
<?php else :?>
	<div class="page">
	<h6><a href="#">Iniciar sesión</a></span></h6>
</div>
<?php endif;?>


<div class="content">
	<?php if(isset($_SESSION['guardar'])):?>
	<div class="alert alert-success" role="alert">
		<?php echo $_SESSION['guardar']?>
	</div>
	<?php endif;?>

	<?php if(isset($_SESSION['correcto'])):?>
	<div class="alert alert-success" role="alert">
		<?php echo $_SESSION['correcto']?>
	</div>
	<?php endif;?>

	<?php if(isset($_SESSION['error'])):?>
	<div class="alert alert-danger" role="alert">
		<?php echo $_SESSION['error']?>
	</div>
	<?php endif;?>

	<?php Utils::deletesession('guardar');?>
	<?php Utils::deletesession('error');?>
	<?php Utils::deletesession('correcto');?>

	<?php if($_SESSION['identificar']) :?>
	<div class="row">
		<div style="margin-left: 10px" class="col-md-4">
			<div style="align-items: center" class="well">
				<img style="border-radius: 50%!important; margin-left: 90px" src="<?=base_url?>assets/images/user.png"
					alt="Generic placeholder image" width="140" height="140">
				<h4 style="text-align:center"><?=$_SESSION['identificar']->nombre?></h4>
				<h4 style="text-align:center"><?=$_SESSION['identificar']->email?></h4>
				<br>
				<a style="margin-left: 90px" href="<?=base_url?>User/logout" class="btn btn-primary">Cerrar sesión</a>
			</div>
		</div>
		<div class="col-md-7">
			<h2>Lista de pedidos</h2>
			<br>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Id Pedido</th>
						<th scope="col">Provincia o Ciudad</th>
						<th scope="col">Dirección</th>
						<th scope="col">Total compra</th>
						<th scope="col">Status compra</th>
						<th scope="col">Detalle</th>
					</tr>
				</thead>
				<tbody>
				<?php while($pedido = $pedidos->fetch_object()):?>
					<tr>
						<th scope="row"><?=$pedido->id?></th>
						<td><?=$pedido->provincia?></td>
						<td><?=$pedido->direccion?></td>
						<td><?=$pedido->total_compra?></td>
						<td>
							<span class="badge badge-primary"><?=$pedido->status?></span>
						</td>
						<td>
							<a href="<?=base_url?>Pedido/detailOrder&id=<?=$pedido->id?>" class="btn btn-primary">detalle</a>
						</td>
					</tr>
				<?php endwhile?>
				</tbody>
			</table>
		</div>
	</div>
	<?php else :?>
	<div class="account-in">
		<h2>Iniciar sesión</h2>
		<div class="col-md-7 account-top">
			<form action="<?=base_url?>User/login" method="post">
				<div>
					<span>Correo electrónico*</span>
					<input name="email" type="text">
				</div>
				<div>
					<span class="pass">Contraseña*</span>
					<input name="password" type="password">
				</div>
				<input type="submit" value="Iniciar sesión">
			</form>
		</div>
		<div class="col-md-5 left-account ">
			<a href="single.html"><img class="img-responsive" style="width: 150px; heigth: 139px"
					src="https://assets.theplace.com/image/upload/t_plp_img_d,f_auto,q_auto,dpr_1.0/v1/ecom/assets/products/tcp/3022133/3022133_3247.jpg"
					alt=""></a>
			<div class="five-in">
				<h1>25% </h1><span>descuento</span>
			</div>
			<a href="<?=base_url?>User/register" class="create">Crear cuenta</a>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<?php endif;?>
</div>
<?php require_once('layouts/footer.php')?>