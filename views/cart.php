<?php require_once('layouts/header.php');?>


<div class="page">
  <a href="<?=base_url?>Pedido/payment" class="btn btn-success btn-block">Completar pedido</a>
</div>

<div class="content">

	<?php if(isset($_SESSION['error'])):?>
	<div class="alert alert-danger" role="alert">
		<?php echo $_SESSION['error']?>.   <a href="<?=base_url?>User/index">si no estas autenticado Inicia sesión aqui</a>
	</div>
	<?php endif;?>

	<?php Utils::deletesession('error');?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Imagen</th>
        <th scope="col">Nombre Producto</th>
        <th scope="col">Precio</th>
        <th scope="col">Unidades</th>
        <th scope="col">Acciones</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php if($carrito == []):?>

      <h3 style="text-align:center !important; margin: 10px">No hay productos en el carrito</h3>

      <?php else :?>
      <?php foreach($carrito as $indice => $elemento):$producto = $elemento['producto'];?>
      <tr>
        <th scope="row">
          <img src="<?=$producto->imagen_producto?>" class="img_carrito" alt="imagen">
        </th>
        <td><?=$producto->nombre_producto?></td>
        <td>RD$ <?=$producto->precio?></td>
        <td><?=$elemento['unidades']?></td>
        <td>
          <div class="updown-unidades">
            <a href="<?=base_url?>Carrito/up&index=<?=$indice?>" class="btn btn-success">+</a>
            <a href="<?=base_url?>Carrito/down&index=<?=$indice?>" class="btn btn-success">-</a>
          </div>
        </td>
        <td>
          <a href="<?=base_url?>Carrito/delete&index=<?=$indice?>" class="btn btn-danger">
            <i class="fas fa-trash"></i>
          </a>
        </td>
      </tr>
      <?php endforeach;?>
      <?php endif;?>
    </tbody>
  </table>

  <div class="total-carrito">
    <?php $status = Utils::statuscarrito();?>
    <?php if(!isset($status['total'])) :?>
      <h3>Precio Total: 0</h3>
    <?php else :?>
      <h3>Precio Total: <?=$status['total']?></h3>
    <?php endif; ?> 
  </div>
</div>
<?php require_once('layouts/footer.php')?>