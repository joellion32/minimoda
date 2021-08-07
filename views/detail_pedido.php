<?php require_once('layouts/header.php');?>
<div class="page">
	<h6><a href="#">Detalle del pedido</a></span></h6>
</div>

<div class="content">
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
			<h2>Detalle del pedido</h2>
			<br>
			<table class="table">
				<thead>
					<tr>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Unidades</th>
					</tr>
				</thead>
				<tbody>
				<?php while($detalle = $detalles->fetch_object()):?>
					<tr>
						<th scope="row">
                          <img src="<?=$detalle->imagen_producto?>" class="img_carrito" alt="imagen">
                        </th>
						<td><?=$detalle->nombre_producto?></td>
						<td><?=$detalle->precio?></td>
						<td><?=$detalle->unidades?></td>
					</tr>
				<?php endwhile?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php require_once('layouts/footer.php')?>